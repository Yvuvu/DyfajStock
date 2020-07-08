 <?php $__env->startSection('contenu'); ?>

 <div class="container">
 <h1 class="armelle">LISTE DES catégories</h1>
 <div class="row col-md-12 col-md-offset-2 custyle">
 <table class="table table-striped custab table-bordered">
    <thead>
    <a href="<?php echo e(url('forme_categorie')); ?>" class="btn btn-primary btn-xs pull-right boutton-ajouter-produit"><b>+</b>Ajouter une Catégorie</a>

        <tr>
            <th>ID</th>
            <th>Libellé</th>
            <th class="text-center">Option</th>
        </tr>
    </thead>
           <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($categorie->id); ?></td>
                <td><?php echo e($categorie->categorie); ?></td>
                
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Modifier</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
</div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DyfajStock\resources\views/categorie/liste.blade.php ENDPATH**/ ?>