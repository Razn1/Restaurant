@extends('layouts.master')
@section('title', 'Menu')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h2>Data Menu</h2>
                                <div class="table-responsive">
                                    <table class="table text-dark" id="">
                                        <thead>
                                            <tr align="center">
                                                <th>ID</th>
                                                <th>Nama Menu</th>
                                                <th>Quantity</th>
                                                <th>Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($menu as $m)
                                                <tr align="center">
                                                    <td>{{ $m->id }}</td>
                                                    <td>{{ $m->nama_menu }}</td>
                                                    <td>{{ $m->quantity }}</td>
                                                    <td>{{ $m->harga }}</td>
                                                    <td>
                                                        <a href="/menu/{{ $m->id }}/edit" class="btn btn-warning">
                                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="/menu/{{ $m->id }}/delete" class="btn btn-danger"
                                                            onclick="return confirm('Apakah Anda Yakin Ingin Mengahpus ini?')"><i
                                                                class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection