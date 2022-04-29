 <?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('Layout.leftmenu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
<a href="<?php echo e(URL::to('/')); ?>/catalogue/addNewCatalogue" class="btn btn-primary">Add New Catalogue </a> <br/><br/>

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
                                
                    <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                         
                          <td><?php echo $count; ?></td>
                         <td><?php echo e($list->title); ?></td>
                          <td><img class="image" src="<?php echo e(URL::to('/')); ?>/picture/catalogue/<?php echo e($list->photo); ?>" style="border-style: outset;  width: 250px; height: 150px;"  /></td>
                          
                         <td width="170px"><a class="btn btn-info center " target="_blank" href="<?php echo e(asset('../files/' .$list->file)); ?> ">VIEW PDF FILE</a></td>

                          <td><a href="<?php echo e(URL::to('/')); ?>/catalogue/editCatalogue/<?php echo e($list->id); ?>" class="btn btn-primary">EDIT</a>
                            <a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="<?php echo e(URL::to('/')); ?>/catalogue/delete/<?php echo e($list->id); ?>">DELETE</a> 
                          </td>
                        
                        </tr>
<?php $count++; ?> 
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    

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
       <?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
 

 <script src="<?php echo e(asset('assets/js/page/advance-table.js')); ?>"></script>


 <?php echo Toastr::message(); ?>

