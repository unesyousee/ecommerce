@extends('layouts.master')
@section('content')

    <div id="container">
        <!-- Feature Box Start-->
        <div class="container">
            <div class="custom-feature-box row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature-box fbox_1">
                        <div class="title">ارسال رایگان</div>
                        <p>برای خرید های بیش از 100 هزار تومان</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature-box fbox_2">
                        <div class="title">پس فرستادن رایگان</div>
                        <p>بازگشت کالا تا 24 ساعت پس از خرید</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature-box fbox_3">
                        <div class="title">کارت هدیه</div>
                        <p>بهترین هدیه برای عزیزان شما</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="feature-box fbox_4">
                        <div class="title">امتیازات خرید</div>
                        <p>از هر خرید امتیاز کسب کرده و از آن بهره بگیرید</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Box End-->
        <div class="container">
            <div class="row">
                <!-- Left Part Start-->
                <aside id="column-left" class="col-sm-3 hidden-xs">
                    <h3 class="subtitle">دسته ها</h3>
                    <div class="box-category">
                        <ul id="cat_accordion">
                            <li><a href="/goods/?goodcat=art">ویدیو ها</a></li>
                            <li><a href="/goods/?goodcat=food">پرفروش ها</a></li>
                            <li><a href="/goods/?goodcat=herbal">پر بازدید ها</a></li>
                            <li><a href="/goods/?goodcat=home">دوست داشتنی ها</a></li>
                            <li><a href="/goods/?goodcat=cloth">رایگان</a></li>
                            <li><a href="/goods/?goodcat=plant">گل و گیاه</a></li>



                            {{--@foreach($goods as $good)--}}
                            {{--<li><a href="/goods">{{$good->pic}}</a></li>--}}
                            {{--@endforeach--}}


                            {{--@foreach($goods as $good)--}}
                            {{--{{$pics= $good->pic}}--}}
                            {{--@foreach($pics as $pic)--}}
                            {{--<li><a href="/goods">{{$pic->pic}}</a></li>--}}
                            {{--@endforeach--}}
                            {{--@endforeach--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">آقایان</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته ها</a></li>--}}
                            {{--<li><a href="/goods">زیردسته ها</a></li>--}}
                            {{--<li><a href="/goods">زیردسته ها</a></li>--}}
                            {{--<li><a href="/goods">زیردسته ها</a></li>--}}
                            {{--<li><a href="/goods">زیردسته جدید</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">بانوان</a></li>--}}
                            {{--<li><a href="/goods">دخترانه</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته ها</a></li>--}}
                            {{--<li><a href="/goods">زیردسته جدید</a></li>--}}
                            {{--<li><a href="/goods">زیردسته جدید</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">پسرانه</a></li>--}}
                            {{--<li><a href="/goods">نوزاد</a></li>--}}
                            {{--<li><a href="/goods">لوازم</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">الکترونیکی</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">لپ تاپ</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--<li><a href="/goods">زیردسته جدید</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="custom_id68"><a href="/goods">رومیزی</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--<li><a href="/goods">زیردسته جدید</a></li>--}}
                            {{--<li><a href="/goods">زیردسته جدید</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">دوربین</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">موبایل و تبلت</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">صوتی و تصویری</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--<li><a href="/goods">زیردسته جدید</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">لوازم خانگی</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">کفش</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">آقایان</a></li>--}}
                            {{--<li><a href="/goods">بانوان</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--<li><a href="/goods">زیردسته ها</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">دخترانه</a></li>--}}
                            {{--<li><a href="/goods">پسرانه</a></li>--}}
                            {{--<li><a href="/goods">نوزاد</a></li>--}}
                            {{--<li><a href="/goods">لوازم</a><span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--<li><a href="/goods">زیردسته ها</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">ساعت</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">ساعت مردانه</a></li>--}}
                            {{--<li><a href="/goods">ساعت زنانه</a></li>--}}
                            {{--<li><a href="/goods">ساعت بچگانه</a></li>--}}
                            {{--<li><a href="/goods">لوازم</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">جواهرات</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">نقره</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">طلا</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">تست 1</a></li>--}}
                            {{--<li><a href="/goods">تست 2</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">الماس</a></li>--}}
                            {{--<li><a href="/goods">مروارید</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">زیورآلات آقایان</a></li>--}}
                            {{--<li><a href="/goods">زیورآلات کودکان</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">زیردسته های جدید</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">زیبایی و سلامت</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">عطر و ادکلن</a></li>--}}
                            {{--<li><a href="/goods">آرایشی</a></li>--}}
                            {{--<li><a href="/goods">ضد آفتاب</a></li>--}}
                            {{--<li><a href="/goods">مراقبت از پوست</a></li>--}}
                            {{--<li><a href="/goods">مراقبت از چشم</a></li>--}}
                            {{--<li><a href="/goods">مراقبت از مو</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">کودک و نوزاد</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">اسباب بازی</a></li>--}}
                            {{--<li><a href="/goods">بازی</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">تست 25</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">پازل</a></li>--}}
                            {{--<li><a href="/goods">سرگرمی</a></li>--}}
                            {{--<li><a href="/goods">متنوع</a></li>--}}
                            {{--<li><a href="/goods">سلامت و امنیت</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">ورزشی</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">دوچرخه سواری</a></li>--}}
                            {{--<li><a href="/goods">دویدن</a></li>--}}
                            {{--<li><a href="/goods">شنا</a></li>--}}
                            {{--<li><a href="/goods">فوتبال</a></li>--}}
                            {{--<li><a href="/goods">گلف</a></li>--}}
                            {{--<li><a href="/goods">موج سواری</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">خانه و باغچه</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">لوازم خواب</a></li>--}}
                            {{--<li><a href="/goods">خوراک</a></li>--}}
                            {{--<li><a href="/goods">لوازم منزل</a></li>--}}
                            {{--<li><a href="/goods">آشپزخانه</a></li>--}}
                            {{--<li><a href="/goods">روشنایی</a></li>--}}
                            {{--<li><a href="/goods">ابزارها</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="/goods">خوراک</a> <span class="down"></span>--}}
                            {{--<ul>--}}
                            {{--<li><a href="/goods">نوشیدنی</a></li>--}}
                            {{--<li><a href="/goods">تنقلات</a></li>--}}
                            {{--<li><a href="/goods">میان وعده</a></li>--}}
                            {{--<li><a href="/goods">خشک بار</a></li>--}}
                            {{--<li><a href="/goods">شکلات</a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                    <h3 class="subtitle">پرفروش ها</h3>
                    <div class="side-item">
                        <?php $maxsold=$products->sortByDesc('sold')->take(10) ?>
                        @foreach($maxsold as $product)
                            {{--@if($good->sold > 30)--}}
                            <div class="product-thumb clearfix">
                                @foreach($product->Img as $pic)
                                    @if($pic->main==1)
                                        <div class="image"><a href="{{ URL::to('/show/'.$product->id) }}"><img src="/assets/images/{{$product->Img->name}}" alt="{{$product->name}}" title="{{$product->name}}" class="img-responsive" /></a></div>
                                    @endif
                                @endforeach
                                <div class="caption">
                                    <h4><a href="{{ URL::to('/show/'.$product->id) }}">{{  $product -> name }}</a></h4>
                                    <p class="price"><span class="price-new">{{$product -> price}} تومان</span>
                                        @if($product->old_price == null )
                                        @elseif($product->old_price == price)
                                        @else
                                            <span class="price-old">{{$product->old_price}}</span>
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
                    <!-- Slideshow Start-->
                    <div class="slideshow single-slider owl-carousel">
                        <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-1.jpg" alt="banner 1" /></a> </div>
                        <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-2.jpg" alt="banner 2" /></a> </div>
                        <div class="item"> <a href="#"><img class="img-responsive" src="image/slider/banner-3.jpg" alt="banner 3" /></a> </div>
                    </div>
                    <!-- Slideshow End-->
                    <!-- Featured محصولات Start-->
                    <h3 class="subtitle">ویژه</h3>
                    <div class="owl-carousel product_carousel">
                        @foreach($products as $product)

                            @if($product->special == 1)

                                <div class="product-thumb">
                                    @if($product->Img)
                                        @foreach($product->Img as $pic)
                                            @if($pic->main==1)
                                                <div class="image"><a href="{{ URL::to('/show/'.$product->id) }}"><img src="/assets/images/{{$product->Img->first()->name}}" alt="{{$product->name}}" title="{{$product->name}}" class="img-responsive" /></a></div>
                                            @endif
                                        @endforeach
                                    @endif
                                    <div class="caption">
                                        <h4><a href="{{ URL::to('/show/'.$product->id) }}">{{$product->name}}</a></h4>
                                        <p class="price"> <span class="price-new">{{$product->price}}</span>
                                            @if($product->old_rice===null )
                                            @elseif($product->old_price === price)
                                            @else
                                                <span class="price-old">{{$product->old_price}}</span>
                                            @endif
                                            {{--<span class="saving">-5%</span> </p>--}}
                                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                    </div>
                                    <div class="button-group">
                                        <p class="btn-primary" type="button"><a class="btn-primary"  href="{{ URL::to('/add-to-cart/'.$product->id) }}">افزودن به سبد</a> </p>                                                    {{--<div class="add-to-links">--}}
                                        <div class="add-to-links">
                                            <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <!-- Featured محصولات End-->
                    <!-- Banner Start-->
                {{--<div class="marketshop-banner">--}}
                {{--<div class="row">--}}
                {{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-3-400x200.jpg" alt="بنر نمونه 3" title="بنر نمونه 3" /></a></div>--}}
                {{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-1-400x200.jpg" alt="بنر نمونه" title="بنر نمونه" /></a></div>--}}
                {{--<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-2-400x200.jpg" alt="بنر نمونه 2" title="بنر نمونه 2" /></a></div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <!-- Banner End-->
                    <!-- دسته ها محصولات Slider Start-->
                    <div class="category-module" id="latest_category">
                        <h3 class="subtitle">ویدیو ها - <a class="viewall" href="category.tpl">نمایش همه</a></h3>
                        <div class="category-module-content">
                            {{--<ul id="sub-cat" class="tabs">--}}
                            {{--<li><a href="#tab-cat1">لپ تاپ</a></li>--}}
                            {{--<li><a href="#tab-cat2">رومیزی</a></li>--}}
                            {{--<li><a href="#tab-cat3">دوربین</a></li>--}}
                            {{--<li><a href="#tab-cat4">موبایل و تبلت</a></li>--}}
                            {{--<li><a href="#tab-cat5">صوتی و تصویری</a></li>--}}
                            {{--<li><a href="#tab-cat6">لوازم خانگی</a></li>--}}
                            {{--</ul>--}}
                            <div id="tab-cat1" class="tab_content">
                                <div class="owl-carousel latest_category_tabs">
                                    @foreach($products as $product)
                                        @if($product->video == 1)
                                            <div class="product-thumb">


                                                @foreach($product->Img as $pic)
                                                    @if($pic->main==1)
                                                        <div class="image"><a href="{{ URL::to('/show/'.$product->id) }}"><img src="/assets/images/goods/{{$product->Img->first()->name}}" alt="{{$product->name}}" title="{{$product->name}}" class="img-responsive" /></a></div>
                                                    @endif
                                                @endforeach


                                                <div class="caption">
                                                    <h4><a href="{{ URL::to('/show/'.$product->id) }}">{{$product->name}}</a></h4>
                                                    <p class="price"> <span class="price-new">{{$product->price}}</span>
                                                        @if($product->old_rice==null )
                                                        @elseif($product->old_price == price)
                                                        @else
                                                            <span class="price-old">{{$product->old_price}}</span>
                                                        @endif
                                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                                </div>

                                                    {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                                                <div class="button-group">
                                                    <p class="btn-primary" type="button"><a class="btn-primary"  href="{{ URL::to('/add-to-cart/'.$product->id) }}">افزودن به سبد</a> </p>                                                    {{--<div class="add-to-links">--}}
                                                        {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                                                    {{--</div>--}}
                                                </div>

                                            </div>
                                        @endif
                                    @endforeach
                                    {{--<div class="product-thumb">--}}
                                    {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/macbook_pro_1-200x200.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>--}}
                                    {{--<div class="caption">--}}
                                    {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}"> کتاب آموزش باغبانی </a></h4>--}}
                                    {{--<p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>--}}
                                    {{--</div>--}}
                                    {{--<div class="button-group">--}}
                                    {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                                    {{--<div class="add-to-links">--}}
                                    {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                                    {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-thumb">--}}
                                    {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/macbook_air_1-200x200.jpg" alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور" class="img-responsive" /></a></div>--}}
                                    {{--<div class="caption">--}}
                                    {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">لپ تاپ ایلین ور</a></h4>--}}
                                    {{--<p class="price"> <span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> </p>--}}
                                    {{--</div>--}}
                                    {{--<div class="button-group">--}}
                                    {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                                    {{--<div class="add-to-links">--}}
                                    {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                                    {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-thumb">--}}
                                    {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/macbook_1-200x200.jpg" alt="آیدیا پد یوگا" title="آیدیا پد یوگا" class="img-responsive" /></a></div>--}}
                                    {{--<div class="caption">--}}
                                    {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">آیدیا پد یوگا</a></h4>--}}
                                    {{--<p class="price"> 900000 تومان </p>--}}
                                    {{--<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>--}}
                                    {{--</div>--}}
                                    {{--<div class="button-group">--}}
                                    {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                                    {{--<div class="add-to-links">--}}
                                    {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                                    {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-thumb">--}}
                                    {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/ipod_shuffle_1-200x200.jpg" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>--}}
                                    {{--<div class="caption">--}}
                                    {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">لپ تاپ hp پاویلیون</a></h4>--}}
                                    {{--<p class="price"> 122000 تومان </p>--}}
                                    {{--</div>--}}
                                    {{--<div class="button-group">--}}
                                    {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                                    {{--<div class="add-to-links">--}}
                                    {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                                    {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="product-thumb">--}}
                                    {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/ipod_touch_1-200x200.jpg" alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7" class="img-responsive" /></a></div>--}}
                                    {{--<div class="caption">--}}
                                    {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">سامسونگ گلکسی s7</a></h4>--}}
                                    {{--<p class="price"> <span class="price-new">62000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-50%</span> </p>--}}
                                    {{--</div>--}}
                                    {{--<div class="button-group">--}}
                                    {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                                    {{--<div class="add-to-links">--}}
                                    {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                                    {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                            {{--<div id="tab-cat2" class="tab_content">--}}
                            {{--<div class="owl-carousel latest_category_tabs">--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/ipod_shuffle_1-200x200.jpg" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">لپ تاپ hp پاویلیون</a></h4>--}}
                            {{--<p class="price"> 122000 تومان </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div id="tab-cat3" class="tab_content">--}}
                            {{--<div class="owl-carousel latest_category_tabs">--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/FinePix-Long-Zoom-Camera-200x200.jpg" alt="دوربین فاین پیکس" title="دوربین فاین پیکس" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">دوربین فاین پیکس</a></h4>--}}
                            {{--<p class="price"> 122000 تومان </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/nikon_d300_1-200x200.jpg" alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">دوربین دیجیتال حرفه ای</a></h4>--}}
                            {{--<p class="price"> <span class="price-new">92000 تومان</span> <span class="price-old">98000 تومان</span> <span class="saving">-6%</span> </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div id="tab-cat4" class="tab_content">--}}
                            {{--<div class="owl-carousel latest_category_tabs">--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/samsung_tab_1-200x200.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">تبلت ایسر</a></h4>--}}
                            {{--<p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>--}}
                            {{--<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/iphone_1-200x200.jpg" alt="آیفون 7" title="آیفون 7" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">آیفون 7</a></h4>--}}
                            {{--<p class="price"> 2200000 تومان </p>--}}
                            {{--<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/ipod_touch_1-200x200.jpg" alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">سامسونگ گلکسی s7</a></h4>--}}
                            {{--<p class="price"> <span class="price-new">62000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-50%</span> </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/palm_treo_pro_1-200x200.jpg" alt="موبایل HTC M7" title="موبایل HTC M7" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">موبایل HTC M7</a></h4>--}}
                            {{--<p class="price"> 377000 تومان </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div id="tab-cat5" class="tab_content">--}}
                            {{--<div class="owl-carousel latest_category_tabs">--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/samsung_tab_1-200x200.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">تبلت ایسر</a></h4>--}}
                            {{--<p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>--}}
                            {{--<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/ipod_classic_1-200x200.jpg" alt="آیپاد نسل 5" title="آیپاد نسل 5" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">آیپاد نسل 5</a></h4>--}}
                            {{--<p class="price"> 122000 تومان </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/macbook_pro_1-200x200.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}"> کتاب آموزش باغبانی </a></h4>--}}
                            {{--<p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/macbook_air_1-200x200.jpg" alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">لپ تاپ ایلین ور</a></h4>--}}
                            {{--<p class="price"> <span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/macbook_1-200x200.jpg" alt="آیدیا پد یوگا" title="آیدیا پد یوگا" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">آیدیا پد یوگا</a></h4>--}}
                            {{--<p class="price"> 900000 تومان </p>--}}
                            {{--<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/ipod_nano_1-200x200.jpg" alt="پخش کننده موزیک" title="پخش کننده موزیک" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">پخش کننده موزیک</a></h4>--}}
                            {{--<p class="price"> 122000 تومان </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/FinePix-Long-Zoom-Camera-200x200.jpg" alt="دوربین فاین پیکس" title="دوربین فاین پیکس" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">دوربین فاین پیکس</a></h4>--}}
                            {{--<p class="price"> 122000 تومان </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/ipod_shuffle_1-200x200.jpg" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">لپ تاپ hp پاویلیون</a></h4>--}}
                            {{--<p class="price"> 122000 تومان </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick="cart.add('34');"><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick="wishlist.add('34');"><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick="compare.add('34');"><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/ipod_touch_1-200x200.jpg" alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">سامسونگ گلکسی s7</a></h4>--}}
                            {{--<p class="price"> <span class="price-new">62000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-50%</span> </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/nikon_d300_1-200x200.jpg" alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">دوربین دیجیتال حرفه ای</a></h4>--}}
                            {{--<p class="price"> <span class="price-new">92000 تومان</span> <span class="price-old">98000 تومان</span> <span class="saving">-6%</span> </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div id="tab-cat6" class="tab_content">--}}
                            {{--<div class="owl-carousel latest_category_tabs">--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/ipod_classic_1-200x200.jpg" alt="آیپاد نسل 5" title="آیپاد نسل 5" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">آیپاد نسل 5</a></h4>--}}
                            {{--<p class="price"> 122000 تومان </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick="cart.add('48');"><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="product-thumb">--}}
                            {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="image/product/ipod_nano_1-200x200.jpg" alt="پخش کننده موزیک" title="پخش کننده موزیک" class="img-responsive" /></a></div>--}}
                            {{--<div class="caption">--}}
                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">پخش کننده موزیک</a></h4>--}}
                            {{--<p class="price"> 122000 تومان </p>--}}
                            {{--</div>--}}
                            {{--<div class="button-group">--}}
                            {{--<button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>--}}
                            {{--<div class="add-to-links">--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                            {{--<button type="button" data-toggle="tooltip" title="افزودن به مقایسه" onClick=""><i class="fa fa-exchange"></i></button>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <!-- دسته ها محصولات Slider End-->
                    <!-- Banner Start -->
                {{--<div class="marketshop-banner">--}}
                {{--<div class="row">--}}
                {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-4-400x150.jpg" alt="2 Block Banner" title="2 Block Banner" /></a></div>--}}
                {{--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><a href="#"><img src="image/banner/sample-banner-5-400x150.jpg" alt="2 Block Banner 1" title="2 Block Banner 1" /></a></div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <!-- Banner End -->
                    <!-- دسته ها محصولات Slider Start -->
                    <h3 class="subtitle">پر بازدید ها - <a class="viewall" href="/goods">نمایش همه</a></h3>
                    <div class="owl-carousel latest_category_carousel">
                        @foreach($seens_p as $seen_p)
                            {{--@foreach($good->goodcat as $goodcat)--}}
                                {{--@if($goodcat->id == 2)--}}
                                    <div class="product-thumb">
                                        @foreach($seen_p->Img as $pic)
                                            @if($pic->main==1)
                                                <div class="image"><a href="{{ URL::to('/show/'.$seen_p->id) }}"><img src="/assets/images/{{$seen_p->Img->first()->name}}" alt="{{$seen_p->name}}" title="{{$seen_p->name}}" class="img-responsive" /></a></div>
                                            @endif
                                        @endforeach
                                        <div class="caption">
                                            <h4><a href="{{ URL::to('/show/'.$seen_p->id) }}">{{$seen_p->name}}</a></h4>
                                            <p class="price"> {{$seen_p->price}} تومان </p>
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        </div>
                                        <div class="button-group">
                                            <p class="btn-primary" type="button"><a class="btn-primary"  href="{{ URL::to('/add-to-cart/'.$seen_p->id) }}">افزودن به سبد</a> </p>                                                    {{--<div class="add-to-links">--}}
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                {{--@endif--}}
                            {{--@endforeach--}}
                        @endforeach
                    </div>
                    <!-- دسته ها محصولات Slider End -->
                    <!-- Brand محصولات Slider Start-->
                    <h3 class="subtitle">دوست داشتنی ها - <a class="viewall" href="/goods">نمایش همه</a></h3>
                    <div class="owl-carousel latest_category_carousel">
                        @foreach($likes_p as $like_p)
                            {{--@foreach($good->goodcat as $goodcat)--}}
                                {{--@if($goodcat->id == 1)--}}
                                    <div class="product-thumb">


                                        @foreach($like_p->Img as $pic)
                                            @if($pic->main==1)
                                                <div class="image"><a href="{{ URL::to('/show/'.$like_p->id) }}"><img src="/assets/images/goods/{{$like_p->pic->first()->name}}" alt="{{$like_p->name}}" title="{{$like_p->name}}" class="img-responsive" /></a></div>
                                            @endif
                                        @endforeach

                                        <div class="caption">
                                            <h4><a href="{{ URL::to('/show/'.$like_p->id) }}">{{$like_p->name}}</a></h4>
                                            <p class="price"> 42300 تومان </p>
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        </div>
                                        <div class="button-group">
                                            <p class="btn-primary" type="button"><a class="btn-primary"  href="{{ URL::to('/add-to-cart/'.$like_p->id) }}">افزودن به سبد</a> </p>                                                    {{--<div class="add-to-links">--}}
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                {{--@endif--}}
                            {{--@endforeach--}}
                        @endforeach
                    </div>
                    <h3 class="subtitle">محصولات رایگان - <a class="viewall" href="/goods">نمایش همه</a></h3>
                    <div class="owl-carousel latest_category_carousel">
                        @foreach($products as $product)
                            {{--@foreach($good->goodcat as $goodcat)--}}
                                @if($product->free == 1)
                                    <div class="product-thumb">


                                        @foreach($product->Img as $pic)
                                            @if($pic->main==1)
                                                <div class="image"><a href="{{ URL::to('/show/'.$product->id) }}"><img src="/assets/images/goods/{{$product->Img->first()->name}}" alt="{{$product->name}}" title="{{$product->name}}" class="img-responsive" /></a></div>
                                            @endif
                                        @endforeach

                                        <div class="caption">
                                            <h4><a href="{{ URL::to('/show/'.$product->id) }}">{{$product->name}}</a></h4>
                                            <p class="price"> 42300 تومان </p>
                                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                        </div>
                                        <div class="button-group">
                                            <p class="btn-primary" type="button"><a class="btn-primary"  href="{{ URL::to('/add-to-cart/'.$product->id) }}">افزودن به سبد</a> </p>                                                    {{--<div class="add-to-links">--}}
                                            <div class="add-to-links">
                                                <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            {{--@endforeach--}}
                        @endforeach
                    </div>
                    {{--<h3 class="subtitle">لوازم خانگی - <a class="viewall" href="/goods">نمایش همه</a></h3>--}}
                    {{--<div class="owl-carousel latest_category_carousel">--}}
                        {{--@foreach($goods as $good)--}}
                            {{--@foreach($good->goodcat as $goodcat)--}}
                                {{--@if($goodcat->id == 3)--}}
                                    {{--<div class="product-thumb">--}}


                                        {{--@foreach($good->pic as $pic)--}}
                                            {{--@if($pic->main==1)--}}
                                                {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="http://idpz.ir/assets/images/goods/{{$good->pic->first()->pic}}" alt="{{$good->name}}" title="{{$good->name}}" class="img-responsive" /></a></div>--}}
                                            {{--@endif--}}
                                        {{--@endforeach--}}

                                        {{--<div class="caption">--}}
                                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">{{$good->name}}</a></h4>--}}
                                            {{--<p class="price"> 42300 تومان </p>--}}
                                            {{--<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="button-group">--}}
                                            {{--<p class="btn-primary" type="button"><a class="btn-primary"  href="{{ URL::to('/add-to-cart/'.$good->id) }}">افزودن به سبد</a> </p>                                                    --}}{{--<div class="add-to-links">--}}
                                            {{--<div class="add-to-links">--}}
                                                {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--@endif--}}
                            {{--@endforeach--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                    {{--<h3 class="subtitle">مواد خوراکی - <a class="viewall" href="/goods">نمایش همه</a></h3>--}}
                    {{--<div class="owl-carousel latest_category_carousel">--}}
                        {{--@foreach($goods as $good)--}}
                            {{--@foreach($good->goodcat as $goodcat)--}}
                                {{--@if($goodcat->id == 4)--}}
                                    {{--<div class="product-thumb">--}}


                                        {{--@foreach($good->pic as $pic)--}}
                                            {{--@if($pic->main==1)--}}
                                                {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="http://idpz.ir/assets/images/goods/{{$good->pic->first()->pic}}" alt="{{$good->name}}" title="{{$good->name}}" class="img-responsive" /></a></div>--}}
                                            {{--@endif--}}
                                        {{--@endforeach--}}

                                        {{--<div class="caption">--}}
                                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">{{$good->name}}</a></h4>--}}
                                            {{--<p class="price"> 42300 تومان </p>--}}
                                            {{--<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="button-group">--}}
                                            {{--<p class="btn-primary" type="button"><a class="btn-primary"  href="{{ URL::to('/add-to-cart/'.$good->id) }}">افزودن به سبد</a> </p>                                                    --}}{{--<div class="add-to-links">--}}
                                            {{--<div class="add-to-links">--}}
                                                {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--@endif--}}
                            {{--@endforeach--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                    {{--<h3 class="subtitle">گل و گیاه - <a class="viewall" href="/goods">نمایش همه</a></h3>--}}
                    {{--<div class="owl-carousel latest_category_carousel">--}}
                        {{--@foreach($goods as $good)--}}
                            {{--@foreach($good->goodcat as $goodcat)--}}
                                {{--@if($goodcat->id == 6)--}}
                                    {{--<div class="product-thumb">--}}


                                        {{--@foreach($good->pic as $pic)--}}
                                            {{--@if($pic->main==1)--}}
                                                {{--<div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="http://idpz.ir/assets/images/goods/{{$good->pic->first()->pic}}" alt="{{$good->name}}" title="{{$good->name}}" class="img-responsive" /></a></div>--}}
                                            {{--@endif--}}
                                        {{--@endforeach--}}

                                        {{--<div class="caption">--}}
                                            {{--<h4><a href="{{ URL::to('/show/'.$good->id) }}">{{$good->name}}</a></h4>--}}
                                            {{--<p class="price"> 42300 تومان </p>--}}
                                            {{--<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div>--}}
                                        {{--</div>--}}
                                        {{--<div class="button-group">--}}
                                            {{--<p class="btn-primary" type="button"><a class="btn-primary"  href="{{ URL::to('/add-to-cart/'.$good->id) }}">افزودن به سبد</a> </p>                                                    --}}{{--<div class="add-to-links">--}}
                                            {{--<div class="add-to-links">--}}
                                                {{--<button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--@endif--}}
                            {{--@endforeach--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                    <!-- Brand محصولات Slider End -->
                    <!-- Brand Logo Carousel Start-->
                {{--<div id="carousel" class="owl-carousel nxt">--}}
                {{--<div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="پالم" class="img-responsive" /></a> </div>--}}
                {{--<div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="سونی" class="img-responsive" /></a> </div>--}}
                {{--<div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="کنون" class="img-responsive" /></a> </div>--}}
                {{--<div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="اپل" class="img-responsive" /></a> </div>--}}
                {{--<div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="اچ تی سی" class="img-responsive" /></a> </div>--}}
                {{--<div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="اچ پی" class="img-responsive" /></a> </div>--}}
                {{--<div class="item text-center"> <a href="#"><img src="image/product/apple_logo-100x100.jpg" alt="brand" class="img-responsive" /></a> </div>--}}
                {{--<div class="item text-center"> <a href="#"><img src="image/product/canon_logo-100x100.jpg" alt="brand1" class="img-responsive" /></a> </div>--}}
                {{--</div>--}}
                <!-- Brand Logo Carousel End -->
                </div>
                <!--Middle Part End-->
            </div>
        </div>
    </div>

@endsection