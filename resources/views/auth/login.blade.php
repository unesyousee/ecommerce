@extends('layouts.master')

@section('header')
    <!--bootstrap core-->
     <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!--endbootstrap-->
    <!--Script-->
    <script src="{{asset('js/app.js')}}" defer></script>
    <!--endScript-->
    <title>ورود</title>
    <!-- CSS Part Start-->

@endsection

@section('content')
    <div class="container">


        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div id="content" class="col-sm-9">
                    <h1 class="title">حساب کاربری ورود</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 class="subtitle">مشتری جدید</h2>
                            <p><strong>ثبت نام حساب کاربری</strong></p>
                            <p>با ایجاد حساب کاربری میتوانید سریعتر خرید کرده، از وضعیت خرید خود آگاه شده و تاریخچه ی سفارشات خود را مشاهده کنید.</p>
                            <a href="register.html" class="btn btn-primary">ادامه</a> </div>
                        <div class="col-sm-6">
                            <h2 class="subtitle">مشتری قبلی</h2>
                            <p><strong>من از قبل مشتری شما هستم</strong></p>
                            <div class="form-group">
                                <label class="control-label" for="mobile_number">شماره تلفن</label>
                                <input type="text" name="mobile_number" value="{{old('mobile_number')}}" placeholder="شماره تلفن" id="mobile_number" class="form-control{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}" />
                                @if ($errors->has('mobile_number'))
                                    <span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('mobile_number') }}</strong>
						</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">رمز عبور</label>
                                <input type="password" name="password" value="" placeholder="رمز عبور" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" />
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
                                @endif
                                <br />
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('رمز عبور را فراموش کرده ام!') }}
                                    </a>
                                @endif
                                <input type="submit" value="ورود" class="btn btn-primary" />
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--Middle Part End -->
            <!--Right Part Start -->
            <aside id="column-right" class="col-sm-3 hidden-xs">
                <h3 class="subtitle">حساب کاربری</h3>
                <div class="list-group">
                    <ul class="list-item">
                        <li><a href="login.html">ورود</a></li>
                        <li><a href="register.html">ثبت نام</a></li>
                        <li><a href="#">فراموشی رمز عبور</a></li>
                        <li><a href="#">حساب کاربری</a></li>
                        <li><a href="#">لیست آدرس ها</a></li>
                        <li><a href="wishlist.html">لیست علاقه مندی</a></li>
                        <li><a href="#">تاریخچه سفارشات</a></li>
                        <li><a href="#">دانلود ها</a></li>
                        <li><a href="#">امتیازات خرید</a></li>
                        <li><a href="#">بازگشت</a></li>
                        <li><a href="#">تراکنش ها</a></li>
                        <li><a href="#">خبرنامه</a></li>
                        <li><a href="#">پرداخت های تکرار شونده</a></li>
                    </ul>
                </div>
            </aside>
            <!--Right Part End -->

        </div>

    </div>
@endsection
