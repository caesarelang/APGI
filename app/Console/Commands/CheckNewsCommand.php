<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\News;
use Carbon\Carbon;

class CheckNewsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check news data for debugging hosting issues';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('=== NEWS DEBUG INFORMATION ===');
        $this->info('Current time: ' . now()->format('Y-m-d H:i:s T'));
        $this->info('Environment: ' . app()->environment());
        $this->info('Database connection: ' . config('database.default'));
        
        // Check total news
        $totalNews = News::count();
        $this->info("Total news in database: {$totalNews}");
        
        // Check active news
        $activeNews = News::where('is_active', true)->count();
        $this->info("Active news: {$activeNews}");
        
        // Check published news
        $publishedNews = News::whereNotNull('published_at')->count();
        $this->info("News with published_at: {$publishedNews}");
        
        // Check published news <= now
        $publishedNow = News::whereNotNull('published_at')
                          ->where('published_at', '<=', now())
                          ->count();
        $this->info("Published news (published_at <= now): {$publishedNow}");
        
        // Check final query result
        $finalNews = News::active()->published()->latest()->take(6)->get();
        $this->info("Final query result count: {$finalNews->count()}");
        
        if ($finalNews->count() > 0) {
            $this->info("\n=== NEWS DETAILS ===");
            foreach ($finalNews as $news) {
                $this->info("- ID: {$news->id} | Title: {$news->title}");
                $this->info("  Active: " . ($news->is_active ? 'Yes' : 'No'));
                $this->info("  Published: " . ($news->published_at ? $news->published_at->format('Y-m-d H:i:s') : 'NULL'));
                $this->info("  Image: " . ($news->image_path ?: 'No image'));
                $this->info("  Link: " . ($news->link ?: 'No link'));
                $this->info("");
            }
        }
        
        // Test timezone
        $this->info("=== TIMEZONE INFO ===");
        $this->info("App timezone: " . config('app.timezone'));
        $this->info("DB timezone: " . now()->timezone);
        $this->info("Current timestamp: " . now()->timestamp);
        
        // Check storage configuration
        $this->info("\n=== STORAGE INFO ===");
        $this->info("Storage path: " . storage_path('app/public'));
        $this->info("Public storage path: " . public_path('storage'));
        $this->info("Storage link exists: " . (is_link(public_path('storage')) ? 'Yes' : 'No'));
        
        // Check image paths
        if ($finalNews->count() > 0) {
            $this->info("\n=== IMAGE PATH TESTS ===");
            $newsWithImage = $finalNews->where('image_path', '!=', null)->first();
            if ($newsWithImage) {
                $paths = [
                    'storage/' . $newsWithImage->image_path,
                    'storage/app/public/' . $newsWithImage->image_path,
                ];
                
                foreach ($paths as $path) {
                    $fullPath = public_path($path);
                    $exists = file_exists($fullPath);
                    $this->info("Path: {$path} -> " . ($exists ? 'EXISTS' : 'NOT FOUND'));
                    if ($exists) {
                        $this->info("  Size: " . filesize($fullPath) . " bytes");
                    }
                }
            }
        }
        
        return Command::SUCCESS;
    }
}
