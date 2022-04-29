 @include('Layout.header')

@include('Layout.leftmenu')

      <!-- Main Content -->

                
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class=" col-md-10 col-lg-10">
                <div class="card">
                  <div class="card-header">
                   

                    <h4>Why Choose Us Page</h4>
                  </div>
                  <div class="card-body">


                    <div class="table-responsive">



                      <table class="table table-bordered table-md-1" style=" border: 1px solid #dddddd;">
                                    
                                      <thead >
                                        
                                   @foreach($choose as $list)
<col width="30"> 
            <col width="80"> 
                <col width="120">

                <col width="50"> 
                                    <tr  >
                                    <th  style="  background:#e3eaef;  border: 1px solid  #dddddd;" >Sr No.</th>
                                    <th style="background:#e3eaef; border: 1px solid #dddddd;">Name</th>
                                     <th style="background:#e3eaef; border: 1px solid #dddddd;"><B>Details</B></th>
                                     <th  style="background:#e3eaef; border: 1px solid #dddddd;">Acton</th>
                                    </tr>

                                 
                                  <tr >
                                    <td>1</td>
                                    <th>Title1</th>
                                     <td>{{ $list->title1 }}  </td>
                                      <td class="highlighted"><a href="{{URL::to('/')}}/choose_us/editChooseUs/{{ $list->id }}" style="margin-left:15px; " class="btn btn-primary">EDIT</a></td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                    <th>Body1</th>
                                    <td><?php echo $list->description1;?>   </td>
                                    <td></td>
                                  </tr>
                                    
                                  <tr>
                                     <td>2</td>
                                    <th>Title2</th>
                                    <td>{{ $list->title2 }}  </td>
                                    <td></td>  
                                  </tr>
                                  <tr>
                                     <td></td>
                                    <th>Body2</th>
                                    <td><?php echo $list->description2;?></td>
                                    <td></td>
                                   
                                   </tr>
                                   <tr>
                                     <td>3</td>
                                    <th>Title3</th>
                                     <td>{{ $list->title3 }}  </td>
                                     <td></td>
                                   </tr>

                                   <tr>
                                     <td></td>
                                    <th>Body3</th>
                                     <td><?php echo $list->description3;?></td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <td>4</td>
                                    <th>Title4</th>
                                     <td>{{ $list->title4 }}  </td>
                                     <td></td>
                                   </tr>
                                   <tr>
                                     <td></td>
                                    <th>Body4</th>
                                    <td><?php echo $list->description4;?>  </td>
                                    <td></td>
                                   </tr>
                                   <!--  <th>Action</th> -->
                                   
                                  </tr>
                                </thead>
@endforeach
                                <tbody>
                             
                                 
                                  
                                 
    
               

                        </tbody>

                      </table>
                    </div>
                  </div>
                 



        
            </div>
           
            </div>
           
            </div>
          </div>
        </section>
        
        </div> 
       @include('Layout.footer')
 

 <script src="{{asset('assets/js/page/advance-table.js')}}"></script>

