<?php require('partials/head.php'); ?>
<div class="container-fluid">

<h1>My Diet</h1>
    
<div class="container">
<?php foreach ($myday as $mydiet) : ?>
<div class="row">
    <div class="col-md-4">
        <h2><?= $mydiet->title; ?></h2>
        <h2><?= $mydiet->published; ?></h2>
        <p><?= $mydiet->description; ?></p>
    </div>
    <div class="col-md-8" ><img class="img-fluid" src="<?= $mydiet->images; ?>" alt=""></div>
</div>
  
   <p><?= $mydiet->description; ?></p>
<?php endforeach; ?>
<p>
    <?php
    $diettime = mktime($mydiet->published);
    $dietexpire = $diettime +60;
    $currentime=time();
    echo ('diettime: '.$diettime. ' dietexpire: '. $dietexpire .' currentime: '. $currentime);
    if($dietexpire === $currentime){echo 'Diet is Expire';}
    ?>
</p>


</div>
<?php require('partials/footer.php'); ?>