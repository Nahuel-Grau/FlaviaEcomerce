<?php

namespace App\Http\Controllers;

use App\Models\Banner;

class HomeController extends Controller
{
    public function index()
    {
        $now = now();

        $banner = Banner::query()
            ->where('is_active', true)
            ->where(function ($query) use ($now) {
                $query->whereNull('starts_at')
                    ->orWhere('starts_at', '<=', $now);
            })
            ->where(function ($query) use ($now) {
                $query->whereNull('ends_at')
                    ->orWhere('ends_at', '>=', $now);
            })
            ->latest()
            ->first();

        return view('home.index', compact('banner'));
    }
}