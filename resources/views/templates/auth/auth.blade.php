@extends('layouts.app')
@section('content')
    <div class="login-register-area pt-75 pb-75">
        <div class="container">
            <div class="justify-content-center d-flex">
                <div class="col-12 col-lg-6">
                    <div class="login-register-wrap login-register-gray-bg">
                        <div class="login-register-title">
                            <h1>{{__('Kyçu')}}</h1>
                            @if(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{\Illuminate\Support\Facades\Session::get('error')}}
                                </div>
                            @endif
                            @if(session('errorMessage'))
                                <div class="alert alert-danger" role="alert">
                                    {{\Illuminate\Support\Facades\Session::get('errorMessage')}}
                                </div>
                                @endif

                        </div>
                        <div class="login-register-form">
                            <form action="{{action('HomeController@authLogin')}}" method="post">
                                @csrf
                                <div class="login-register-input-style input-style input-style-white">
                                    <label>Email address *</label>
                                    <input type="email" name="email">
                                    @error('email')
                                    <span>{{__('Mbush')}}</span>
                                    @enderror
                                </div>
                                <div class="login-register-input-style input-style input-style-white">
                                    <label>Password *</label>
                                    <input type="password" name="password" required>
                                    @error('password')
                                    <span>{{__('Mbush')}}</span>
                                    @enderror
                                </div>
                                <div class="lost-remember-wrap">
                                    <div class="remember-wrap">
                                        <input type="checkbox">
                                        <span>{{__('Më mbaj mend')}}</span>
                                    </div>
                                    <div class="lost-wrap">
                                        <a href="{{action('HomeController@resetPasswordView')}}">{{__('Harruat passwordin?')}}</a>
                                    </div>
                                </div>
                                <div class="login-register-btn">
                                    <button type="submit">{{__('Kyçu')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
