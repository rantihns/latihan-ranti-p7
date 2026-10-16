<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Http\Request;

class SpeakerController extends Controller
{
    /**
     * Menampilkan daftar seluruh produk speaker BlackSpider (Menu 3: Produk).
     */
    public function index(Request $request)
    {
        $query = Speaker::query();

        // Fitur pencarian sederhana jika dosen/asisten ingin mencoba mencari
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%");
            });
        }

        // Filter berdasarkan kategori
        if ($request->filled('category') && $request->input('category') !== 'all') {
            $query->where('category', $request->input('category'));
        }

        $speakers = $query->orderBy('id', 'asc')->get();
        $categories = Speaker::select('category')->distinct()->pluck('category');

        return view('speakers.index', compact('speakers', 'categories'));
    }

    /**
     * Menampilkan detail spesifikasi satu produk speaker.
     */
    public function show(Speaker $speaker)
    {
        $relatedSpeakers = Speaker::where('category', $speaker->category)
            ->where('id', '!=', $speaker->id)
            ->take(3)
            ->get();

        return view('speakers.show', compact('speaker', 'relatedSpeakers'));
    }
}
