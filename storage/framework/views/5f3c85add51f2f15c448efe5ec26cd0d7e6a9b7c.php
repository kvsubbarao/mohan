<?php $__env->startSection('body'); ?>

	<?php echo $__env->make('partial_templates.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<div class="banner">
		<video id="coding-video" autoplay="true" loop="true" >
			<source src="<?php echo e(asset('img/coding.mp4')); ?>" type="video/mp4">
		</video>

		<div class="layer"></div>
	    <div class="content">
		    <p>We Build and Scale Softwares For </p>
		    <p>Startups <span class="normal">&amp;</span> Innovative Brands</p>
	   </div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>