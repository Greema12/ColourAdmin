 @include('Layout.header')

@include('Layout.leftmenu')

      <!-- Main Content -->

                
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class=" col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                   

                    <h4>Product Details Page</h4>
                  </div>
                  <div class="card-body">


                    <div class="table-responsive">



                      <table class="table table-bordered table-md-1" style=" border: 1px solid #dddddd;">
                                    
                                      <thead >
                                        
                                   @foreach($pro as $list)
<col width="30"> 
            <col width="80"> 
                <col width="120">

                <col width="50"> 
                                    <tr  >
                                    
                                    <th style="background:#e3eaef; border: 1px solid #dddddd;">Title</th>
                                     <th style="background:#e3eaef; border: 1px solid #dddddd;"><B>Details</B></th>
                                     
                                    </tr>

                                 
                                  <tr >
                                    
                                    <th>Product Name</th>
                                     <td>{{ $list->product_name }}  </td>
                                      
                                    </tr>
                                    <tr>
                                      
                                    <th>Product Type</th>
                                    <td> {{ $list->product_type }} </td>
                                    
                                  </tr>
                                    
                                  <tr>
                                    
                                    <th>Category Name</th>


                                    <td>  
                                      <?php
                $cat_ID = DB::table('category_master')->where('id',$list->cat_id)->value('title');  
                ?>                                   

                {{ $cat_ID }}
                                    </td>
                                      
                                  </tr>
                                  <tr>
                                     
                                    <th>Product Image</th>
                                    <td><img class="image" src="{{ URL::to('/') }}/picture/product/{{ $list->product_photo }}" style="border-style: outset;  width: 250px; height: 150px;"  /></td>
                                   
                                   
                                   </tr>
                                   <br/>
                                   <tr>
                                     
                                    <th>Table Photo</th>
                                     <td><img class="image" src="{{ URL::to('/') }}/picture/product/{{ $list->table_photo }}" style="border-style: outset;  width: 250px; height: 150px;"  /></td>
                                     
                                   </tr>

                                   <tr>
                                     
                                    <th>Description</th>
                                     <td><?php echo $list->description;?></td>
                                     
                                   </tr>
                                  
                                </thead>
@endforeach
                                <tbody>
                             
                                 
                                  
                                 
    
               

                        </tbody>

                      </table>
                    </div>
<a href="{{URL::to('/')}}/product/product" class="btn btn-lg btn-primary" >BACK</a>


                  </div>
                 



        
            </div>
           
            </div>
           
            </div>
          </div>
        </section>
        
        </div> 
       @include('Layout.footer')
 

 <script src="{{asset('assets/js/page/advance-table.js')}}"></script>

