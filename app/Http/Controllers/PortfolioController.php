<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->get();
        return view('beranda', compact('portfolios'));
    }

    public function show($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolio-detail', compact('portfolio'));
    }

    // UPDATE: Kirim data portfolio ke halaman admin agar bisa dilist
    public function admin()
    {
        $portfolios = Portfolio::latest()->get(); 
        return view('admin', compact('portfolios'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'description' => 'required',
        ]);

        $imagePath = $request->file('image')->store('portfolios', 'public');

        Portfolio::create([
            'title' => $request->title,
            'category' => $request->category,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Portfolio berhasil ditambahkan!');
    }

    // BARU: Fitur Hapus
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);

        // 1. Hapus Gambar dari Storage (biar server gak penuh sampah)
        if ($portfolio->image) {
            Storage::disk('public')->delete($portfolio->image);
        }

        // 2. Hapus Data dari Database
        $portfolio->delete();

        return redirect()->back()->with('success', 'Portfolio berhasil dihapus!');
    }
}