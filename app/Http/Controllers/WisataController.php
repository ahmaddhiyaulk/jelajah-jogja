<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;

class WisataController extends Controller
{
     public function home()
    {
        return view('home');
    }

    public function index()
    {
        $wisata = Wisata::semua();

        return view('wisata.index', compact('wisata'));
    }

    public function show($id)
    {
        $wisata = Wisata::cari($id);

        if (!$wisata) {
            abort(404);
        }

        return view('wisata.show', compact('wisata'));
    }
}
