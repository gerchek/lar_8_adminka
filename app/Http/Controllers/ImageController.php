<?php

namespace App\Http\Controllers;
use App\Models\Image;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    
    public function index()
    {
         $Image = Image::paginate(5);
    
         return view('pages.credit_cart',compact('Image'));
    }


    public function save(Request $request)
    {
       // return "salam";
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

      // $product->update($input);
      $save=Image::create($input);
      if($save)
      {
          return dd("boldy");
      }
      else{
        return dd("bolmady");
      }

       
    }
}
