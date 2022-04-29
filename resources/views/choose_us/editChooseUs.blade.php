 @include('Layout.header')

@include('Layout.leftmenu')

 <div class="main-content">

        <section class="section">
             <div class="section-body">

             	

<!-- table-->

<div class="row">
              <div class=" col-12 col-md-11 col-lg-11">
                <div class="card">
                  <div class="card-header " >
                  

                    <h4>Why Choose Us Page</h4>


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


  @foreach($choose as $list)
                    <form action="{{URL::to('/')}}/choose_us/masterUpdate/{{ $list->id }}" method="post"   enctype="multipart/form-data">
                     {{ csrf_field() }}      
                            

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Title 1</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="title1" value=" {{ $list->title1 }}" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Description 1</label>
                      <div class="col-sm-9">
                      <textarea type="text" class="summernote " name="description1" ><?php echo $list->description1;?></textarea>
                      </div>
                    </div>

                  <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Title 2</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="title2" value=" {{ $list->title2 }}" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Description 2</label>
                      <div class="col-sm-9">
                      <textarea type="text" class="summernote " name="description2" ><?php echo $list->description2;?></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Title 3</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="title3" value=" {{ $list->title3 }}" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Description 3</label>
                      <div class="col-sm-9">
                      <textarea type="text" class="summernote " name="description3" ><?php echo $list->description3;?></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Title 4</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="title4" value=" {{ $list->title4 }}" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Description 4</label>
                      <div class="col-sm-9">
                      <textarea type="text" class="summernote " name="description4" ><?php echo $list->description4;?></textarea>
                      </div>
                    </div>                    



                    <br/><br/>
                    
                    @endforeach  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button> 

                    <a href="{{URL::to('/')}}/choose_us/chooseus" class="btn btn-secondary" >Cancle</a>
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