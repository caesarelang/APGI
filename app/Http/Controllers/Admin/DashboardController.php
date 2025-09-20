<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Event;
use App\Models\SocialContent;
use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'galleries' => Gallery::count(),
            'events' => Event::count(),
            'social_contents' => SocialContent::count(),
            'news' => News::count(),
        ];

        $recent_events = Event::active()
                             ->upcoming()
                             ->latest()
                             ->take(5)
                             ->get();

        $recent_social = SocialContent::active()
                                     ->published()
                                     ->latest()
                                     ->take(5)
                                     ->get();
                                     
        $recent_news = News::active()
                          ->published()
                          ->latest()
                          ->take(5)
                          ->get();

        return view('admin.dashboard', compact('stats', 'recent_events', 'recent_social', 'recent_news'));
    }
}
