<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (Auth()->user()->level != 'Admin') {
        //     Auth::logout();
        //     return redirect('/login')->with('error', 'Anda Tidak Memiliki Akses');
        // } else {
        $menu = Menu::all();
        return view('menu.index', compact(['menu']));
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validateData = $request->validate([
        //     'nama' => 'required',
        //     'username' => 'required|unique:users',
        //     'password' => 'required|min:5|max:20',
        // ]);
        Menu::create([
            'nama_menu' => $request->nama_menu,
            'quantity' => $request->quantity,
            'harga' => $request->harga,
            $request->except(['_token']),
        ]);
        return redirect('/menu')->with('message', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::find($id);
        return view('menu.edit', compact(['menu']));
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
            'nama_menu' => 'required',
            'quantity' => 'required',
            'harga' => 'required'
        ]);

        $menu = Menu::find($id);
        $menu->update([
            'nama_menu' => $request->nama_menu,
            'quantity' => $request->quantity,
            'harga' => $request->harga,
            $request->except(['_token']),
        ]);

        return redirect('/menu')->with('update', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/menu')->with('delete', 'Data Telah Dihapus');
    }
}
