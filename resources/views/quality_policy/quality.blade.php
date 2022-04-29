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
                   

                    <h4>Quality Policy & Infrastructure Page</h4>
                  </div>
                  <div class="card-body">


                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                        <tr>
                          <th>Sr No</th>
                         
                          
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 1; ?>
                                
                    @foreach($quality as $list)
                        <tr>
                         
                          <td><?php echo $count; ?></td>
                         
                          
                         <td width="950px"><?php echo $list->description;?></td>
                          <td><a href="{{URL::to('/')}}/quality_policy/editQuality/{{ $list->id }}" class="btn btn-primary">EDIT</a></td>
                        
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

