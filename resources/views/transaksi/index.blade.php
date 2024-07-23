@extends('layouts.master')
@section('title', 'Transaksi')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header bg-white">
                                <h2>Data Transaksi</h2>
                                <div class="table-responsive">
                                    <table class="table text-dark" id="">
                                        <thead>
                                            <tr align="center">
                                                <th>ID</th>
                                                <th>kasir ID</th>
                                                <th>Total</th>
                                                <th>Tax</th>
                                                <th>Grand Total</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tran as $tr)
                                                <tr align="center">
                                                    <td>{{ $tr->id }}</td>
                                                    <td>{{ $tr->user->name }}</td>
                                                    <td>{{ $tr->total }}</td>
                                                    <td>{{ $tr->tax }}</td>
                                                    <td>{{ $tr->grand_total }}</td>
                                                    <td>
                                                        <a href="/transaksi/{{ $tr->id }}/edit" class="btn btn-warning">
                                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        </a>
                                                        <a href="/transaksi/{{ $tr->id }}/delete" class="btn btn-danger"
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