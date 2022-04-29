 @include('Layout.header')

@include('Layout.leftmenu')

 <div class="main-content">

        <section class="section">
             <div class="section-body">

             	

<!-- table-->

<div class="row">
              <div class=" col-12 col-md-9 col-lg-9">
                <div class="card">
                  <div class="card-header " >
                  

                    <h4>New Feedback Page</h4>


                  </div>

                   <div class="card-body  " >
 



    @foreach($back as $list)
                    <form action="{{URL::to('/')}}/feedback/updateFeedback/{{ $list->id }}" method="post"   enctype="multipart/form-data">
                     {{ csrf_field() }}      
    

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


                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Client Image</label>
                      <div class="col-sm-9">
                        <label>select your image with minimum 38 width and 38 height.</label>
                        <input type="file" class="form-control" name="photo" src="{{ URL::to('/') }}/picture/feedback/{{ $list->photo }}" style="width: 400px; height: 45px;" >
                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Client Image</label>
                      <div class="col-sm-9">
                        <input type="image" class="form-control" name="photo" src="{{ URL::to('/') }}/picture/feedback/{{ $list->photo }}" style="width: 400px; height: 150px;">
                      </div>
                    </div>


                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Description </label>
                      <div class="col-sm-9">
                      <textarea type="text" class="summernote " name="description" ><?php echo $list->description;?></textarea>
                      </div>
                    </div>    
                    
                    </div>
                    <br/><br/>
                    
                  @endforeach  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button> 

                    <a href="{{URL::to('/')}}/feedback/feedback" class="btn btn-secondary" >Cancle</a>
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