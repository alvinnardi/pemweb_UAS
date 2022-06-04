@extends('layouts.main')
<br/>
@section('container')
<div style="width:100%;">
        <div class="logreg">
            <div class="row">
                <div class="col-4 col-lg-2 col-md-12"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                </div>                
                <div class="col-4 col-lg-2 col-md-12"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                </div>
                <div class="col-4 col-lg-2 col-md-12"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                </div>
                <div class="col-12 col-lg-6 col-md-12"><br/><br/><br/>   
                    <div style="margin: 5% 5% 5% 5%">
                        <h1 style="text-align:right; font-size:188%">Selamat Datang</h1>
                        <h1 style="text-align:right">Di Halaman daftar</h1>
                        <h1 style="text-align:right; font-size:318%">RESTRY</h1><br/><br/><br/>
                            <div class="row justify-content-end">
                                <div class="col-12 col-lg-8 col-md-10">
                                    <form action="/register" method="post">
                                        @csrf
                                        <div class="form-floating">
                                            <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Nama" required value="{{ old('name') }}">
                                            <label for="name">Nama Lengkap</label>
                                            @error('name')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating">
                                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Nama Akun" required value="{{ old('username') }}">
                                            <label for="username">Nama Akun</label>
                                            @error('username')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email@example.com" required value="{{ old('email') }}">
                                            <label for="email">Alamat Email</label>
                                            @error('email')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                            @enderror
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Kata Sandi" required >
                                            <label for="password">Kata Sandi</label>
                                            @error('Kata Sandi')
                                            <div class="invalid-feedback"> {{ $message }} </div>
                                            @enderror
                                        </div>
                                        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
                                    </form>
                                    <small class="d-block text-center mt-3">Sudah pernah mendaftar ? <br/><a href="/login">Masuk sekarang !</a></small>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection