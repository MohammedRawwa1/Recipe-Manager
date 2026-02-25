

<?php $__env->startSection('content'); ?>
  <h1>Edit Recipe</h1>

  <?php if($errors->any()): ?>
    <div class="alert alert-danger">
      <ul class="mb-0">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
    </div>
  <?php endif; ?>

  <form action="<?php echo e(route('recipes.update', $recipe)); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" value="<?php echo e(old('name', $recipe->name)); ?>" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Description</label>
      <textarea name="description" class="form-control"><?php echo e(old('description', $recipe->description)); ?></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Ingredients</label>
      <textarea name="ingredients" class="form-control" required><?php echo e(old('ingredients', $recipe->ingredients)); ?></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Instructions</label>
      <textarea name="instructions" class="form-control" required><?php echo e(old('instructions', $recipe->instructions)); ?></textarea>
    </div>
    <button class="btn btn-primary">Update</button>
  </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Assignment 4\RecipeManager\resources\views/recipes/edit.blade.php ENDPATH**/ ?>