<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Product;
use Illuminate\Support\Facades\Auth;
use \Cart;
use Illuminate\Http\Request;


class ShopingController extends Controller
{

    public function __construct ()
    {
        $this->middleware('auth')->only('cart','buy');
    }


    public function cart(){
//        dd(session('cart'));
        $customers = Customer::where('id',Auth::id())->get();
        return view('shop.pages.cart',compact('customers'));
    }






    public function add($id){
        $good = Product::with('Img')->wherePub(1)->whereRmv(1)->findOrfail($id);
//        $pics= Good::with('pic')->wherePub(1)->whereRmv(1)->where('id','=',$id)
//        ->get();
//dd($pics);

//        foreach ($good->Goodcat as $goodcat){
//            $cat = $goodcat->name;
//        }
if ($good->Img){
    foreach ($good->Img as $pic){
        dd('ss');
        if ($pic->main==1){
            $main_pic=$pic->name;
            dd('e');
        }else{
            $main_pic='no main pic';
            dd('e1');
        }
    }
}else{
    $main_pic='no main pic';
}
        $main_pic='no main pic';

//        dd($main_pic);


        $cart = session()->get('cart');

        // cart empty->>first good
        if(!$cart) {

            $cart = [
                $id => [
                    "id"=>$good->id,
                    "name" => $good->name,
                    "quantity" => 1,
                    "price" => $good->price,
                    "photo" => $main_pic,
                    "cat" => $good->cat,
//                    "photo" => $good->whereHas('pic', function($query){
//                $query->whereMain(1);
//            })->get()
                ]
            ];

            session()->put('cart', $cart);
//            dd("step 1");

            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }

        // check cart if not empty -> if good exist -> qty++
        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

            session()->put('cart', $cart);
//            dd("step 2");

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // check cart if not empty -> new good add
        $cart[$id] = [
            "id"=>$good->id,
            "name" => $good->name,
            "quantity" => 1,
            "price" => $good->price,
            "photo" => $main_pic,
//            "cat" => $cat
//            "photo" => $good->whereHas('pic', function($query){
//                $query->whereMain(1);
//            })->get()
        ];

        session()->put('cart', $cart);
//        dd("step 3");

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }


    public function update(Request $request){
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }


    public function remove (Request $request){
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function buy (Request $request ) {

        $request->validate([
            'address'=> 'required' ,
            'postal_code' => 'required' ,
            'code_meli' => 'required' ,
            'gender' => 'required' ,
            'phone_number' => 'required' ,
        ]);

//        $user_id=Auth::user()->id;
        Customer::where('id',Auth::id())->update($request->only('address','postal_code','code_meli','gender','phone_number'));
//        dd($user_id);

        return redirect('/');
    }

}
