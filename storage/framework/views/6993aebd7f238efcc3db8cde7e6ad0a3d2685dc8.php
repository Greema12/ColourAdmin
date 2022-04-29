 <?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('Layout.leftmenu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

 <div class="main-content">

        <section class="section">
             <div class="section-body">

             	

<!-- table-->

<div class="row">
              <div class=" col-12 col-md-10 col-lg-10">
                <div class="card">
                  <div class="card-header " >
                  

                    <h4>Catalogue Page</h4>


                  </div>

                   <div class="card-body  " >
 
 


  <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <form action="<?php echo e(URL::to('/')); ?>/catalogue/masterUpdate/<?php echo e($list->id); ?>" method="post"   enctype="multipart/form-data">
                     <?php echo e(csrf_field()); ?>      
  <?php if(count($errors) > 0): ?>
    <div class="alert alert-primary">
    <strong>Whoops!</strong> There were some problems with your input.
    <ul>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($error); ?> </li>
     
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    </div>
<?php endif; ?>                           

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Catalogue Image</label>
                      <div class="col-sm-9">
                     <label>select your image with minimum 350 width and 298 height.</label>

                        <input type="file" class="form-control" name="photo" src="<?php echo e(URL::to('/')); ?>/picture/catalogue/<?php echo e($list->photo); ?>" style="width: 400px; height: 45px;">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputPassword3" class="col-sm-3 col-form-label">Catalogue Image</label>
                      <div class="col-sm-9">
                        <input type="image" class="form-control" name="photo" src="<?php echo e(URL::to('/')); ?>/picture/catalogue/<?php echo e($list->photo); ?>" style="width: 400px; height: 150px;">
                      </div>
                    </div>

                     <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Catalogue Name </label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="title" value=" <?php echo e($list->title); ?>" >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Catalogue File </label>
                      <div class="col-sm-9">
                       <input type="file" class="form-control" name="file" >
                      </div>
                    </div>             
                    <br/><br/>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button> 

                    <a href="<?php echo e(URL::to('/')); ?>/catalogue/catalogue" class="btn btn-secondary" >Cancle</a>
                  </div>
                </div>
            <!-- add content here -->
             </div></div></div>
          </div>
        </section>
        </div>

<?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>     


  <link rel="stylesheet" href="<?php echo e(asset('assets/bundles/summernote/summernote-bs4.css')); ?>">
  <script src="<?php echo e(asset('assets/bundles/summernote/summernote-bs4.js')); ?>"></script>