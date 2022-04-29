<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;

class ProductController extends Controller
{
    //product page


     public function product()
    	{

       $pro = DB::table('product_master')->get();

    	return view('product.product',compact('pro'));
    	}


   public function viewproduct($id)
    {
     $pro = DB::table('product_master')->where('id',$id)->get();

     return view('product.viewproduct',compact('pro')); 	
     }


      public function editProduct($id)
        {
        
        $pro = DB::table('product_master') ->where('id',$id)->get();
          

        return view('product.editProduct',compact('pro'));

        }


        public function updateProduct($id,Request $request)
        {
           
 $this->validate(request(), [
              'product_photo' => 'dimensions:min_width=350,min_height=303',
              'table_photo' => 'dimensions:min_width=350,min_height=303',
              'product_name' => 'required',
              'product_type' => 'required',
              'description'  => 'required',
              
              
              
               ]);

 if ($request->hasFile('product_photo')) {
        $image = $request->file('product_photo');
        $name = time().'pr.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/picture/product');
        $image->move($destinationPath, $name);
 }


if ($request->hasFile('table_photo')) {
        $image1 = $request->file('table_photo');
        $name1 = time().'tb.'.$image1->getClientOriginalExtension();
        $destinationPath1 = public_path('/picture/product');
        $image1->move($destinationPath1, $name1);
 }


 if ($request->hasFile('file')) {
        $image01 = $request->file('file');
        $name01 = 'Product_'.time().'.'.$image01->getClientOriginalExtension();
        $destinationPath01 = public_path('../files');
        $image01->move($destinationPath01, $name01);
        } 

        $data = Product::find($id);
      
        if(!empty($request->product_photo))
        {
         $data->product_photo = $name;
        }

        if(!empty($request->table_photo))
        {
         $data->table_photo = $name1;
        }



		if(!empty($request->product_name))
        {
         $data->product_name = $request->get('product_name');
        }


        if(!empty($request->cat_id))
        {
         $data->cat_id = $request->get('cat_id');
        }


        if(!empty($request->product_type))
        {
         $data->product_type = $request->get('product_type');
        }


        if(!empty($request->file))
        {
         $data->file = $name01;
        }

		if(!empty($request->description))
        {
         $data->description = $request->get('description');
        }

        $data->save();

          return  redirect('product/product');
        }




//delete

        public function deleteProduct($id)
    {
       
        $pro = Product::find($id);
        $pro->delete();
        return redirect('product/product');
                      
    }


        public function newProduct()
        {
        	return view('product.newProduct');
        }

        public function storeProduct(Request $request)
        {


        	$this->validate(request(), [
              'product_photo' => 'required|dimensions:min_width=350,min_height=303',
              'table_photo' => 'required|dimensions:min_width=350,min_height=303',
              'product_name' => 'required',
              'cat_id' => 'required',
              'product_type' => 'required',
              'description' => 'required',
              'file' => 'mimes:pdf|required',
             


              
               ]);


        	if ($request->hasFile('table_photo')) {
        $image2 = $request->file('table_photo');
        $name2 = time().'tb.'.$image2->getClientOriginalExtension();
        $destinationPath2 = public_path('/picture/product');
        $image2->move($destinationPath2, $name2);
 		}


 		if ($request->hasFile('product_photo')) {
        $image4 = $request->file('product_photo');
        $name4 = time().'pr.'.$image4->getClientOriginalExtension();
        $destinationPath4 = public_path('/picture/product');
        $image4->move($destinationPath4, $name4);
 		}

    if ($request->hasFile('file')) {
        $image0 = $request->file('file');
        $name0 = 'Product_'.time().'.'.$image0->getClientOriginalExtension();
        $destinationPath0 = public_path('../files');
        $image0->move($destinationPath0, $name0);
        } 



        		$data = new Product();

        		if(!empty($request->product_photo))
        {
         $data->product_photo = $name4;
        }

        if(!empty($request->table_photo))
        {
         $data->table_photo = $name2;
        }



		if(!empty($request->product_name))
        {
         $data->product_name = $request->get('product_name');
        }


        if(!empty($request->cat_id))
        {
         $data->cat_id = $request->get('cat_id');
        }


        if(!empty($request->product_type))
        {
         $data->product_type = $request->get('product_type');
        }

        if(!empty($request->file))
        {
         $data->file = $name0;
        }



		if(!empty($request->description))
        {
         $data->description = $request->get('description');
        }

         $data->save();

 
          return  redirect('product/product');


        }




}//end


