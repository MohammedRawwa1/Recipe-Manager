<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recipe Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      /* Ensure the action buttons in recipe lists have consistent padding */
      .recipe-actions .btn {
        padding: 0.35rem 0.75rem;
      }
      .recipe-actions .btn + .btn {
        margin-left: 0.25rem;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
      <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('recipes.index')); ?>">Recipe Manager</a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('recipes.index')); ?>">Recipes</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('recipes.create')); ?>">Add Recipe</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
      <?php endif; ?>

      <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\Assignment 4\RecipeManager\resources\views/layouts/app.blade.php ENDPATH**/ ?>