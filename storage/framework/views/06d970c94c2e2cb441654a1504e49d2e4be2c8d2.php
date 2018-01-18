<?php $__env->startSection('frontend-blogs-content'); ?>
<br>
<div id="blogs_main" class="container new-container">
  <?php echo $__env->make( 'frontend-templates.blog.' .$appearance_settings['blogs']. '.' .$appearance_settings['blogs'] , array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>  