@extends('layouts.default')
@section('content')

    <section class="hero is-info is-large" id="login-container">
        <div class="hero-body">
            <div class="container" style="z-index:1;">
                <div class="columns is-centered">
                    <div class="column is-half">
                        <h3 class="has-text-centered" style="font-size:18px; font-weight: bold; color:black; background:white">Log In</h3>
                        <form action="" id="login">
                            <div class="field">
                                <label class="label">Username</label>
                                <div class="control">
                                    <input class="input" type="text" name="username" placeholder="username" />
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Password</label>
                                <div class="control">
                                    <input class="input" type="password" />
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <button class="button is-link is-light">Log In</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="is-overlay has-background-light" style="opacity:0.5"></div>
        </div>
    </section>
@stop