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
                   

                    <h4>Slider Table</h4>
                  </div>
                  <div class="card-body">

<a href="{{URL::to('/')}}/slider/addNewSlider" class="btn btn-primary">Add New Slider </a> <br/><br/>
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                        <tr>
                          <th>Sr No</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 1; ?>
                                
                    @foreach($slider as $list)
                        <tr>
                         
                          <td><?php echo $count; ?></td>
                          <td><img class="image" name="photo" src="{{ URL::to('/') }}/picture/slider/{{ $list->photo }}" style="border-style: outset;  width: 250px; height: 150px;"  /></td>
                         
                          <td><a href="{{URL::to('/')}}/slider/SliderEdit/{{ $list->id }}" class="btn btn-primary">EDIT</a>
                            <a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/slider/delete/{{ $list->id }}">DELETE</a> 
                    
                    
                          </td>
                        
                        </tr>
<?php $count++; ?> 
                    @endforeach
                    

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

