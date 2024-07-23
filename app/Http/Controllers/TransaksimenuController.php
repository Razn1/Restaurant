<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksimenu;
use App\Transaksi;
use App\Menu;
use Illuminate\Support\Facades\Auth;

class TransaksimenuController extends Controller
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
        $tranm = Transaksimenu::all();
        return view('tran_menu.index', compact('tranm','menu'));
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();
        $tranm = Transaksimenu::all();
        $tran = Transaksi::all();
        return view('tran_menu.tambah',compact('menu','tranm','tran'));
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
        // $total = $request->id;
        // $menu = Menu::find($total);

        $totall = $request->price * $request->quantity;

        Transaksimenu::create([
            'menu_id' => $request->menu_id,
            'transaksi_id' => $request->transaksi_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'total' => $totall,
            $request->except(['_token']),
        ]);
        return redirect('/tranmenu')->with('message', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tranm = Transaksimenu::find($id);
        return view('tran_menu.edit', compact(['tranm']));
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
        // $validateData = $request->validate([
        //     'nama' => 'required',
        //     'username' => 'required|unique:users,username,' . $id,
        //     'level' => 'required'
        // ]);

        $tranm = Transaksimenu::find($id);
        $tranm->update([
            'menu_id' => $request->menu_id,
            'transaksi_id' => $request->transaksi_id,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'total' => $request->total,
            $request->except(['_token']),
        ]);

        // if (auth()->user()->level === 'Pembimbing') {
        //     return redirect('/prof')->with('update', 'Data Berhasil Diupdate');
        // }

        return redirect('/tranmenu')->with('update', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tranm = Transaksimenu::find($id);
        $tranm->delete();
        return redirect('/tranmenu')->with('delete', 'Data Telah Dihapus');
    }
}
