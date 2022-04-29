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
                   

                    <h4>Category Page</h4>
                  </div>
                  <div class="card-body">
<a href="<?php echo e(URL::to('/')); ?>/category/addNewCategory" class="btn btn-primary">Add New Category </a> <br/><br/>

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
                                
                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                         
                          <td><?php echo $count; ?></td>
                         <td><?php echo e($list->title); ?></td>
                          <td><img class="image" src="<?php echo e(URL::to('/')); ?>/picture/category/<?php echo e($list->photo); ?>" style="border-style: outset;  width: 250px; height: 150px;"  /></td>
                          
                         <td width="450px"><?php echo $list->description;?></td>
                          <td><a href="<?php echo e(URL::to('/')); ?>/category/editCategory/<?php echo e($list->id); ?>" class="btn btn-primary">EDIT</a>
                            <a class="btn btn-warning" onclick="return confirm('Are you sure you want to delete this record !'); " href="<?php echo e(URL::to('/')); ?>/category/delete/<?php echo e($list->id); ?>">DELETE</a> 
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
       <?php echo Toastr::message(); ?>


 <script src="<?php echo e(asset('assets/js/page/advance-table.js')); ?>"></script>

