 <?php $__env->startSection('contenu'); ?>

 <div class="container">
 <h1 class="armelle">LISTE DES UNITES</h1>
 <div class="row col-md-12 col-md-offset-2 custyle">
 <table class="table table-striped custab table-bordered">
    <thead>
    <a href="<?php echo e(url('forme_unite')); ?>" class="btn btn-primary btn-xs pull-right boutton-ajouter-produit"><b>+</b>Ajouter une unite</a>

        <tr>
            <th>ID</th>
            <th>Unite</th>
            <th class="text-center">Option</th>
        </tr>
    </thead>
           <?php $__currentLoopData = $unite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($unite->id); ?></td>
                <td><?php echo e($unite->unite); ?></td>
                
                <td class="text-center"><a class='btn btn-info btn-xs' href="#"><span class="glyphicon glyphicon-edit"></span> Modifier</a> <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
</div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DyfajStock\resources\views/unites/liste.blade.php ENDPATH**/ ?>