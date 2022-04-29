 @include('Layout.header')

@include('Layout.leftmenu')

 <div class="main-content">

        <section class="section">
             <div class="section-body">

             	

<!-- table-->

<div class="row">
              <div class=" col-12 col-md-10 col-lg-10">
                <div class="card">
                  <div class="card-header " >
                  

                    <h4>New Product Page</h4>


                  </div>

                   <div class="card-body  " >
 
 @if (count($errors) > 0)
    <div class="alert alert-primary">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }} </li>
     
    @endforeach
    </ul>
    </div>
@endif 


  
                    <form action="{{URL::to('/')}}/product/store" method="post"   enctype="multipart/form-data">
                     {{ csrf_field() }}      
                            
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="cat_id"   value=""  >
                    <option class="form-control"  value="" >Select Your Category <option>
                     <?php $getC = DB::table('category_master')->get(); ?>

                    @foreach($getC as $cate)
                    <option value="{{ $cate->id }}" >{{ $cate->title }}</option>
                    @endforeach

                    </select>            
                    </div>
                    </div>
     
                    <div class="form-group row">
                    <label class="col-md-3 col-form-label" >Product Type</label>
                    <div class="col-md-9 ">    
                    <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline1" value="ECHOPLAST"  name="product_type" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">ECHOPLAST</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" value="METROCOAT"  name="product_type" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">METROCOAT</label>
                    </div> 
                    <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline3" value=" OTHER"  name="product_type"  class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline3"> OTHER</label>
                    </div> 
 
                    </div></div>


                     <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Product Name</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="product_name"  >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Product Image</label>
                      <div class="col-sm-9">
                        <label>select your image with minimum 350 width and 303 height.</label>
                        <input type="file" class="form-control" name="product_photo" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Table Image</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" name="table_photo" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Product File </label>
                      <div class="col-sm-9">
                       <input type="file" class="form-control" name="file" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Description </label>
                      <div class="col-sm-9">
                      <textarea type="text" class="summernote " name="description" ></textarea>
                      </div>
                    </div>    
                    
                    </div><br/><br/>
                    
                 
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button> 

                    <a href="{{URL::to('/')}}/product/product" class="btn btn-secondary" >Cancle</a>
                  </div>
                </div></form>
            <!-- add content here -->
             </div></div></div>
          </div>
        </section>
        </div>

@include('Layout.footer')     

<link rel="stylesheet" href="{{asset('assets/bundles/summernote/summernote-bs4.css')}}">
  <script src="{{asset('assets/bundles/summernote/summernote-bs4.js')}}"></script>