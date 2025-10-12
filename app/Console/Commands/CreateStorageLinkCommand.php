<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateStorageLinkCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'storage:link-manual';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create storage link manually for hosting that does not support exec()';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Creating storage link manually...');
        
        $target = storage_path('app/public');
        $link = public_path('storage');
        
        $this->info("Target: {$target}");
        $this->info("Link: {$link}");
        
        // Check if target exists
        if (!File::exists($target)) {
            File::makeDirectory($target, 0755, true);
            $this->info('Created storage/app/public directory');
        }
        
        // Remove existing link if it exists
        if (File::exists($link)) {
            if (is_link($link)) {
                unlink($link);
                $this->info('Removed existing storage link');
            } elseif (File::isDirectory($link)) {
                File::deleteDirectory($link);
                $this->info('Removed existing storage directory');
            } else {
                File::delete($link);
                $this->info('Removed existing storage file');
            }
        }
        
        // Try different methods to create link
        $success = false;
        
        // Method 1: Try native symlink
        if (function_exists('symlink')) {
            try {
                $success = symlink($target, $link);
                if ($success) {
                    $this->info('✅ Storage link created successfully using symlink()');
                }
            } catch (\Exception $e) {
                $this->warn('symlink() failed: ' . $e->getMessage());
            }
        }
        
        // Method 2: Copy directory structure (fallback)
        if (!$success) {
            try {
                // Create the public/storage directory
                File::makeDirectory($link, 0755, true);
                
                // Copy all files and folders from storage/app/public to public/storage
                if (File::exists($target)) {
                    $this->copyDirectory($target, $link);
                }
                
                $success = true;
                $this->info('✅ Storage files copied successfully (fallback method)');
                $this->warn('Note: This copies files instead of creating a symbolic link');
                $this->warn('You may need to re-run this command when new files are uploaded');
            } catch (\Exception $e) {
                $this->error('Failed to copy files: ' . $e->getMessage());
            }
        }
        
        if ($success) {
            $this->info('🎉 Storage is now accessible via public/storage');
            $this->info('Test by uploading a news image in admin panel');
        } else {
            $this->error('❌ Failed to create storage link');
            $this->info('Manual solution: Create a folder named "storage" in public folder');
            $this->info('Then copy contents of storage/app/public to public/storage');
        }
        
        return $success ? Command::SUCCESS : Command::FAILURE;
    }
    
    /**
     * Copy directory recursively
     */
    private function copyDirectory($source, $destination)
    {
        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0755, true);
        }
        
        $files = File::allFiles($source);
        $directories = File::directories($source);
        
        // Copy directories
        foreach ($directories as $directory) {
            $relativePath = str_replace($source, '', $directory);
            $newDirectory = $destination . $relativePath;
            
            if (!File::exists($newDirectory)) {
                File::makeDirectory($newDirectory, 0755, true);
            }
            
            $this->copyDirectory($directory, $newDirectory);
        }
        
        // Copy files
        foreach ($files as $file) {
            $relativePath = str_replace($source, '', $file->getPathname());
            $newFile = $destination . $relativePath;
            
            File::copy($file->getPathname(), $newFile);
        }
    }
}
