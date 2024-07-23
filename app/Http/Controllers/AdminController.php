<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminController extends Controller
{
    public function index()
    {
        // if (Auth()->user()->level != 'Admin') {
        //     Auth::logout();
        //     return redirect('/login')->with('error', 'Anda Tidak Memiliki Akses');
        // } else {
        $user = User::all();
        return view('admin.index', compact(['user']));
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:5|max:20',
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'level' => $request->level,
            $request->except(['_token']),
        ]);
        return redirect('/user')->with('message', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.edit', compact(['user']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $id,
            'level' => 'required'
        ]);

        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'level' => $request->level,
            $request->except(['_token'])
        ]);

        // if (auth()->user()->level === 'Pembimbing') {
        //     return redirect('/prof')->with('update', 'Data Berhasil Diupdate');
        // }

        return redirect('/user')->with('update', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user')->with('delete', 'Data Telah Dihapus');
    }
}
