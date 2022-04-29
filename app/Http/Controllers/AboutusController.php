<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Manufacturing;
use App\Models\Technology;
use App\Models\Vision_Mision;
use App\Models\Quality;
use App\Models\Category;
use App\Models\Profile;



class AboutusController extends Controller
{
    //manufacturing page
    	public function manufacturing()
		{


			$manu = DB::table('manufacturing')->get();
			return view('manufacturing.manufacturing',compact('manu'));
		}


		public function editManu($id)
		{

			$manu= DB::table('manufacturing')->where('id',$id) ->get();
			return view('manufacturing.editManu' ,compact('manu'));
		}

		public function updateManu($id , Request $request)

		{

			 $this->validate(request(), [
              'photo' => 'dimensions:min_width=720,min_height=700',
              'counter1' => 'required',
              'counter2' => 'required',
              'counter3' => 'required',

              'description'  => 'required',
              
          ]);


        if ($request->hasFile('photo')) {
        $image = $request->file('photo');
        $name = time().'mn.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/picture/manu');
        $image->move($destinationPath, $name);
 		}
     




            $data = Manufacturing::find($id);
     
      if(!empty($request->photo))
        {
        $data->photo = $name;
    }
      

       if(!empty($request->counter1))
        {
        $data->counter1 = $request->get('counter1');
    }

    	if(!empty($request->counter2))
        {
        $data->counter2 = $request->get('counter2');
    }


    	if(!empty($request->counter3))
        {
        $data->counter3 = $request->get('counter3');
    }



     if(!empty($request->description))
        {
       $data->description = $request->get('description');
       }

      

       $data->save();

         return  redirect('manufacturing/manufacturing');

		}
 //technology page


		public function technology()
    	{

       $tech = DB::table('technology')->get();

    	return view('technology.technology',compact('tech'));
    	}


    	 public function EditTech($id)
        {
        
        $tech = DB::table('technology') ->where('id',$id)->get();
          
        return view('technology.editTechnology',compact('tech'));

        }
  		
  		public function updateTech($id,Request $request)
        {


        	 $this->validate(request(), [
              'photo' => 'dimensions:min_width=730,min_height=400',
              'title' => 'required',
              'description'  => 'required',      

          ]);





        	  	if ($request->hasFile('photo')) {
        $image2 = $request->file('photo');
        $name2 = time().'tn.'.$image2->getClientOriginalExtension();
        $destinationPath2 = public_path('/picture/tech');
        $image2->move($destinationPath2, $name2);
 		}
     




            $data = Technology::find($id);
     
      if(!empty($request->photo))
        {
        $data->photo = $name2;
    }
      

       if(!empty($request->title))
        {
        $data->title = $request->get('title');
    }

     if(!empty($request->description))
        {
       $data->description = $request->get('description');
       }

      

       $data->save();

         return  redirect('technology/technology');

        }

//vision mision page
        public function vision()
    	{

       $vision= DB::table('vision_mision')->get();

    	return view('vision_mision.vision',compact('vision'));
    	}


    	 public function EditVision($id)
        {
        
        $vision = DB::table('vision_mision') ->where('id',$id)->get();
          
        return view('vision_mision.editVision',compact('vision'));

        }
  		
  		public function updateVision($id,Request $request)
        {


        	 $this->validate(request(), [
              'photo' => 'dimensions:min_width=486,min_height=486',
              
              'description'  => 'required',      

              
          ]);





        	  	if ($request->hasFile('photo')) {
        $image3 = $request->file('photo');
        $name3 = time().'vm.'.$image3->getClientOriginalExtension();
        $destinationPath3 = public_path('/picture/vision');
        $image3->move($destinationPath3, $name3);
 		}
     




            $data = Vision_Mision::find($id);
     
      if(!empty($request->photo))
        {
        $data->photo = $name3;
    }
      

     if(!empty($request->description))
        {
       $data->description = $request->get('description');
       }

      

       $data->save();

         return  redirect('vision_mision/vision');

        }


//quality_policy

        public function quality()
    	{

       $quality= DB::table('quality_policy')->get();

    	return view('quality_policy.quality',compact('quality'));
    	}


    	 public function EditQuality($id)
        {
        
        $quality = DB::table('quality_policy') ->where('id',$id)->get();
          
        return view('quality_policy.editQuality',compact('quality'));

        }
  		
  		public function updateQuality($id,Request $request)
        {


        	
            $data = Quality::find($id);
     
    
     if(!empty($request->description))
        {
       $data->description = $request->get('description');
       }

      

       $data->save();

         return  redirect('quality_policy/quality');

        }

//category page
        public function category()
    	{

       $category = DB::table('category_master')->get();

    	return view('category.category',compact('category'));
    	}


    	 public function EditCategory($id)
        {
        
        $category = DB::table('category_master') ->where('id',$id)->get();
          
        return view('category.editCategory',compact('category'));

        }
  public function updateCategory($id,Request $request)
        {

   		 $this->validate(request(), [
              'photo' => 'dimensions:min_width=350,min_height=303',
              'title' => 'required',
              'description' => 'required',
              
          ]);






        	  	if ($request->hasFile('photo')) {
        $image4 = $request->file('photo');
        $name4 = time().'cg.'.$image4->getClientOriginalExtension();
        $destinationPath4 = public_path('/picture/category');
        $image4->move($destinationPath4, $name4);
 		}
     




            $data = Category::find($id);
     
      if(!empty($request->photo))
        {
        $data->photo = $name4;
    }
      

       if(!empty($request->title))
        {
        $data->title = $request->get('title');
    }

     if(!empty($request->description))
        {
       $data->description = $request->get('description');
       }

      

       $data->save();

         return  redirect('category/category');

        }

       public function newcategory()
       {
         return view('category.newcategory');

       }   

     public function storeCategory(Request $request)
     {
        
    $this->validate(request(), [
              'photo' => 'required|dimensions:min_width=350,min_height=303',
              'title' => 'required',
              'description' => 'required',
              
          ]);

  if ($request->hasFile('photo')) {
        $image5 = $request->file('photo');
        $name5 = time().'cg.'.$image5->getClientOriginalExtension();
        $destinationPath5 = public_path('/picture/category');
        $image5->move($destinationPath5, $name5);
 }        
  

$data = new Category();
      
        $data->photo = $name5;
        $data->title= $request->get('title');
        $data->description = $request->get('description');
       
        $data->save();

         return  redirect('category/category');
 } 

 		public function deleteCategory($id)
    {
       
        $category = Category::find($id);
        $category->delete();
        return redirect('category/category');
                      
    }


//Profile page
  
  
      public function profile()
    	{

       $profile= DB::table('profile')->get();

    	return view('profile.profile',compact('profile'));
    	}


    	 public function EditProfile($id)
        {
        
        $profile = DB::table('profile') ->where('id',$id)->get();
          
        return view('profile.editProfile',compact('profile'));

        }
  		
  		public function updateProfile($id,Request $request)
        {


        	
            $data = Profile::find($id);
     
    
        if(!empty($request->description))
           {
               $data->description = $request->get('description');
           }

      

       $data->save();

         return  redirect('profile/profile');

        }


}//end
