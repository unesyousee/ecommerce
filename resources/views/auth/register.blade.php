@extends('layouts.master')

@section('header')
    <!--bootstrap core-->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!--endbootstrap-->
    <!--Script-->
    <script src="{{asset('js/app.js')}}" defer></script>
    <!--endScript-->
@endsection

@section('content')
<div class="container">
    <div class="col-sm-9" id="content">
        <h1 class="title">ثبت نام حساب کاربری</h1>
        <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="login.html">صفحه لاگین</a> مراجعه کنید.</p>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            @csrf

            <fieldset id="account">
                <legend>اطلاعات شخصی شما</legend>

                <div class="form-group required">
                    <label for="name" class="col-sm-2 control-label">نام</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="نام" value="{{ old('name') }}" name="name">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
                        @endif
                    </div>
                </div>
                <div class="form-group required">
                    <label for="email" class="col-sm-2 control-label">آدرس ایمیل</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="آدرس ایمیل" value="{{ old('email') }}" name="email">
                    </div>
                </div>
                <div class="form-group required">
                    <label for="mobile_number" class="col-sm-2 control-label">شماره موبایل</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="mobile_number" placeholder="شماره موبایل" value="{{ old('mobile_number') }}" name="mobile_number">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
                        @endif
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>رمز عبور شما</legend>
                <div class="form-group required">
                    <label for="password" class="col-sm-2 control-label">رمز عبور</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="رمز عبور"  name="password">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
                        @endif
                    </div>
                </div>
                <div class="form-group required">
                    <label for="password-confirm" class="col-sm-2 control-label">تکرار رمز عبور</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="password-confirm" placeholder="تکرار رمز عبور"  name="password_confirmation" required>
                    </div>
                </div>
            </fieldset>
            <div class="buttons">
                <div class="pull-right">
                    <input type="checkbox" value="1" name="agree">
                    &nbsp; <a class="agree" href="#"><b>سیاست حریم خصوصی</b>من قوانین را مطالعه کرده و با آن موافق هستم</a> &nbsp;
                    <input type="submit" class="btn btn-primary" value="ادامه">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
