 @include('Layout.header')
<link rel="stylesheet" href="{{asset('assets/bundles/datatables/datatables.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">

@include('Layout.leftmenu')

      <!-- Main Content -->

                
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class=" col-md-18 col-lg-18">
                <div class="card">
                  <div class="card-header">
                   

                    <h4>Product Page</h4>
                  </div>
                  <div class="card-body">
<a href="{{URL::to('/')}}/product/newProduct" class="btn btn-primary">Add New Product </a> <br/><br/>

                    <div class="table-responsive">
                      <table class="table table-bordered table-md" id="table-1">
                        <thead>
                        <tr>
                          <th>Sr No</th>
                          
                          <th>Category Name</th>
                          <!-- <th>Product Type</th> -->
                          <th>Product Name</th>
                          <th>Product Image</th>
                          <th>Product File</th>
                         
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 1; ?>
                                
                    @foreach($pro as $list)
                        <tr>
                         
                          <td><?php echo $count; ?></td>
                          <td width="100px">
                            <?php
                $cat_ID = DB::table('category_master')->where('id',$list->cat_id)->value('title');  
                ?>                                   

                {{ $cat_ID }}
                          </td>
                         <!--  <td width="100px">{{ $list->product_type }}</td> -->
                          <td width="200px">{{ $list->product_name }}</td>

                         <td><img class="image" src="{{ URL::to('/') }}/picture/product/{{ $list->product_photo }}" style="border-style: outset;  width: 250px; height: 150px;"  /></td>
                         
                         <td><a class="btn btn-info center " target="_blank" href="{{asset('../files/' .$list->file) }} ">VIEW FILE</a></td>

                          <td width="350px">
                            <a href="{{URL::to('/')}}/product/viewproduct/{{ $list->id }}" class="btn btn-success">VIEW</a>
                            <a href="{{URL::to('/')}}/product/editProduct/{{ $list->id }}" class="btn btn-primary">EDIT</a>
                            <a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/product/delete/{{ $list->id }}">DELETE</a> 
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

 <!-- JS Libraies -->
  <script src="{{asset('assets/bundles/datatables/datatables.min.js')}}"></script>
  <script src="{{asset('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Page Specific JS File -->
  <script src="{{asset('assets/js/page/datatables.js')}}"></script>
 