@extends('layouts.master')
@section('title', 'Add Transaksi Menu')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Add Transaksi Menu Data</h2>
                            </div>
                            <div class="card-body">
                                <form action="/tranmenu/save" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="" class="form-label">Menu</label>
                                        <select required class="form-select form-select-lg" name="menu_id" id="">
                                            @foreach ($menu as $m)
                                                <option value="{{ $m->id }}">{{ $m->nama_menu }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Transaksi ID</label>
                                        <select required class="form-select form-select-lg" name="transaksi_id" id="">
                                            @foreach ($tran as $tr)
                                                <option value="{{ $tr->id }}">{{ $tr->id }}</option>
                                            @endforeach
                                        </select>
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
                                    <div class="mb-3">
                                        <label for="" class="form-label">Price</label>
                                        <select required class="form-select form-select-lg" name="price" id="">
                                            @foreach ($tranm as $m)
                                                <option value="{{ $m->menu->harga }}">{{ $m->menu->harga }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="mb-3">
                                        <label for="" class="form-label">Total</label>
                                        <select required class="form-select form-select-lg" name="total" id="">
                                            @foreach ($totall as $m)
                                                <option value="{{ $totall}}">{{ $totall }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
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
