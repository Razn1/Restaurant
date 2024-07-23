@extends('layouts.master')
@section('title', 'Transaksi Edit')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Edit Transaksi Data</h2>
                            </div>
                            <div class="card-body">

                                <form action="/transaksi/{{ $tran->id }}/update" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" class="form-label">Kasir ID</label>
                                        <input type="text" name="kasir_id" value="{{ $tran->kasir_id }}"
                                            id="" class="form-control @error('name') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('name')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Total</label>
                                        <input type="text" name="total" value="{{ $tran->total }}" id=""
                                            class="form-control @error('total') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('total')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Tax</label>
                                        <input type="text" name="tax" value="{{ $tran->tax }}" id=""
                                            class="form-control @error('tax') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('tax')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- @if (Auth::user()->level === 'Admin') --}}
                                    <div class="form-group">
                                        <label for="" class="form-label">Grand Total</label>
                                        <input type="text" name="grand_total" value="{{ $tran->grand_total }}" id=""
                                            class="form-control @error('grand_total') is-invalid @enderror"
                                            aria-describedby="helpId" required>
                                        @error('grand_total')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    {{-- @endif --}}
                                    <button type="submit" class="btn btn-info text-dark">Save</button>
                                    <a href="/transaksi" type="reset" class="btn btn-secondary text-dark">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
