@extends('auth-layout')
@section('class-body','sing-up-page')
@section('content')

<div id="log-in" class="site-form log-in-form">
      
      	<div id="log-in-head">
        	<h1>ثبت نام</h1>
            <div id="logo"><a href="01-home.html"><img src="img/logo.png" alt=""></a></div>
        </div>
        
        <div class="form-output">
            <x-validation-errors></x-validation-errors>
        	<form action="{{ route('register.store') }}" method="post">
                @csrf
                <div class="form-group label-floating">
					<label class="control-label">نام</label>
					<input class="form-control" placeholder="" type='text' name="name">
				</div>
				<div class="form-group label-floating">
					<label class="control-label">ایمیل</label>
					<input class="form-control" placeholder="" type="email" name="email">
				</div>
				<div class="form-group label-floating">
					<label class="control-label">رمز عبور</label>
					<input class="form-control" placeholder="" type="password" name="password">
				</div>
                
				<div class="form-group label-floating">
					<label class="control-label">تأیید رمز عبور</label>
					<input class="form-control" placeholder="" type="password" name="password_confirmation">
				</div>
                
				<div class="remember">
					<div class="checkbox">
						<label>
							<input name="remember" type="checkbox">
							مرا به خاطر بسپار
						</label>
					</div>
				</div>
                <button type="submit" class="btn btn-lg btn-primary full-width">ثبت نام</button>
			  <div class="or"></div>
				<p>شما یک حساب کاربری دارید؟ <a href="{{ route('login.create') }}"> ورود!</a> </p>
            </form>
        </div>
      </div>
    @endsection