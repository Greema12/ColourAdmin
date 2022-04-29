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
                   

                    <h4>Feedback Page</h4>
                  </div>
                  <div class="card-body">

<a href="{{URL::to('/')}}/feedback/addFeedback" class="btn btn-primary">Add New Feedback </a> <br/><br/>
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <thead>
                        <tr>
                          <th>Sr No</th>
                          <th>Client Image</th>
                          <th>Description</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 1; ?>
                                
                    @foreach($back as $list)
                        <tr>
                         
                        <td><?php echo $count; ?></td>
                        <td><img class="image" src="{{ URL::to('/') }}/picture/feedback/{{ $list->photo }}" style="border-style: outset;  width: 150px; height: 150px;"  /></td>  

                        <td width="750px"><?php echo $list->description;?></td>

                        <td><a href="{{URL::to('/')}}/feedback/editFeedback/{{ $list->id }}" class="btn btn-primary">EDIT</a> &nbsp;
                            <a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="{{URL::to('/')}}/feedback/delete/{{ $list->id }}">DELETE</a> 
                    
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

