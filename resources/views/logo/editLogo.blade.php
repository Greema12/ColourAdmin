 @include('Layout.header')

@include('Layout.leftmenu')

 <div class="main-content">

        <section class="section">
             <div class="section-body">

             	

<!-- table-->

<div class="row">
              <div class=" col-12 col-md-7 col-lg-7">
                <div class="card">
                  <div class="card-header " >
                  

                    <h4>Logo Table</h4>


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


  @foreach($logo as $list)
                    <form action="{{URL::to('/')}}/logo/masterUpdate/{{ $list->id }}" method="post"   enctype="multipart/form-data">
                     {{ csrf_field() }}      
                            

                    <div class="form-group row">

                      <label for="inputEmail3" class="col-sm-3 col-form-label">Image</label>

                      <div class="col-sm-9">
                        <label>select your image with minimum 220 width and 114 height.</label>
                        <input type="file" class="form-control" name="photo" src="{{ URL::to('/') }}/picture/logo/{{ $list->photo }}" style="width: 400px; height: 45px;">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Image</label>
                      <div class="col-sm-9">
                        <input type="image" class="form-control" name="photo" src="{{ URL::to('/') }}/picture/logo/{{ $list->photo }}" style="width: 400px; height: 150px;">
                      </div>
                    </div><br/><br/>
                    
                    @endforeach  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button> 

                    <a href="{{URL::to('/')}}/logo/logo" class="btn btn-secondary" >Cancle</a>
                  </div>
                </div>
            <!-- add content here -->
             </div></div></div>
          </div>
        </section>
        </div>

@include('Layout.footer')     
