@extends('layouts.master')
@section('title', 'Add Transaksi')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Add Transaksi Data</h2>
                            </div>
                            <div class="card-body">
                                <form action="/transaksi/save" method="post">
                                    @csrf
                                    {{-- <div class="form-group">
                                        <label for="">Kasir</label>
                                        <input type="number" name="kasir_id" class="form-control"
                                            value="{{ Auth()->user()->id }}" required>
                                    </div> --}}
                                    {{-- <div class="form-group">
                                        <label for="" class="form-label">Total</label>
                                        <input type="number" name="total" id=""
                                            class="form-control @error('quantity') is-invalid @enderror"
                                            placeholder="Masukan Total" value="{{ old('total') }}"
                                            aria-describedby="helpId" required>
                                        @error('total')
                                            <div class="invalidate-feedback">
                                                {{ $kessage }}
                                            </div>
                                        @enderror
                                    </div> --}}
                                    {{-- <div class="form-group">
                                        <label for="" class="form-label">Tax</label>
                                        <input type="number" name="tax" id=""
                                            class="form-control @error('tax') is-invalid @enderror"
                                            placeholder="Masukan Tax" value="{{ old('tax') }}" aria-describedby="helpId"
                                            required>
                                        @error('tax')
                                            <div class="invalidate-feedback">
                                                {{ $kessage }}
                                            </div>
                                        @enderror
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="" class="form-label">Grand Total</label>
                                        <input type="number" name="grand_total" id=""
                                            class="form-control @error('grand total') is-invalid @enderror"
                                            placeholder="Masukan Tax" value="{{ old('grand total') }}"
                                            aria-describedby="helpId" required>
                                        @error('grand total')
                                            <div class="invalidate-feedback">
                                                {{ $kessage }}
                                            </div>
                                        @enderror
                                    </div>
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
