 
 <?php $__env->startSection('contenu'); ?>
 <div class="container">
 <h1 class="armelle">LISTE DES PRODUITS</h1>
    <div class="row col-md-12 col-md-offset-2 custyle  text-white">
    <table class="table table-striped custab table-bordered">
    <thead>
    <a href="<?php echo e(url('produits')); ?>" class="btn btn-primary btn-xs pull-right boutton-ajouter-produit"><b>+</b> Ajouter un produit</a>

        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Categorie</th>
            <th>Unite</th>
            <th>Quantite</th>
            <th>Prix Unitaire</th>
            <th class="text-center">Option</th>
        </tr>
    </thead >
           <?php $__currentLoopData = $produits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($prod->id); ?></td>
                <td><?php echo e($prod->nom); ?></td>
                <td><?php echo e($prod->categorie_id); ?></td>
                <td><?php echo e($prod->unite); ?></td>
                <td><?php echo e($prod->quantite); ?></td>       
                <td><?php echo e($prod->prixUnitaire); ?></td>
                <td class="text-center"><a class='btn btn-info btn-xs' href=><span class="glyphicon glyphicon-edit"></span> Modifier</a> <a href="<?php echo e(url('destroy')); ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Supprimer</a></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
</div>
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DyfajStock\resources\views/produits/liste.blade.php ENDPATH**/ ?>