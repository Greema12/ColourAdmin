<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;


class CatalogueController extends Controller
{
    //

    public function storeCatalogue(Request $request)
    {
       
   $this->validate(request(), [
             'photo' => 'required|dimensions:min_width=350,min_height=298',
             'title' => 'required',
             'file' => 'required',
             
         ]);



if ($request->hasFile('photo')) {
       $image1 = $request->file('photo');
       $name1 = time().'ct.'.$image1->getClientOriginalExtension();
       $destinationPath1 = public_path('/picture/catalogue');
       $image1->move($destinationPath1, $name1);
       }

  if ($request->hasFile('file')) {
       $image = $request->file('file');
       $name = 'Catalogue_'.time().'.'.$image->getClientOriginalExtension();
       $destinationPath = public_path('../files');
       $image->move($destinationPath, $name);
       } 
      

$data = new Catalogue();
     
       $data->photo = $name1;
       $data->title= $request->get('title');
       $data->file= $name;
      
       $data->save();
      
      
       Toastr::success('Data added successfully', 'New Data Add');
      return  redirect('catalogue/catalogue');
} 





 public function catalogue()
    	{

       $cat = DB::table('catalogue')->get();

    	return view('catalogue.catalogue',compact('cat'));
    	}

    	 public function editCatalogue($id)
        {
        
        $cat = DB::table('catalogue')->where('id',$id)->get();
          
        return view('catalogue.editCatalogue',compact('cat'));

        }

         public function updateCatalogue($id,Request $request)
        {

             $this->validate(request(), [
              'title' => 'required',
              'photo' => 'dimensions:min_width=350,min_height=298',
             'file' => 'mimes:pdf|max:10000',
               ]);




        	if ($request->hasFile('photo')) {
        $image1 = $request->file('photo');
        $name1 = time().'ct.'.$image1->getClientOriginalExtension();
        $destinationPath1 = public_path('/picture/catalogue');
        $image1->move($destinationPath1, $name1);
        }

         
         if ($request->hasFile('file')) {
        $image = $request->file('file');
        $name = 'Catalogue_'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('../files');
        $image->move($destinationPath, $name);
        } 


 
            $data = Catalogue::find($id);
          
           $data->title = $request->get('title');
		  
		if(!empty($request->photo))
        {
         $data->photo = $name1;
        }

        if(!empty($request->file))
        {
         $data->file = $name;
        }


		   $data->save();
       Toastr::warning('Data Updated successfully', 'Data Update ',[
        "closeButton"=> "True",
        "positionClass"=> "toast-top-center",
        ]);
         return  redirect('catalogue/catalogue');

        }
        public function newCatalogue()
       {
         return view('catalogue.newcatalogue');

       }   


 		public function deleteCatalogue($id)
    {
       
        $catalogue = Catalogue::find($id);
        $catalogue->delete();
        Toastr::warning('Data Deleted successfully', 'Delete Data ',[
          "closeButton"=> "True",
          "positionClass"=> "toast-top-center",
          ]);
        return redirect('catalogue/catalogue');
                      
    }







}
