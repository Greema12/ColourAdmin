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
                   

                    <h4>Catalogue Page</h4>
                  </div>
                  <div class="card-body">
<a href="{{URL::to('/')}}/catalogue/addNewCatalogue" class="btn btn-primary">Add New Catalogue </a> <br/><br/>

                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                        <tr>
                          <th>Sr No</th>
                          
                          <th>Catalogue Name</th>
                          <th>Catalogue Image</th>
                          <th>Catalogue File</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 1; ?>
                                
                    @foreach($cat as $list)
                        <tr>
                         
                          <td><?php echo $count; ?></td>
                         <td>{{ $list->title }}</td>
                          <td><img class="image" src="{{ URL::to('/') }}/picture/catalogue/{{ $list->photo }}" style="border-style: outset;  width: 250px; height: 150px;"  /></td>
                          
                         <td width="170px"><a class="btn btn-info center " target="_blank" href="{{asset('../files/' .$list->file) }} ">VIEW PDF FILE</a></td>

                          <td><a href="{{URL::to('/')}}/catalogue/editCatalogue/{{ $list->id }}" class="btn btn-primary">EDIT</a>
                            <a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/catalogue/delete/{{ $list->id }}">DELETE</a> 
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


 {!! Toastr::message() !!}
