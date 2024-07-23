@extends('layouts.master')
@section('title', 'Menu Edit')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Edit Menu Data</h2>
                            </div>
                            <div class="card-body">

                                <form action="/menu/{{ $menu->id }}/update" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" class="form-label">Nama Menu</label>
                                        <input type="text" name="nama_menu" value="{{ $menu->nama_menu }}"
                                            id="" class="form-control @error('nama_menu') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('nama_menu')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Quantity</label>
                                        <input type="text" name="quantity" value="{{ $menu->quantity }}" id=""
                                            class="form-control @error('quantity') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('quantity')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Harga</label>
                                        <input type="text" name="harga" value="{{ $menu->harga }}" id=""
                                            class="form-control @error('harga') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('harga')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- @if (Auth::user()->level === 'Admin') --}}
                                    {{-- <div class="form-group">
                                        <label for="" class="form-label">Grand Total</label>
                                        <input type="text" name="grand_total" value="{{ $menu->grand_total }}" id=""
                                            class="form-control @error('grand_total') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('grand_total')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div> --}}
                                    {{-- @endif --}}
                                    <button type="submit" class="btn btn-info text-dark">Save</button>
                                    <a href="/menu" type="reset" class="btn btn-secondary text-dark">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
