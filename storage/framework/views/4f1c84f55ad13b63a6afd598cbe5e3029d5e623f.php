<?php $__env->startSection('title', __('Welcome')); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> <?php echo $__env->yieldContent('title'); ?></h5></div>
            <div class="card-body">
              <h5>  
            <?php if(auth()->guard()->guest()): ?>
				
				<?php echo e(__('Welcome to')); ?> <?php echo e(config('app.name', 'Laravel')); ?> !!! </br>
				Solicitale al administrador que te proporcione tus credenciales.
                
			<?php else: ?>
            <?php endif; ?>	
                    <h2>Bienvenido</h2>

                    

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="https://pymstatic.com/9859/conversions/libros-cambiaran-tu-vida-wide.jpg" alt="First slide" width="600" height="600">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="https://www.telesurtv.net/__export/1619168715048/sites/telesur/img/2021/04/23/libros_editada.jpg" alt="Second slide" width="600" height="600">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="https://resizer.glanacion.com/resizer/7bJx01UR9BUbZM5sdsPLH4hCJ3c=/768x0/filters:format(webp):quality(80)/cloudfront-us-east-1.images.arcpublishing.com/lanacionar/QS3KNYFVIFHPJLNBGX45PZCZSM.jpg" alt="Third slide" width="600" height="600">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                      <div class="alert alert-primary" role="alert">
                        Un sitio web de libros para la empresa Tchile
                      </div>

                      <div class="card">
                        <h5 class="card-header">Desarrollo web con framework laravel</h5>
                        <div class="card-body">
                          <h5 class="card-title">Desarrollo web</h5>
                          <p class="card-text">Para el desarrollo de este sitio web se utilizó:</p>
                          <p>PHP</p>
                          <p>En cuanto a frameworks, utilicé laravel con php y bootsreap para los estilos css.</p>
                          
                          <div class="alert alert-info" role="alert">
                            Desarrollo: Pedro Pablo Carrasco
                          </div>
                          
                        </div>
                      </div>
                      </div>
                      

                    
                    
				</h5>

                

                
            </div>

            
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud-laravel-libros\resources\views/welcome.blade.php ENDPATH**/ ?>