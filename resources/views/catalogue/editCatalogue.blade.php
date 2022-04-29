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
                  

                    <h4>Catalogue Page</h4>


                  </div>

                   <div class="card-body  " >
 
 


  @foreach($cat as $list)
                    <form action="{{URL::to('/')}}/catalogue/masterUpdate/{{ $list->id }}" method="post"   enctype="multipart/form-data">
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
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Catalogue Image</label>
                      <div class="col-sm-9">
                     <label>select your image with minimum 350 width and 298 height.</label>

                        <input type="file" class="form-control" name="photo" src="{{ URL::to('/') }}/picture/catalogue/{{ $list->photo }}" style="width: 400px; height: 45px;">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Catalogue Image</label>
                      <div class="col-sm-9">
                        <input type="image" class="form-control" name="photo" src="{{ URL::to('/') }}/picture/catalogue/{{ $list->photo }}" style="width: 400px; height: 150px;">
                      </div>
                    </div>

                     <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Catalogue Name </label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="title" value=" {{ $list->title }}" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Catalogue File </label>
                      <div class="col-sm-9">
                       <input type="file" class="form-control" name="file" >
                      </div>
                    </div>             
                    <br/><br/>
                    
                    @endforeach  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button> 

                    <a href="{{URL::to('/')}}/catalogue/catalogue" class="btn btn-secondary" >Cancle</a>
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