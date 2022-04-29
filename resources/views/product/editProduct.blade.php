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
                  

                    <h4>About US Home Page</h4>


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


  @foreach($pro as $list)
                    <form action="{{URL::to('/')}}/product/masterUpdate/{{ $list->id }}" method="post"   enctype="multipart/form-data">
                     {{ csrf_field() }}      
  
 
  


                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                    <div class="col-sm-9">
                    <select class="form-control" name="cat_id"   value=""  >
                    <option class="form-control"  value="" >
                        <?php $cat_ID = DB::table('category_master')->where('id',$list->cat_id)->value('title'); ?>                                   
                        {{ $cat_ID }}
                    </option>
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
                    <input type="radio" id="customRadioInline1" value="ECHOPLAST" <?php echo ($list->product_type=='ECHOPLAST')?'checked':'' ?> name="product_type" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline1">ECHOPLAST</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline2" value="METROCOAT"<?php echo ($list->product_type=='METROCOAT')?'checked':'' ?> name="product_type" class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline2">METROCOAT</label>
                    </div> 
                    <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" id="customRadioInline3" value="OTHER"<?php echo ($list->product_type=='OTHER')?'checked':'' ?> name="product_type"  class="custom-control-input">
                    <label class="custom-control-label" for="customRadioInline3"> OTHER</label>
                    </div> 
 
                    </div></div>



                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Product Name</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="product_name" value=" {{ $list->product_name }}" >
                      </div>
                    </div>        

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Product Image</label>
                      <div class="col-sm-9">
                        <label>select your image with minimum 350 width and 303 height.</label>
                        <input type="file" class="form-control" name="product_photo" src="{{ URL::to('/') }}/picture/product/{{ $list->product_photo }}" style="width: 400px; height: 45px;">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Product Image</label>
                      <div class="col-sm-9">
                        <input type="image" class="form-control" name="product_photo" src="{{ URL::to('/') }}/picture/product/{{ $list->product_photo }}" style="width: 400px; height: 150px;">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Table Image</label>
                      <div class="col-sm-9">
                        <input type="file" class="form-control" name="table_photo" src="{{ URL::to('/') }}/picture/product/{{ $list->table_photo }}" style="width: 400px; height: 45px;">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Table Image</label>
                      <div class="col-sm-9">
                        <input type="image" class="form-control" name="table_photo" src="{{ URL::to('/') }}/picture/product/{{ $list->table_photo }}" style="width: 400px; height: 150px;">
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
                      <textarea type="text" class="summernote " name="description" ><?php echo $list->description;?></textarea>
                      </div>
                    </div>             
                    <br/><br/>
                    
                    @endforeach  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button> 

                    <a href="{{URL::to('/')}}/product/product" class="btn btn-secondary" >Cancle</a>
                  </div>
                </div>
            <!-- add content here -->
             </div></div></div>
          </div>
        </section>
        </div>

@include('Layout.footer')     

 
  <link rel="stylesheet" href="{{asset('assets/bundles/summernote/summernote-bs4.css')}}">
  <script src="{{asset('assets/bundles/summernote/summernote-bs4.js')}}"></script>