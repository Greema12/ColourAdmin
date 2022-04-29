 <?php echo $__env->make('Layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('Layout.leftmenu', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/bundles/summernote/summernote-bs4.css')); ?>">


<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
alpha/css/bootstrap.css" rel="stylesheet">
<div class="main-content">

        <section class="section">
        <div class="section-body">

             	

<!-- table-->

<div class="row">
              <div class=" col-12 col-md-9 col-lg-9">
                <div class="card">
                  <div class="card-header " >
                    <h4>New Catalogue Page</h4>
                  </div>
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
                  <div class="card-body  " >

                  <form action="<?php echo e(URL::to('/')); ?>/catalogue/store" method="post"   enctype="multipart/form-data">
                     <?php echo e(csrf_field()); ?>      
                    <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Catalogue Image</label>
                      <div class="col-sm-9">
                        <label>select your image with minimum 350 width and 298 height.</label>
                        <input type="file" class="form-control" name="photo" >
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Catalogue Name </label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="title"  >
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Catalogue File </label>
                      <div class="col-sm-9">
                       <input type="file" class="form-control" name="file" >
                      </div>
                    </div>           
                    </div><br/><br/>
                    
                 
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button> 

                    <a href="<?php echo e(URL::to('/')); ?>/catalogue/catalogue" class="btn btn-secondary" >Cancle</a>
                  </div>
                  </div></form>
            <!-- add content here -->
             </div></div></div>
          </div>
        </section>
        </div>

     



<?php echo $__env->make('Layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>





<script src="<?php echo e(asset('assets/bundles/summernote/summernote-bs4.js')); ?>"></script>