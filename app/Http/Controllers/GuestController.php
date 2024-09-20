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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        Guest::create($validatedData);

        return redirect()->route('create')->with('success', 'Terima kasih sudah mengisi buku tamu!');
    }

    // Menampilkan daftar tamu
    public function index()
    {
        $guests = Guest::all();
        return view('index', compact('guests'));
    }
}
