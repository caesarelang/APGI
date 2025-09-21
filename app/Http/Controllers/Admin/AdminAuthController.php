<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules\Password;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', $request->email)
                     ->where('is_active', true)
                     ->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Auth::guard('admin')->login($admin, $request->boolean('remember'));
            
            $request->session()->regenerate();
            
            return redirect()->intended(route('admin.dashboard'));
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials do not match our records.'],
        ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function showProfile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile.index', compact('admin'));
    }

    public function updateProfile(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:admins,email,' . $admin->id,
        ]);

        $admin->update($request->only(['name', 'email']));

        return redirect()->route('admin.profile')
                        ->with('success', 'Profile berhasil diperbarui.');
    }

    public function showChangePasswordForm()
    {
        return view('admin.change-password');
    }

    public function changePassword(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        
        $request->validate([
            'current_password' => 'required',
            'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()],
        ]);

        // Check if current password is correct
        if (!Hash::check($request->current_password, $admin->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['Password saat ini tidak benar.'],
            ]);
        }

        // Update password
        $admin->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.change-password')
                        ->with('success', 'Password berhasil diubah.');
    }
}
