<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Transaksimenu;
use App\User;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
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
        $tran = Transaksi::all();
        return view('transaksi.index', compact(['tran']));
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kasir = User::all();
        return view('transaksi.tambah',compact('kasir'));
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

        $total = $request->id;
        $trans = Transaksimenu::find($total);

        $totall = $trans->total;
        $tax = $totall * 10 / 100;

        Transaksi::create([
            'kasir_id' => Auth::user()->id,
            'total' => $totall,
            'tax' => $tax,
            'grand_total' => $request->grand_total,
        ]);
        return redirect('/transaksi')->with('message', 'Data Telah Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tran = Transaksi::find($id);
        return view('transaksi.edit', compact(['tran']));
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

        $tran = Transaksi::find($id);
        $tran->update([
            'kasir_id' => $request->kasir_id,
            'total' => $request->total,
            'tax' => $request->tax,
            'grand_total' => $request->grand_total,
            $request->except(['_token']),
        ]);

        // if (auth()->user()->level === 'Pembimbing') {
        //     return redirect('/prof')->with('update', 'Data Berhasil Diupdate');
        // }

        return redirect('/transaksi')->with('update', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tran = Transaksi::find($id);
        $tran->delete();
        return redirect('/transaksi')->with('delete', 'Data Telah Dihapus');
    }
}
