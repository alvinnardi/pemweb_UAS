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
                        <h1 style="text-align:right">Di Halaman masuk</h1>
                        <h1 style="text-align:right; font-size:318%">RESTRY</h1><br/>
                            <div class="row justify-content-end">
                                <div class="col-12 col-lg-8 col-md-10">
                                @if(session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">  
                                        {{ session('success') }} 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>  
                                @endif

                                @if(session()->has('loginError'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">  
                                        {{ session('loginError') }} 
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>  
                                @endif
                                <main class="form-signin">
                                    <h1 class="h3 mb-3 fw-normal text-center">Masuk RESTRY</h1>
                                    <form action="/login" method="post">
                                        @csrf
                                        <div class="form-floating mb-1">
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                                            <label for="email">Alamat Email</label>
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-2">
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                            <label for="password">Kata Sandi</label>
                                        </div>
                                        <button class="w-100 btn btn-lg btn-primary" type="submit">masuk</button>
                                    </form>
                                    <small class="d-block text-center mt-3">belum pernah mendaftar akun restry ? <br/><a href="/register">daftar sekarang !</a></small>
                                </main>
                            </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection