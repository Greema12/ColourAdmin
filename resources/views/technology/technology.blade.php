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
                   

                    <h4>Technology Page</h4>
                  </div>
                  <div class="card-body">


                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                        <tr>
                          <th>Sr No</th>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 1; ?>
                                
                    @foreach($tech as $list)
                        <tr>
                         
                          <td><?php echo $count; ?></td>
                          <td><img class="image" src="{{ URL::to('/') }}/picture/tech/{{ $list->photo }}" style="border-style: outset;  width: 250px; height: 150px;"  /></td>
                          <td>{{ $list->title }}</td>
                         <td width="650px"><?php echo $list->description;?></td>
                          <td><a href="{{URL::to('/')}}/technology/editTechnology/{{ $list->id }}" class="btn btn-primary">EDIT</a></td>
                        
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

