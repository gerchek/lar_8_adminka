<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreditCard;
use App\Models\Car;
use App\Models\Category;
class HalkBankController extends Controller
{
    //
    function credit_cart()
    {
        $data = CreditCard::all();
    
         return view('halk_bank.pages.credit_cart',compact('data'));
    }
// =================================================================================================================
    function atms()
    {
        $Category = Category::all();
   // dd($Category);
         return view('halk_bank.pages.atms',compact('Category'));
    }




    function atms_atms(Request $req)
    {
        $ss = $req->value;
        $car = Car::where('category_id',$ss)->get();
        // dd($car);
        return response()->json(['success'=>$car]);
        // return Response::json($car);
    }

    
}
