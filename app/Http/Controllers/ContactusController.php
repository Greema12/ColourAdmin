<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\ContactUs;

class ContactusController extends Controller
{
    //


    public function EditContactus()
        {
        
        $con = DB::table('contact')->get();
          
        return view('contactus.contactus',compact('con'));

        }

    public function updateContactus($id,Request $request)
        {


            $this->validate(request(), [
              'email' => 'required|email',
              'mobile_1' => 'required|max:10',
              'mobile_2' => 'required|max:10',
              'address' => 'required',

              
              
               ]);

            $data = ContactUs::find($id);
           $data->email = $request->get('email');
		   $data->mobile_1 = $request->get('mobile_1');
		   $data->mobile_2 = $request->get('mobile_2');
		   $data->address = $request->get('address');

		   $data->save();

         return  redirect('contactus/contactus');

        }

}
