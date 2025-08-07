<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $nama = 'Fernando';
        $alamat = 'Jalan ilhamhitam';
        $no = '23';

        // return view('users.index', compact('nama', 'alamat', 'no'));
        return view('users.index', [
            'nama'=> $nama,
            'alamat'=> $alamat,
            'no' => $no,
        ]);
    }

    public function show($id)
    {
        return "ini adalah pengguna id $id";
    }
}
    