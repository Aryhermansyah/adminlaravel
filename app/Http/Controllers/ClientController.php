<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Jika Anda akan menggunakan Model Client, tambahkan use statement:
// use App\Models\Client;

class ClientController extends Controller
{
    /**
     * Menampilkan daftar resource (clients).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Logika untuk mengambil data clients dari database
        // Contoh data dummy:
        $clients = [
            ['id' => 1, 'name' => 'Client A', 'email' => 'clienta@example.com'],
            ['id' => 2, 'name' => 'Client B', 'email' => 'clientb@example.com'],
        ];

        // Jika menggunakan Model:
        // $clients = Client::all();

        return response()->json($clients);
    }

    // Tambahkan method lain sesuai kebutuhan (show, store, update, destroy)
} 