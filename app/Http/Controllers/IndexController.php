<?php

namespace App\Http\Controllers;

use App\Art;
use App\Product;
use App\Goodcat;
use App\Slider;
use App\Pic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Component\CssSelector\Node\SelectorNode;

class indexController extends Controller
{
    public function index() {


        $slider = Slider::where('site' , '==' , 'shop')->where('pub' , '==' , '1')->get();

        $p = Product::where('pub',1)->where('rmv',1)->with('Img','Video');

        $products = $p->get();

        $news_p = $p->orderBy('id','desc')->take(4)->get();
        $likes_p = $p->orderBy('lk','desc')->take(4)->get();
        $seens_p = $p->orderBy('seen','desc')->take(4)->get();


        return view('shop.index',compact('slider','products','news_p','likes_p','seens_p'));
    }


    public function goods() {
        if (request('goodcat')!=null){
//            $request= request('goodcat');
//            dd(request('goodcat'));
            $goods = Product::with('Img')->wherePub(1)->whereRmv(1)->paginate(16);
//            dd($request);
//            dd($goods);
        }else {
//            dd("withoutEname");
            $goods = Product::with('Img')->wherePub(1)->whereRmv(1)->paginate(16);
        }
        return view('shop.goods',compact('goods'));

    }


    public function show($id) {



        $onegood=Product::with('Img')->wherePub(1)->whereRmv(1)->findOrfail($id);
        $products = Product::with('Img')->where('pub',1)->where('rmv',1);

        $products_sold = $products->orderBy('sold','desc')
            ->take(10)->get();
        $products_special = $products->where('special',1)
            ->take(10)->get();


//dd($onegood);
        $relCat=$onegood->cat;
        $relatedgoods=Product::whereCat($relCat)->with('Img')->wherePub(1)->whereRmv(1)->orderBy('id','desc')->take(10)->get();

//        dd($relatedgoods);

//        $goods=Good::with('pic','goodcat')->orderByDesc('sold')->take(30);



        return view('shop.show',compact('onegood','products_sold','relatedgoods','products_special'));
    }



    public function contact (){


        return view('shop.pages.contact-us');


    }




    public function search(){

        $goods=Product::with('Img')->wherePub(1)->whereRmv(1)->get();
        $search=Input::get('search');


            $choices = Product::with('Img')->wherePub(1)->whereRmv(1)->where('name', 'LIKE', "%$search%")
                ->paginate(16)->appends(['search' => $search]);

//            $cats = Goodcat::all();


        return view('shop.pages.SearchList',compact('choices','goods','search'));


    }


    public function search_page(){




        $search_name=Input::get('search_name');
        $search_cat=Input::get('search_cat');

//        if ($search_name == null && $search_cat == 'همه دسته ها'){
//
//            $goods=Good::with('pic','goodcat')->wherePub(1)->whereRmv(0)->paginate(20);
//            $goods->appends(['search_name'=>$search_name,'search_cat'=>$search_cat]);
////            dd($goods);
//
//        }
        if($search_cat=='همه دسته ها'){
            $goods = Product::with('Img')->wherePub(1)->whereRmv(1)->where('name', 'like', "%$search_name%")
                ->paginate(16)->appends(['search_name'=>$search_name,'search_cat'=>'همه دسته ها']);




        }

        else{
//                dd("here");
            $goods = Product::with('Img')->wherePub(1)->whereRmv(1)->where('name', 'like', "%$search_name%")->whereHas('goodcat', function ($query) use ($search_cat) {

                $query->where('name', 'LIKE', '%' . $search_cat . '%');

            })->paginate(16);

            $goods->appends(['search_name'=>$search_name,'search_cat'=>$search_cat]);
        }


        return view('shop.pages.SearchPage',compact('goods','search_name'));

    }



}
