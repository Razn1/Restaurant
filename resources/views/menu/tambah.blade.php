@extends('layouts.master')
@section('title', 'Add Menu')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Add Menu Data</h2>
                            </div>
                            <div class="card-body">
                                <form action="/menu/save" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" class="form-label">Nama Menu</label>
                                        <input type="text" name="nama_menu" id=""
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Masukan Nama Menu" value="{{ old('nama menu') }}"
                                            aria-describedby="helpId" required>
                                        @error('name')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Quantity</label>
                                        <input type="number" name="quantity" id=""
                                            class="form-control @error('quantity') is-invalid @enderror"
                                            placeholder="Masukan Quantity" value="{{ old('quantity') }}"
                                            aria-describedby="helpId" required>
                                        @error('quantity')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Harga</label>
                                        <input type="number" name="harga" id=""
                                            class="form-control @error('harga') is-invalid @enderror"
                                            placeholder="Masukan Harga" value="{{ old('harga') }}"
                                            aria-describedby="helpId" required>
                                        @error('harga')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
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