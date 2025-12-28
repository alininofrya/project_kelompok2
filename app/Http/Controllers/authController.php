<?php

namespace App\Http\Controllers;

use Hash;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class authController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email|unique:mahasiswa',
        //     'password' => 'required|min:10'
        // ]);

        // $mahasiswa = new Mahasiswa();
        // $mahasiswa->email = $request->email;
        // $mahasiswa->password = Hash::make($request->password);
        // $mahasiswa->save();

        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function login(Request $request)
    {
        dd($request->all());

        $username = $request->input('email');
        $password = $request->input('password');
    }
}
