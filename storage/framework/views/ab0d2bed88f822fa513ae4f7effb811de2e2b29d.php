<?php $__env->startSection('body'); ?>

	<?php echo $__env->make('partial_templates.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<h2>This Is About Us Page</h2>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>