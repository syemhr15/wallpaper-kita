<?php

namespace App\Http\Controllers;

use App\Models\Wallpaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WallpaperController extends Controller
{
    // simpan wallpaper ke db
    public function store(Request $request) {
        $save = Wallpaper::create([
            'user_id' => Auth::id(),
            'photographer' => $request->photographer,
            'image_url' => $request->image_url,
            'unsplash_link' => $request->unsplash_link,
        ]);

        return response()->json(['status' => 'success']);
    }

    // menampilkan koleksi saya
    public function index() {
        $koleksi = Wallpaper::where('user_id', Auth::id())->get();
        return view('koleksi', compact('koleksi'));
    }

    // menghapus kolksi
    public function destroy($id) {
        $wallpaper = Wallpaper::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $wallpaper->delete();
        return back()->with('success', 'Wallpaper dihapus!');
    }
}