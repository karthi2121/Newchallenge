@extends('layouts.app')
@section('title','Login')
@section('content')

	<main role="main">
	    <section class="section-accounts d-flex align-items-center" style="background-image: url('{{ asset('img/account/account-bg.png') }}');">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-5">
	                    <img class="mb-4" src="{{ asset('img/account/large-logo.png') }}">
	                    <div class="mb-4 form-option d-flex flex-wrap">
	                        <a href="{{ route('register') }}"  class="{{ (request()->route()->uri()=='register')?'current':'' }}" >Sign up</a>
	                        <a href="{{ route('login') }}"  class="{{ (request()->route()->uri()=='login')?'current':'' }}" >Login</a>
	                    </div>
	                   	@if(request()->route()->uri()=='register')
	                   		@include('auth.signup-form')
	                    @else
	                    	@include('auth.login-form')
	                    @endif
	                    <div class="or-divider">
	                        <span>OR</span>
	                    </div>
	                    <div class="other-login mt-4 text-center">
	                        <div class="row">
	                            <div class="col-md-6">
	                                <a href="#" class="login-link">
	                                    <img src="{{ asset('img/account/login-facebook.png') }}">
	                                </a>
	                            </div>
	                            <div class="col-md-6">
	                                <a href="#" class="login-link">
	                                    <img src="{{ asset('img/account/login-google.png') }}">
	                                </a>
	                            </div>
	                        </div>
	                        
	                    </div>
	                </div>
	            </div>
	        </div>
	    </section>
	</main>
	@section('js')
		<script src="{{ asset('js/frontend/login.js') }}"></script>
	@endsection
	<script type="text/javascript">
		var registerRoute='{{ route("register") }}';
		var gameRoute='{{ route("games") }}';
	</script>
@endsection