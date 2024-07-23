@extends('layouts.master')
@section('title', 'Transaksi Menu Edit')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Edit Tansaksi Menu Data</h2>
                            </div>
                            <div class="card-body">

                                <form action="/tranmenu/{{ $tranm->id }}/update" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" class="form-label">Menu ID</label>
                                        <input type="text" name="menu_id" value="{{ $tranm->menu_id }}" id=""
                                            class="form-control @error('menu_id') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('menu_id')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Transaksi ID</label>
                                        <input type="text" name="transaksi_id" value="{{ $tranm->transaksi_id }}"
                                            id="" class="form-control @error('transaksi_id') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('transaksi_id')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Quantity</label>
                                        <input type="text" name="quantity" value="{{ $tranm->quantity }}" id=""
                                            class="form-control @error('quantity') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('quantity')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- @if (Auth::user()->level === 'Admin') --}}
                                    <div class="form-group">
                                        <label for="" class="form-label">Price</label>
                                        <input type="text" name="price" value="{{ $tranm->price }}" id=""
                                            class="form-control @error('price') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('price')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Total</label>
                                        <input type="text" name="total" value="{{ $tranm->total }}" id=""
                                            class="form-control @error('total') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('total')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- @endif --}}
                                    <button type="submit" class="btn btn-info text-dark">Save</button>
                                    <a href="/tranmenu" type="reset" class="btn btn-secondary text-dark">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
