<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\Http\Requests;

use Illuminate\Support\Facades\URL;

use DB;

class SearchController extends Controller
{
    //
    public function index(){
        return view ('frontend.search');
    }

            public function getSearch(Request $req) {    	

                if($req->get('q')=='') return redirect('/search_list');
        
                $data['result'] = DB::table('products')
                ->join('categories','categories.id','=','categories_id')
                ->join('brand','brand.id','=','brand_id')
                ->select('products.*', 'products.product_name as product_name '  , 'categories.name_category as name_category','name_brand as brand_name')
                ->where('products.product_name','like','%'.$req->get('q').'%') 
                ->orWhere('brand.name_brand','like','%'.$req->get('q').'%') 
                ->orWhere('categories.name_category','like','%'.$req->get('q').'%') 
                ->paginate(5);
                
                // $data['page_title'] = 'Search '.$req->get('q').' | MySimpleBlog';
                // $data['page_description'] = $data['page_title'];
                // $data['blog_name'] = $this->blog_name;
                // $data['categories'] = DB::table('categories')->get();
                $data['product'] = 'Search: '.$req->get('q');

                // dd($data );

                return view('frontend.search_result',$data);
            }
}
