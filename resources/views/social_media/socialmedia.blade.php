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
                  

                    <h4>Social Media Links</h4>


                  </div>

                   <div class="card-body  " >
 


  @foreach($media as $list)
                    <form action="{{URL::to('/')}}/social_media/updatesocialmedia/{{ $list->id }}" method="post"   enctype="multipart/form-data">
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
                      
                       <label for="inputEmail3" class="col-sm-3 col-form-label">Facebook</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="facebook" value="<?php echo $list->facebook;?>" >
                      </div>
                    </div>  

                    <div class="form-group row">
                      
                       <label for="inputEmail3" class="col-sm-3 col-form-label">Gmail</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="gmail" value="<?php echo $list->gmail;?>" >
                      </div>
                    </div>    
                    
                    <br/><br/>
                    
                    @endforeach  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button> 

                    <a href="{{URL::to('/')}}/" class="btn btn-secondary" >Cancle</a>
                  </div>
                </div>
            <!-- add content here -->
             </div></div></div>
          </div>
        </section>
        </div>

@include('Layout.footer')     
