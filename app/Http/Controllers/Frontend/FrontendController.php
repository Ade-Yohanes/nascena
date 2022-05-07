<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\DB;
use DB;
use Illuminate\Support\Str;


// use App\brand_models;
// use App\product;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        $product = DB::table('products')
                    ->inRandomOrder()
                    ->limit(4)
                    ->get();

        $client  = DB::table('clients')
                    ->get();

        $brand  = DB::table('brand')->get();
        
        $experian = DB::table('experiance')
                    ->limit(6)
                    ->get();
        

        return view('frontend.home',[ 
            'client'=>$client, 
            'data'=>$product,
            'brand'=>$brand ,
            'experian' => $experian ,
            
            ]);
    }

    public function about(){
        

        return view('frontend.about');

    }

    public function about_client()
    {
        $client  = DB::table('clients')
                    ->get();

        $experian = DB::table('experiance')
                    ->get();

            // dd($client);

        return view('frontend.about', 
            [
            'client' => $client , 
            'experian' => $experian ,

            ] 
        );
    }

    // public function experiance()
    // {
       

    //         // dd($experience);
            
    //       return view('frontend.about', );
    // }


    public function contact(){

        
        $alamat = 'Gedung Office 8 Lantai 18A SCBD
                    Jln. Jend Sudirman Kav.52-53
                    Jakarta Selatan 12190 
                    Indonesia';
        $phone = '021-29490431';
        $fax   =  '02129490430';
        $email = 'sales@nascena.com';

        return view('frontend.contact',['alamat'=>$alamat, 'phone'=>$phone, 'fax'=>$fax, 'email'=>$email ]);

    }
    
    public function render_product(){

        $products  = DB::table('products')->paginate(30);

        return view('frontend.product',
        ['products' => $products]
        );
    }

    public function product($slug){

        $data = DB::table('products')
                ->select( 'products.*','products.slug', 'products.product_pic', 'products.product_name','brand.name_brand', 'products.slug','products.description', 'products.price','products.weight','products.size', 'categories.name_category' )
                ->join('brand','brand.id', '=', 'products.brand_id' )
                ->join('categories','categories.id', '=', 'products.categories_id' )
                ->where('products.slug',$slug)
                ->get();
        // $brand_relate = DB::table('brand')
        //         ->select( 'brand.name_brand', 'brand.slug', 'products.slug', 'products.product_name','products.product_pic', 'products.product_name', 'products.price'  )
        //         ->join('products','brand.id', '=', 'products.brand_id' )
        //         // ->where('brand.name_brand')
        //       //   ->get();
        //         ->paginate(4);

        $brand_relate = DB::table('products')
                        ->inRandomOrder()
                        ->limit(4)
                        ->get();

        return view('frontend.product_detail',['product_detail'=>$data , 'brand_relate'=>$brand_relate  ]);
    }

    // public function product_d($slug){

    //     $data = DB::table('products')
    //             ->select( 'products.*','products.slug', 'products.product_pic', 'products.product_name','brand.name_brand', 'products.slug','products.description', 'products.price' )
    //             ->join('brand','brand.id', '=', 'products.brand_id' )
    //             ->where('products.slug',$slug)
    //             ->get();

    //     // return $data ;
    //     return view('frontend.product_detail',['product_detail'=>$data]);

    // }

  

    public function brand_show($slug){

        $brand_show = DB::table('brand')
                      ->select( 'brand.name_brand', 'brand.slug', 'products.slug', 'products.product_name','products.product_pic', 'products.product_name', 'products.price'  )
                      ->join('products','brand.id', '=', 'products.brand_id' )
                      ->where('brand.slug',$slug)
                    //   ->get();
                      ->paginate(10);
        // return $brand_show;
        return view('frontend.brand_detail', ['brand_show' => $brand_show ]) ;
    }

    public function brand_all()
    {
        $brand_all = DB::table('brand')->get();
                    
            //    dd($brand_all);     

            return view('frontend.brand_all', ['brand_all' => $brand_all ]) ;
    }


    public function alert()
    {
        return view('frontend.confirm');
    }


    //halaman categori list
    public function category_list()
    {
        return view('frontend.category_page');
    }

    public function category_show($slug)
    {
        $category_show = DB::table('categories')
                        ->select( 'categories.*','categories.slug', 'categories.name_category', 'products.product_pic' ,'products.product_name', 'products.slug' )
                        ->join('products','categories.id', '=', 'products.categories_id' )
                        ->where('categories.slug',$slug)
                        // ->get();
                        ->paginate(10);
                // dd($category_show);

        return view('frontend.category_page',['category_show' => $category_show ] );
    }
    

    public function category_page()
    {
        return view('frontend.category_all');
    }

    public function category_all()
    {
        $category_all = DB::table('categories')
                        ->get();


        // dd($category_all);

        return view('frontend.category_all' , ['category_all' => $category_all ] );
    }

    public function experiance_index()
    {
        

        
       
        return view('frontend.experiance_detail');
    }

    public function experiance_detail( $slug )
    {
        $experian_detail =DB::table('experiance')
                    ->select( 'experiance.*','experiance.slug', 'experiance.project_name', 'experiance.description' ,'experiance.date', 'clients.Perusahaan','clients.logo', 'products.product_name','categories.name_category','brand.name_brand' )
                    ->join('clients','clients.id', '=', 'experiance.clients_id' )
                    ->join('products','products.id', '=', 'experiance.products' )
                    ->join('categories','categories.id', '=', 'experiance.categories_id' )
                    ->join('brand','brand.id', '=', 'experiance.brand_id' )
                    ->where('experiance.slug',$slug)
                    ->get();
                    // dd($experian_details);
        $experians = DB::table('experiance')
                    ->get();

        $client  = DB::table('clients')
                    ->get();

        return view('frontend.experiance_detail',[
              
            'experian_details' => $experian_detail,
            'experians' => $experians,
            'client' => $client,
            ] 
        );
    }


    public function package()
    {
        return view('frontend.packaging_list');
    }

    public function package_list()
    {
        $package_list = DB::table('package')
                        ->paginate(5);
                        // ->get();
        // $package_list->description = Str::limit($package_list->description, 5,'....');


        return view('frontend.packaging_list', ['package_list' => $package_list ]);
    }

    public function package_details($slug)
    {
        $package_details = DB::table('package')
                        ->where('slug',$slug)
                        ->get();
        $package_list = DB::table('package')
        // ->paginate(5);
        ->get();

        return view('frontend.package_detail', [
            'package_detail' => $package_details ,
            'package_list'  => $package_list,
            ]);
    }
    
 
}
