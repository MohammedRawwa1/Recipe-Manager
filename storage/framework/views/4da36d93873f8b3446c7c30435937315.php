

<?php $__env->startSection('content'); ?>
  <h1><?php echo e($recipe->name); ?></h1>

  <?php if($recipe->description): ?>
    <p><strong>Description:</strong> <?php echo e($recipe->description); ?></p>
  <?php endif; ?>

  <h5>Ingredients</h5>
  <p style="white-space: pre-wrap"><?php echo e($recipe->ingredients); ?></p>

  <h5>Instructions</h5>
  <p style="white-space: pre-wrap"><?php echo e($recipe->instructions); ?></p>

  <a href="<?php echo e(route('recipes.edit', $recipe)); ?>" class="btn btn-secondary">Edit</a>
  <a href="<?php echo e(route('recipes.index')); ?>" class="btn btn-link">Back</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Assignment 4\RecipeManager\resources\views/recipes/show.blade.php ENDPATH**/ ?>