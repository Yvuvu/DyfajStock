<?php $__env->startSection('title','Nouveau-produit'); ?>
<?php $__env->startSection('menu'); ?>
<li class="nav-item px-lg-4">
<a class="nav-link text-uppercase text-expanded" href="">Produits
  <span class="sr-only">(current)</span>
</a>
</li>
<li class="nav-item px-lg-4">
<a class="nav-link text-uppercase active text-expanded" href="<?php echo e(URL('nouveau-produit')); ?>">Nouveau produit</a>
</li>
<li class="nav-item px-lg-4">
<a class="nav-link text-uppercase text-expanded" href="<?php echo e(URL('nouvelle-entree')); ?>">Nouvelle entrée</a>
</li>
<li class="nav-item  px-lg-4">
<a class="nav-link text-uppercase text-expanded" href="">Vente</a>
</li>
<li class="nav-item px-lg-4">
<a class="nav-link text-uppercase text-expanded" href="">Mouvements</a>
</li>
<li class="nav-item px-lg-4">
<a class="nav-link text-uppercase text-expanded" href="<?php echo e(URL('users')); ?>">Utilisateurs</a>
</li>
<?php $__env->stopSection(); ?>

 <?php $__env->startSection('contenu'); ?>


</head> 

    
<!-- Form Name -->
<br>
 <h4 class="text-center text-white">ENREGISTRER UN NOUVEAU PRODUIT</h4>

 <form class="form-horizontal "action=" <?php echo e(url('ajouter_produit')); ?>" method="post">

<div class="page-sectio">
<?php echo csrf_field(); ?>
<div class="form-group d-flex">
               <div>
                    <label  class="col-md-4 control-label text-white">Categorie</label>
                    <div class="col-md-12">
                    <select name="categorie_id" class="form-control input-md">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($categorie->id); ?>"><?php echo e($categorie->categorie); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div >
                </div>
                <br><br>
                <div>
                    <label  class="col-md-4 control-label text-white">Unite</label>
                    <div class="col-md-12">
                    <select name="categorie_id" class="form-control input-md">
                        <?php $__currentLoopData = $unite; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($unite->id); ?>"><?php echo e($unite->unite); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div >
                </div>
                 </div>
<!-- Text input-->
<div class="form-group" >
  <label class="col-md-4 control-label text-white"  for="">Nom</label>  
  <div class="col-md-8">
  <input id="" name="nom" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label text-white" for="prixUnitaire">Prix unitaire</label>  
  <div class="col-md-8">
  <input id="prixUniaire" name="prixUnitaire" type="number"  placeholder="" class="form-control input-md">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label text-white" for="quantiteProduit ">Quantite</label>  
  <div class="col-md-8">
  <input id="quantiteProduit" name="quantiteProduit" type="number"  class="form-control input-md">
    
  </div>
</div>

<
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-primary">Ajouter</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Annuler</button>
  </div>
</div>
</div>

</form>
              <?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DyfajStock\resources\views/produits/forme.blade.php ENDPATH**/ ?>