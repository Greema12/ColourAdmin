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
                   

                    <h4>Category Page</h4>
                  </div>
                  <div class="card-body">
<a href="{{URL::to('/')}}/category/addNewCategory" class="btn btn-primary">Add New Category </a> <br/><br/>

                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                        <tr>
                          <th>Sr No</th>
                          
                          <th>Category Name</th>
                          <th>Image</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 1; ?>
                                
                    @foreach($category as $list)
                        <tr>
                         
                          <td><?php echo $count; ?></td>
                         <td>{{ $list->title }}</td>
                          <td><img class="image" src="{{ URL::to('/') }}/picture/category/{{ $list->photo }}" style="border-style: outset;  width: 250px; height: 150px;"  /></td>
                          
                         <td width="450px"><?php echo $list->description;?></td>
                          <td><a href="{{URL::to('/')}}/category/editCategory/{{ $list->id }}" class="btn btn-primary">EDIT</a>
                            <a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/category/delete/{{ $list->id }}">DELETE</a> 
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
       {!! Toastr::message() !!}

 <script src="{{asset('assets/js/page/advance-table.js')}}"></script>

