@extends('layouts.app')

@section('content')
    <section class="hero is-info is-large" id="login-container">
        <div class="hero-body">
            <div class="container" style="z-index:1;">
                <div class="columns is-centered">
                    <div class="column is-half">
                        <h3 class="has-text-centered" style="font-size:18px; font-weight: bold; color:black; background:white">{{ __('Login') }}</h3>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="field">
                                <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                                <div class="control">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="field">
                                <label for="password" class="label">{{ __('Password') }}</label>

                                <div class="control">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="is-overlay has-background-light" style="opacity:0.5"></div>
        </div>
    </section>
@endsection
