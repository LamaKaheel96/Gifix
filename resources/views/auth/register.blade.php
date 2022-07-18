<!doctype html>
<html class="no-js" lang="en">
    @include('layouts.head')
    <body class="skin-dark">
        <div class="main-wrapper">
            <div class="content-body m-0 p-0">
                <div class="login-register-wrap">
                    <div class="row">
                        <div class="d-flex align-self-center justify-content-center order-2 order-lg-1 col-lg-5 col-12">
                            <div class="login-register-form-wrap">
                                <div class="content">
                                    <h1>Sign up</h1>
                                    <p>Make an account, Have an access to GIFs.</p>
                                </div>
                                <div class="login-register-form">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 mb-20">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                                            required autocomplete="name" placeholder="Name">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="E-mail">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype Password">
                                            </div>
                                            <div class="col-12">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto mb-15">Already have account? <a href="{{ route('login') }}">Login Now.</a></div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-10">
                                                <button type="submit" class="button button-primary button-outline">
                                                    sign up
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                            <div class="content">
                                <h1>Sign up</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
