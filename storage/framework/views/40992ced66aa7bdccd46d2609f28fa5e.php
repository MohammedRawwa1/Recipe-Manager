

<?php $__env->startSection('content'); ?>
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Recipes</h1>
    <a href="<?php echo e(route('recipes.create')); ?>" class="btn btn-primary">Add Recipe</a>
  </div>

  <?php if($recipes->count()): ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Name</th>
          <th class="action-header">Actions</th>
        </tr>
      </thead>
      <tbody>
      <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
          <td><?php echo e($recipe->name); ?></td>
          <td class="recipe-actions">
            <a href="<?php echo e(route('recipes.show', $recipe)); ?>" class="btn btn-sm btn-primary text-white">Details</a>
            <a href="<?php echo e(route('recipes.edit', $recipe)); ?>" class="btn btn-sm btn-secondary">Edit</a>
            <form action="<?php echo e(route('recipes.destroy', $recipe)); ?>" method="POST" class="d-inline">
              <?php echo csrf_field(); ?>
              <?php echo method_field('DELETE'); ?>
              <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this recipe?')">Delete</button>
            </form>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>

    <?php echo e($recipes->links()); ?>

  <?php else: ?>
    <p>No recipes yet. <a href="<?php echo e(route('recipes.create')); ?>">Add one</a>.</p>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\Assignment 4\RecipeManager\resources\views/recipes/index.blade.php ENDPATH**/ ?>