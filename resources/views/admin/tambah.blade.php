@extends('layouts.master')
@section('title', 'Add User')
@section('content')
    <br>
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>Add User Data</h2>
                            </div>
                            <div class="card-body">
                                <form action="/user/save" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="" class="form-label">Nama</label>
                                        <input type="text" name="name" id=""
                                            class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Masukan Name" value="{{ old('name') }}"
                                            aria-describedby="helpId" required>
                                        @error('name')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Username</label>
                                        <input type="text" name="username" id=""
                                            class="form-control @error('username') is-invalid @enderror"
                                            placeholder="Masukan Username" value="{{ old('username') }}"
                                            aria-describedby="helpId" required>
                                        @error('username')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Password</label>
                                        <input type="password" name="password" id=""
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Masukan Password" value="{{ old('password') }}"
                                            aria-describedby="helpId" required>
                                        @error('password')
                                            <div class="invalidate-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="form-label">Level</label>
                                        <select name="level" class="form-control" value="{{ old('level') }}"
                                            id="">
                                            <option value="Admin">Admin</option>
                                            <option value="Kasir">Kasir</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-info text-dark">Save</button>
                                    <a href="/user" type="reset" class="btn btn-secondary text-dark">Cancel</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection