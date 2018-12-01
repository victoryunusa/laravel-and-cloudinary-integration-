<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Hash;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
use Cloudder;

class ListingController extends Controller
{
    //This controller handles the add listing page
    public function Index(){

        return view('add');
    }


    public function test(Request $request){
        $data['picId'] = '';

        if(isset($_POST['submit'])){
            $pic = $request->file('file');

            $upload = Cloudder::upload($pic);

            if($upload){

                $data['picId'] = Cloudder::getPublicId();
                return view('test', $data);

            }

            
        }
        

        return view('test', $data);
    }

    public function save(Request $request){

        $pic = $request->file('file');
        $name = trim($request['name']);
        $price = trim($request['price']);
        $category = trim($request['category']);
        $sell = trim($request['sell']);
        $description = trim($request['description']);

        $upload = Cloudder::upload($pic);

        if($upload){

            $picId = Cloudder::getPublicId();

            DB::table('products')->insert([ 
                'item_name'  => $name,
                'description'=> $description,
                'price'      => $price,
                'category'   => $category,
                'sell'       => $sell,
                'user_id'    => Auth::user()->id,
                'image'      => $picId,
             ]);

        }

        return redirect()->intended("add-listing");

    }
}
