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
                  

                    <h4>Contact Us Page</h4>


                  </div>

                   <div class="card-body  " >
 


  @foreach($con as $list)
                    <form action="{{URL::to('/')}}/contactus/updatecontactus/{{ $list->id }}" method="post"   enctype="multipart/form-data">
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
                      
                       <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="email" value="<?php echo $list->email;?>" >
                      </div>
                    </div>  

                    <div class="form-group row">
                      
                       <label for="inputEmail3" class="col-sm-3 col-form-label">Mobile No.1</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="mobile_1" value="<?php echo $list->mobile_1;?>" >
                      </div>
                    </div> 

                    <div class="form-group row">
                      
                       <label for="inputEmail3" class="col-sm-3 col-form-label">Mobile No.2</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="mobile_2" value="<?php echo $list->mobile_2;?>" >
                      </div>
                    </div>  

                    <div class="form-group row">
                      
                       <label for="inputEmail3" class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                     <!--  <input type="text" class="form-control"  name="address" value="" > -->

                     <textarea type="text" class="form-control"   name="address"> <?php echo $list->address;?></textarea>
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
