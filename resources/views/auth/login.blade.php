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
                                    <h1><strong class="font-weight-bold">GIFX Browsing App</strong>- Sign in</h1>
                                    <p>Get Access To Tens Of GIFS, By One App.</p>
                                </div>
                                <div class="login-register-form">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-12 mb-20">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="E-mail">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12 mb-20">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                                placeholder="Password">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-12 mb-20">
                                                <label for="remember" class="adomx-checkbox-2">
                                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><i class="icon"></i>Remember.
                                                </label>
                                            </div>
                                            <div class="col-12">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto mb-15">Dont have account? <a href="{{ route('register') }}">Create Now.</a></div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-10">
                                                <button type="submit" class="button button-primary button-outline">
                                                    sign in
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="login-register-bg order-1 order-lg-2 col-lg-7 col-12">
                            <div class="content">
                                <h1>Sign in</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.scripts')
    </body>
</html>
