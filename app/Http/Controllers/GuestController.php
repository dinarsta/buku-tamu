<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    // Menampilkan form buku tamu
    public function create()
    {
        return view('create');
    }


    // Menyimpan data buku tamu
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Simpan data buku tamu ke database (misalnya)
        Guest::create($request->all());

        // Kirim pesan sukses
        return redirect()->back()->with('success', 'Thank you for your response!');

    }


    // Menampilkan daftar tamu
    public function index()
    {
        $guests = Guest::all();
        return view('index', compact('guests'));
    }
}
