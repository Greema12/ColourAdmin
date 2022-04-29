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
                  

                    <h4>Profile Page</h4>


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


  @foreach($profile as $list)
                    <form action="{{URL::to('/')}}/profile/masterUpdate/{{ $list->id }}" method="post"   enctype="multipart/form-data">
                     {{ csrf_field() }}      
                            

                    
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

                    <a href="{{URL::to('/')}}/profile/profile" class="btn btn-secondary" >Cancle</a>
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