@extends('layouts.master')
@section('content')
    <!-- Main آقایانu End-->

  <div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="../resources/views/shop/index.blade.php" itemprop="url"><span itemprop="title"><i class="fa fa-home"></i></span></a></li>
        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/goods" itemprop="url"><span itemprop="title">الکترونیکی</span></a></li>
        <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="{{ URL::to('/show/'.$onegood->id) }}" itemprop="url"><span itemprop="title">{{$onegood->name}}</span></a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <div itemscope itemtype="http://schema.org/محصولات">
            <h1 class="title" itemprop="name">{{$onegood->name}}</h1>
            <div class="row product-info">
              <div class="col-sm-6">
                @foreach($onegood->Img as $pic)
                  @if($pic->main==1)
                    <div class="image">
                      <img class="img-responsive" itemprop="image" id="zoom_01" src="http://idpz.ir/assets/images/goods/{{$onegood->Img->first()->name}}" title="{{$onegood->name}}" alt="{{$onegood->name}}" data-zoom-image="http://idpz.ir/assets/images/goods/{{$onegood->Img->first()->name}}" />
                    </div>
                  @endif
                @endforeach

                <div class="center-block text-center">
                  <span class="zoom-gallery"><i class="fa fa-search">
                    </i> برای مشاهده گالری روی تصویر کلیک کنید</span></div>

                <div class="image-additional" id="gallery_01">
                  @foreach($onegood->Img as $pic)
                    <a class="thumbnail" href="#" data-zoom-image="http://idpz.ir/assets/images/goods/{{$pic->name}}" data-image="http://idpz.ir/assets/images/goods/{{$pic->name}}" title="{{$onegood->name}}"> <img src="http://idpz.ir/assets/images/goods/{{$pic->name}}" title="{{$onegood->name}}" alt = "{{$onegood->name}}"/></a>
                  @endforeach
                </div>

                {{--<div class="image-additional" id="gallery_01"> <a class="thumbnail" href="#" data-zoom-image="image/product/macbook_air_1-500x500.jpg" data-image="image/product/macbook_air_1-350x350.jpg" title="{{$good->name}}"> <img src="/image/product/macbook_air_1-66x66.jpg" title="{{$good->name}}" alt = "{{$good->name}}"/></a> <a class="thumbnail" href="#" data-zoom-image="image/product/macbook_air_4-500x500.jpg" data-image="image/product/macbook_air_4-350x350.jpg" title="{{$good->name}}"><img src="/image/product/macbook_air_4-66x66.jpg" title="{{$good->name}}" alt="{{$good->name}}" /></a> <a class="thumbnail" href="#" data-zoom-image="image/product/macbook_air_2-500x500.jpg" data-image="image/product/macbook_air_2-350x350.jpg" title="{{$good->name}}"><img src="/image/product/macbook_air_2-66x66.jpg" title="{{$good->name}}" alt="{{$good->name}}" /></a> <a class="thumbnail" href="#" data-zoom-image="image/product/macbook_air_3-500x500.jpg" data-image="image/product/macbook_air_3-350x350.jpg" title="{{$good->name}}"><img src="/image/product/macbook_air_3-66x66.jpg" title="{{$good->name}}" alt="{{$good->name}}" /></a> </div>--}}

              </div>
              <div class="col-sm-6">
                <ul class="list-unstyled description">
                  <li><b>کد محصول :</b> <span itemprop="mpn"> {{$onegood->id}}</span></li>
                  <li><b>قیمت  :</b> <span itemprop="mpn">{{$onegood->price}} تومان</span></li>
                  {{--<li><b>امتیازات خرید:</b> 700</li>--}}
                  <li><b>وضعیت موجودی :</b>
                    @if($onegood->is_exist==1)
                      <span class="instock">موجود</span>
                    @else
                      <span class="instock" style="background-color: red">نا موجود</span>
                    @endif
                  </li>
                </ul>

                <div id="product">
                  <h3 class="subtitle">انتخاب های در دسترس</h3>
                  {{--<div class="form-group required">--}}
                  {{--<label class="control-label">رنگ</label>--}}
                  {{--<select class="form-control" id="input-option200" name="option[200]">--}}
                  {{--<option value=""> --- لطفا انتخاب کنید --- </option>--}}
                  {{--<option value="4">مشکی </option>--}}
                  {{--<option value="3">نقره ای </option>--}}
                  {{--<option value="1">سبز </option>--}}
                  {{--<option value="2">آبی </option>--}}
                  {{--</select>--}}
                  {{--</div>--}}
                  <div class="cart">
                    <div>
                      {{--<div class="qty">--}}
                        {{--<label class="control-label" for="input-quantity">تعداد</label>--}}
                        {{--<input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />--}}
                        {{--<a class="qtyBtn plus" href="javascript:void(0);">+</a><br />--}}
                        {{--<a class="qtyBtn mines" href="javascript:void(0);">-</a>--}}
                        {{--<div class="clear"></div>--}}
                      {{--</div>--}}


                        <button type="button" id="button-cart" class="btn btn-primary btn-lg"><a class="btn-primary"  href="{{ URL::to('/add-to-cart/'.$onegood->id) }}">افزودن به سبد</a></button>
                    </div>
                    <div>
                      <button type="button" class="wishlist" onClick=""><i class="fa fa-heart"></i> افزودن به علاقه مندی ها</button>
                      <br />
                    </div>
                  </div>
                </div>
                <div class="rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                  <meta itemprop="ratingValue" content="0" />
                  <p><span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <a onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;" href=""><span itemprop="reviewCount">1 بررسی</span></a> / <a onClick="$('a[href=\'#tab-review\']').trigger('click'); return false;" href="">یک بررسی بنویسید</a></p>
                </div>
                <hr>
                <!-- AddThis Button BEGIN -->
              {{--<div class="addthis_toolbox addthis_default_style"> <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_google_plusone" g:plusone:size="medium"></a> <a class="addthis_button_pinterest_pinit" pi:pinit:layout="horizontal" pi:pinit:url="http://www.addthis.com/features/pinterest" pi:pinit:media="http://www.addthis.com/cms-content/images/features/pinterest-lg.png"></a> <a class="addthis_counter addthis_pill_style"></a> </div>--}}
              {{--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-514863386b357649"></script>--}}
              <!-- AddThis Button END -->
              </div>
            </div>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-description" data-toggle="tab">توضیحات</a></li>
              {{--<li><a href="#tab-review" data-toggle="tab">بررسی (2)</a></li>--}}
            </ul>
            <div class="tab-content" style="overflow: inherit">
              <div  itemprop="description" id="tab-description" class="tab-pane active">
                <div >
                  <p style="word-wrap:break-word;">{{$onegood->memo}}</p>
                </div>
              </div>
              {{--<div id="tab-specification" class="tab-pane">--}}
              {{--<table class="table table-bordered">--}}
              {{--<thead>--}}
              {{--<tr>--}}
              {{--<td colspan="2"><strong>حافظه</strong></td>--}}
              {{--</tr>--}}
              {{--</thead>--}}
              {{--<tbody>--}}
              {{--<tr>--}}
              {{--<td>تست 1</td>--}}
              {{--<td>8gb</td>--}}
              {{--</tr>--}}
              {{--</tbody>--}}
              {{--</table>--}}
              {{--<table class="table table-bordered">--}}
              {{--<thead>--}}
              {{--<tr>--}}
              {{--<td colspan="2"><strong>پردازشگر</strong></td>--}}
              {{--</tr>--}}
              {{--</thead>--}}
              {{--<tbody>--}}
              {{--<tr>--}}
              {{--<td>تعداد هسته</td>--}}
              {{--<td>1</td>--}}
              {{--</tr>--}}
              {{--</tbody>--}}
              {{--</table>--}}
              {{--</div>--}}
              <div id="tab-review" class="tab-pane">
                <form class="form-horizontal">
                  <div id="review">
                    <div>
                      <table class="table table-striped table-bordered">
                        <tbody>
                        <tr>
                          <td style="width: 50%;"><strong><span>هاروی</span></strong></td>
                          <td class="text-right"><span>1395/1/20</span></td>
                        </tr>
                        <tr>
                          <td colspan="2"><p>ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> </div></td>
                        </tr>
                        </tbody>
                      </table>
                      <table class="table table-striped table-bordered">
                        <tbody>
                        <tr>
                          <td style="width: 50%;"><strong><span>اندرسون</span></strong></td>
                          <td class="text-right"><span>1395/1/20</span></td>
                        </tr>
                        <tr>
                          <td colspan="2"><p>ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div></td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="text-right"></div>
                  </div>
                  <h2>یک بررسی بنویسید</h2>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <label for="input-name" class="control-label">نام شما</label>
                      <input type="text" class="form-control" id="input-name" value="" name="name">
                    </div>
                  </div>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <label for="input-review" class="control-label">بررسی شما</label>
                      <textarea class="form-control" id="input-review" rows="5" name="text"></textarea>
                      <div class="help-block"><span class="text-danger">توجه :</span> HTML بازگردانی نخواهد شد!</div>
                    </div>
                  </div>
                  <div class="form-group required">
                    <div class="col-sm-12">
                      <label class="control-label">رتبه</label>
                      &nbsp;&nbsp;&nbsp; بد&nbsp;
                      <input type="radio" value="1" name="rating">
                      &nbsp;
                      <input type="radio" value="2" name="rating">
                      &nbsp;
                      <input type="radio" value="3" name="rating">
                      &nbsp;
                      <input type="radio" value="4" name="rating">
                      &nbsp;
                      <input type="radio" value="5" name="rating">
                      &nbsp;خوب</div>
                  </div>
                  <div class="buttons">
                    <div class="pull-right">
                      <button class="btn btn-primary" id="button-review" type="button">ادامه</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <h3 class="subtitle">محصولات مرتبط</h3>
            <div class="owl-carousel related_pro">
              @foreach($relatedgoods as $relatedgood)
                <div class="product-thumb">
                  @foreach($relatedgood->Img as $pic)
                    @if($pic->main==1)
                      <div class="image"><a href="{{ URL::to('/show/'.$relatedgood->id) }}"><img src="http://idpz.ir/assets/images/goods/{{$pic->name}}" alt="{{$relatedgood->name}}" title="{{$relatedgood->name}}" class="img-responsive" /></a></div>
                    @endif
                  @endforeach
                  <div class="caption">
                    <h4><a href="{{ URL::to('/show/'.$relatedgood->id) }}">{{$relatedgood->name}}</a></h4>
                    <p class="price"> <span class="price-new">{{$relatedgood->price}}</span> <span class="price-old">{{$relatedgood->old_price}}</span>  </p>
                    {{--<div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>--}}
                  </div>
                  <div class="button-group">
                      <p class="btn-primary" type="button"><a class="btn-primary"  href="{{ URL::to('/add-to-cart/'.$relatedgood->id) }}">افزودن به سبد</a> </p>                                                    {{--<div class="add-to-links">--}}
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی" onClick=""><i class="fa fa-heart"></i></button>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
        <aside id="column-right" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">پرفروش ها</h3>

          <div class="side-item">

            @foreach($products_sold as $good)
              {{--@if($good->sold > 30)--}}
              <div class="product-thumb clearfix">
                @foreach($good->Img as $pic)
                  @if($pic->main==1)
                    <div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="http://idpz.ir/assets/images/goods/{{$good->Img->first()->name}}" alt="{{$good->name}}" title="{{$good->name}}" class="img-responsive" /></a></div>
                  @endif
                @endforeach
                <div class="caption">
                  <h4><a href="{{ URL::to('/show/'.$good->id) }}">{{  $good -> name }}</a></h4>
                  <p class="price"><span class="price-new">{{$good -> price}} تومان</span>
                    {{--<span class="price-old">{{$good->old_price}}</span>--}}
                    {{--<span class="saving">-10%</span>--}}
                  </p>
                </div>
              </div>
              {{--@endif--}}
            @endforeach

          </div>
          {{--<div class="list-group">--}}
          {{--<h3 class="subtitle">محتوای سفارشی</h3>--}}
          {{--<p>این یک بلاک محتواست. هر نوع محتوایی شامل html، نوشته یا تصویر را میتوانید در آن قرار دهید. </p>--}}
          {{--<p> در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. </p>--}}
          {{--<p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>--}}
          {{--</div>--}}
          <h3 class="subtitle">ویژه</h3>
          <div class="side-item">
            @foreach($products_special as $good)
                <div class="product-thumb clearfix">
                  @foreach($good->Img as $pic)
                    @if($pic->main==1)
                      <div class="image"><a href="{{ URL::to('/show/'.$good->id) }}"><img src="http://idpz.ir/assets/images/goods/{{$good->Img->first()->name}}" alt="{{$good->Img->first()->name}}" alt="{{$good->name}}" title="{{$good->name}}" class="img-responsive" /></a></div>
                    @endif
                  @endforeach
                  <div class="caption">
                    <h4><a href="{{ URL::to('/show/'.$good->id) }}">{{$good->name}}</a></h4>
                    <p class="price"> <span class="price-new">{{$good->price}}</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> </p>
                  </div>
                </div>
            @endforeach
          </div>
        </aside>
        <!--Right Part End -->
      </div>
    </div>
  </div>
@endsection
  <!--Footer Start-->
  <!--Footer End-->
  <!-- Facebook Side Block Start -->
{{--<div id="facebook" class="fb-left sort-order-1">--}}
{{--<div class="facebook_icon"><i class="fa fa-facebook"></i></div>--}}
{{--<div class="fb-page" data-href="https://www.facebook.com/harnishdesign/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true" data-show-posts="false">--}}
{{--<div class="fb-xfbml-parse-ignore">--}}
{{--<blockquote cite="https://www.facebook.com/harnishdesign/"><a href="https://www.facebook.com/harnishdesign/">هارنیش دیزاین</a></blockquote>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div id="fb-root"></div>--}}
{{--<script>(function(d, s, id) {--}}
{{--var js, fjs = d.getElementsByTagName(s)[0];--}}
{{--if (d.getElementById(id)) return;--}}
{{--js = d.createElement(s); js.id = id;--}}
{{--js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";--}}
{{--fjs.parentNode.insertBefore(js, fjs);--}}
{{--}(document, 'script', 'facebook-jssdk'));</script>--}}
{{--</div>--}}
<!-- Facebook Side Block End -->
  <!-- Twitter Side Block Start -->
{{--<div id="twitter_footer" class="twit-left sort-order-2">--}}
{{--<div class="twitter_icon"><i class="fa fa-twitter"></i></div>--}}
{{--<a class="twitter-timeline" href="https://twitter.com/" data-chrome="nofooter noscrollbar transparent" data-theme="light" data-tweet-limit="2" data-related="twitterapi,twitter" data-aria-polite="assertive" data-widget-id="347621595801608192">توییت های @</a>--}}
{{--<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>--}}
{{--</div>--}}
<!-- Twitter Side Block End -->
  <!-- Video Side Block Start -->
{{--<div id="video_box" class="vb-left sort-order-3">--}}
{{--<div id="video_box_icon"><i class="fa fa-play"></i></div>--}}
{{--<p>--}}
{{--<iframe allowfullscreen="" src="//www.youtube.com/embed/SZEflIVnhH8" height="315" width="560"></iframe>--}}
{{--</p>--}}
{{--</div>--}}
<!-- Video Side Block End -->
  <!-- Custom Side Block Start -->
{{--<div id="custom_side_block" class="custom_side_block_left sort-order-4">--}}
{{--<div class="custom_side_block_icon"> <i class="fa fa-chevron-right"></i> </div>--}}
{{--<table>--}}
{{--<tbody>--}}
{{--<tr>--}}
{{--<td><h2>بلاک های محتوا</h2></td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td><img alt="" src="/image/banner/cms-block.jpg"></td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td>میتوانید محتوای دلخواه خود را به این بخش اضافه کنید.</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td><strong><a href="#">ادامه مطلب</a></strong></td>--}}
{{--</tr>--}}
{{--</tbody>--}}
{{--</table>--}}
{{--</div>--}}
<!-- Custom Side Block End -->
<!-- JS Part Start-->
@section('footer')
<script type="text/javascript" src="/js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="/js/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/jquery.easing-1.3.min.js"></script>
<script type="text/javascript" src="/js/jquery.dcjqaccordion.min.js"></script>
<script type="text/javascript" src="/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="/js/jquery.elevateZoom-3.0.8.min.js"></script>
<script type="text/javascript" src="/js/swipebox/lib/ios-orientationchange-fix.js"></script>
<script type="text/javascript" src="/js/swipebox/src/js/jquery.swipebox.min.js"></script>
<script type="text/javascript" src="/js/custom.js"></script>
<script type="text/javascript">
    // Elevate Zoom for Product Page image
    $("#zoom_01").elevateZoom({
        gallery:'gallery_01',
        cursor: 'pointer',
        galleryActiveClass: 'active',
        imageCrossfade: true,
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 500,
        zoomWindowPosition : 11,
        lensFadeIn: 500,
        lensFadeOut: 500,
        loadingIcon: 'image/progress.gif'
    });
    //////pass the images to swipebox
    $("#zoom_01").bind("click", function(e) {
        var ez =   $('#zoom_01').data('elevateZoom');
        $.swipebox(ez.getGalleryList());
        return false;
    });
</script>
<!-- JS Part End-->
@endsection