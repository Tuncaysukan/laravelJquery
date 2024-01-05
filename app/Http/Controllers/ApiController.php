<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApiModels;
use App\Models\CategoryModels;


class ApiController extends Controller
{
    
    public function index($id)
    {
       
        $result= ApiModels::where('category_id',$id)->get();
      ;
//$data=ApiModels::all();

        return response()->json($result);
    }

   
    public function data()
    {
        return view('welcome');
    }

   
    public function catAdd()
    {
        $data=CategoryModels::all();
        return view('categoryAdd',compact('data'));
    }

   
    public function catSave(Request $request)
    {
        $category = new CategoryModels;
        $category->name = $request->kategoriAdi;
        $category->save();
        return redirect()->back();
    }

    public function bannerSave(Request $request) {
        //dd($request->post());
        $banner = new ApiModels;
        //$banner->images=$request->bannerGorsel;
        $banner->button_text=$request->bannerMetni;
        $banner->icon=$request->icon;
        $banner->category_id=$request->kategoriId;
        $banner->svg_code=$request->butonSvg;
        $banner->button=$request->butonUrl;
        $banner->button_text=$request->butonMetni;

        if ($request->hasFile('bannerGorsel')) {
            $image = $request->file('bannerGorsel');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public', $imageName);
            $banner->images = $imageName;
        }
        $banner->save();
        return redirect()->back();

        
        
    }

   
}
