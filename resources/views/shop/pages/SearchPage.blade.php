@extends('layouts.master')
@section('content')

    <!-- Main آقایانu End-->


    <div class="container">
        <!-- Breadcrumb Start-->
        <ul class="breadcrumb">
            <li><a href="../resources/views/shop/index.blade.php"><i class="fa fa-home"></i></a></li>
            <li><a href="/goods">محصولات</a></li>
        </ul>
        <!-- Breadcrumb End-->
        <div class="row">
            <!-- Left Part Start-->
            <aside id="column-left" class="col-sm-3 hidden-xs">
                <h3 class="subtitle">دسته ها</h3>
                <div class="box-category">
                    <ul id="cat_accordion">
                        <li><a href="/goods/?goodcat=art">صنایع دستی</a></li>
                        <li><a href="/goods/?goodcat=food">مواد خوراکی</a></li>
                        <li><a href="/goods/?goodcat=herbal">گیاهان دارویی</a></li>
                        <li><a href="/goods/?goodcat=home">لوازم خانگی</a></li>
                        <li><a href="/goods/?goodcat=cloth">پوشاک</a></li>
                        <li><a href="/goods/?goodcat=plant">گل و گیاه</a></li>
                        {{--<ul>--}}
                        {{--<li><a href="category.html">آقایان</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته ها</a></li>--}}
                        {{--<li><a href="category.html">زیردسته ها</a></li>--}}
                        {{--<li><a href="category.html">زیردسته ها</a></li>--}}
                        {{--<li><a href="category.html">زیردسته ها</a></li>--}}
                        {{--<li><a href="category.html">زیردسته جدید</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">بانوان</a></li>--}}
                        {{--<li><a href="category.html">دخترانه</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته ها</a></li>--}}
                        {{--<li><a href="category.html">زیردسته جدید</a></li>--}}
                        {{--<li><a href="category.html">زیردسته جدید</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">پسرانه</a></li>--}}
                        {{--<li><a href="category.html">نوزاد</a></li>--}}
                        {{--<li><a href="category.html">لوازم</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">الکترونیکی</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">لپ تاپ</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--<li><a href="category.html">زیردسته جدید</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="custom_id68"><a href="category.html">رومیزی</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--<li><a href="category.html">زیردسته جدید</a></li>--}}
                        {{--<li><a href="category.html">زیردسته جدید</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">دوربین</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">موبایل و تبلت</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">صوتی و تصویری</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--<li><a href="category.html">زیردسته جدید</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">لوازم خانگی</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">کفش</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">آقایان</a></li>--}}
                        {{--<li><a href="category.html">بانوان</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--<li><a href="category.html">زیردسته ها</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">دخترانه</a></li>--}}
                        {{--<li><a href="category.html">پسرانه</a></li>--}}
                        {{--<li><a href="category.html">نوزاد</a></li>--}}
                        {{--<li><a href="category.html">لوازم</a><span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--<li><a href="category.html">زیردسته ها</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">ساعت</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">ساعت مردانه</a></li>--}}
                        {{--<li><a href="category.html">ساعت زنانه</a></li>--}}
                        {{--<li><a href="category.html">ساعت بچگانه</a></li>--}}
                        {{--<li><a href="category.html">لوازم</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">جواهرات</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">نقره</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">طلا</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">تست 1</a></li>--}}
                        {{--<li><a href="category.html">تست 2</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">الماس</a></li>--}}
                        {{--<li><a href="category.html">مروارید</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">زیورآلات آقایان</a></li>--}}
                        {{--<li><a href="category.html">زیورآلات کودکان</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">زیردسته های جدید</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">زیبایی و سلامت</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">عطر و ادکلن</a></li>--}}
                        {{--<li><a href="category.html">آرایشی</a></li>--}}
                        {{--<li><a href="category.html">ضد آفتاب</a></li>--}}
                        {{--<li><a href="category.html">مراقبت از پوست</a></li>--}}
                        {{--<li><a href="category.html">مراقبت از چشم</a></li>--}}
                        {{--<li><a href="category.html">مراقبت از مو</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">کودک و نوزاد</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">اسباب بازی</a></li>--}}
                        {{--<li><a href="category.html">بازی</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">تست 25</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">پازل</a></li>--}}
                        {{--<li><a href="category.html">سرگرمی</a></li>--}}
                        {{--<li><a href="category.html">متنوع</a></li>--}}
                        {{--<li><a href="category.html">سلامت و امنیت</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">ورزشی</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">دوچرخه سواری</a></li>--}}
                        {{--<li><a href="category.html">دویدن</a></li>--}}
                        {{--<li><a href="category.html">شنا</a></li>--}}
                        {{--<li><a href="category.html">فوتبال</a></li>--}}
                        {{--<li><a href="category.html">گلف</a></li>--}}
                        {{--<li><a href="category.html">موج سواری</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">خانه و باغچه</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">لوازم خواب</a></li>--}}
                        {{--<li><a href="category.html">خوراک</a></li>--}}
                        {{--<li><a href="category.html">لوازم منزل</a></li>--}}
                        {{--<li><a href="category.html">آشپزخانه</a></li>--}}
                        {{--<li><a href="category.html">روشنایی</a></li>--}}
                        {{--<li><a href="category.html">ابزارها</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="category.html">خوراک</a> <span class="down"></span>--}}
                        {{--<ul>--}}
                        {{--<li><a href="category.html">نوشیدنی</a></li>--}}
                        {{--<li><a href="category.html">تنقلات</a></li>--}}
                        {{--<li><a href="category.html">میان وعده</a></li>--}}
                        {{--<li><a href="category.html">خشک بار</a></li>--}}
                        {{--<li><a href="category.html">شکلات</a></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                    </ul>
                </div>
                <h3 class="subtitle">پرفروش ها</h3>
                <div class="side-item">
                    <?php $maxsold=$goods->sortByDesc('sold')->take(10) ?>
                    @foreach($maxsold as $good)
                        {{--@if($good->sold > 30)--}}
                        <div class="product-thumb clearfix">
                            @foreach($good->pic as $pic)
                                @if($pic->main==1)
                                    <div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src=src="http://idpz.ir/assets/images/goods/{{$good->pic->first()->pic}}" alt="{{$good->name}}" title="{{$good->name}}" class="img-responsive" /></a></div>
                                @endif
                            @endforeach
                            <div class="caption">
                                <h4><a href="{{ URL::to('/show/'.$good->id) }}">{{  $good -> name }}</a></h4>
                                <p class="price"><span class="price-new">{{$good -> price}} تومان</span>
                                    @if($good->old_rice==null )
                                    @elseif($good->old_price == price)
                                    @else
                                        <span class="price-old">{{$good->old_price}}</span>
                                    @endif
                                    {{--<span class="saving">-10%</span>--}}
                                </p>
                            </div>
                        </div>
                        {{--@endif--}}
                    @endforeach
                </div>
            </aside>
            <!-- Left Part End-->
            <!--Middle Part Start-->
            <div id="content" class="col-sm-9">

                <h1 class="title">جستجو - {{$search_name}}</h1>
                <label>شاخص جستجو</label>
                <div class="row">
                    <form method="get" action="/search/optional">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" placeholder="نام کالا" value="" name="search_name">
                        </div>
                        <div class="col-sm-3">
                            {{--<input type="text" class="form-control" placeholder="دسته بندی" value="" name="search_cat">--}}

                            <select class="form-control" name="search_cat">
                                <option value="همه دسته ها">همه دسته ها</option>
                                <option value="صنایع دستی">صنایع دستی</option>
                                <option value="گیاهان دارویی">گیاهان دارویی</option>
                                <option value="لوازم خانگی">لوازم خانگی</option>
                                <option value="مواد خوراکی">مواد خوراکی</option>
                                <option value="پوشاک">پوشاک</option>
                                <option value="گل و گیاه">گل و گیاه</option>
                                {{--<option value="59">البسه</option>--}}
                                {{--<option value="61">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;آقایان</option>--}}
                                {{--<option value="93">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;زیردسته ها</option>--}}
                                {{--<option value="94">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;زیردسته ها</option>--}}
                                {{--<option value="95">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;زیردسته ها</option>--}}
                                {{--<option value="96">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;زیردسته ها</option>--}}
                                {{--<option value="91">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;زیردسته جدید</option>--}}
                                {{--<option value="60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;بانوان</option>--}}
                                {{----}}
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="submit" class="btn btn-primary" id="button-search" value="جستجو">
                        </div>
                    </form>
                </div>
            </br>
                <div class="product-filter">
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <div class="btn-group">
                                <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                                <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                            </div>
                            <a href="compare.html" id="compare-total">محصولات مقایسه (0)</a> </div>
                        <div class="col-sm-2 text-right">
                            <label class="control-label" for="input-sort">مرتب سازی :</label>
                        </div>
                        <div class="col-md-3 col-sm-2 text-right">
                            <select id="input-sort" class="form-control col-sm-3">
                                <option value="" selected="selected">پیشفرض</option>
                                <option value="">نام (الف - ی)</option>
                                <option value="">نام (ی - الف)</option>
                                <option value="">قیمت (کم به زیاد)</option></option>
                                <option value="">قیمت (زیاد به کم)</option>
                                <option value="">امتیاز (بیشترین)</option>
                                <option value="">امتیاز (کمترین)</option>
                                <option value="">مدل (A - Z)</option>
                                <option value="">مدل (Z - A)</option>
                            </select>
                        </div>
                        <div class="col-sm-1 text-right">
                            <label class="control-label" for="input-limit">نمایش :</label>
                        </div>
                        <div class="col-sm-2 text-right">
                            <select id="input-limit" class="form-control">
                                <option value="" selected="selected">20</option>
                                <option value="">25</option>
                                <option value="">50</option>
                                <option value="">75</option>
                                <option value="">100</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br />

                <div class="row products-category">
                    @foreach ($goods as $good)
                        <div class="product-layout product-list col-xs-12">
                            <div class="product-thumb">

                                @foreach($good->pic as $pic)
                                    @if($pic->main==1)
                                        <div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="http://idpz.ir/assets/images/goods/{{$good->pic->first()->pic}}" alt="{{$good->name}}" title="{{$good->name}}" class="img-responsive" /></a></div>
                                    @endif
                                @endforeach

                                <div>
                                    <div class="caption">
                                        <h4><a href="{{ URL::to('/show/'.$good->id) }}"> {{$good->name}} </a></h4>
                                        {{--<p class="description"> آخرین دستاورد های روز دنیا--}}

                                        {{--شامل تمام اطلاعاتی که به آن نیاز خواهید داشت ...</p>--}}
                                        <p class="price"> <span class="price-new">{{$good->price}}</span>
                                            @if($good->old_rice==null )
                                            @elseif($good->old_price == price)
                                            @else
                                                <span class="price-old">{{$good->old_price}}</span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="button-group">
                                        <p class="btn-primary" type="button"><a class="btn-primary"  href="{{ URL::to('/add-to-cart/'.$good->id) }}">افزودن به سبد</a> </p>                                                    {{--<div class="add-to-links">--}}
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {!! $goods->render() !!}

            </div>
            <!--Middle Part End -->
        </div>
    </div>

@endsection