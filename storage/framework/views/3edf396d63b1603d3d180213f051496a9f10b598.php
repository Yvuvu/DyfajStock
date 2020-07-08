 
 <?php $__env->startSection('contenu'); ?>
 <br>
 <h4 class="text-center text-white">ENREGISTRER CATEGORIE</h4>
<div class="page-sectio">

     <form action="<?php echo e(url('ajouter_categorie')); ?>" method="post">
     <?php echo csrf_field(); ?>
     <div class="form-group">
     <label class="col-md-4 control-label text-white" for="prixUniaire">Categorie</label>  
     <div class="col-md-8">
     <input id="prixUniaire" name="categorie" type="text" placeholder="" class="form-control input-md">
     </div>
   </div>
   <div class="form-group">
     <label class="col-md-4 control-label" for="button1id"></label>
     <div class="col-md-8">
       <button id="button1id" name="button1id" class="btn btn-success">Ajouter</button>
       <button id="button2id" name="button2id" class="btn btn-danger">Annuler</button>
     </div>
   </div>
              
              </html>
              <?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\DyfajStock\resources\views/categorie/forme.blade.php ENDPATH**/ ?>