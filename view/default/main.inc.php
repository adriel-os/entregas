<body>
    <?php
    if(isset($vars['logout'])){ ?>
    <div class="alert alert-warning row"><?=$vars['msg']?></div> 
    <?php }?>

<div class="main row align-items-center">
    
    <?php 
    
            include_once 'arte.inc.php';
            include_once 'main.right.inc.php'; 
    ?>
</div>
<?php
include_once 'termos.inc.php';
include_once 'footer.inc.php';
?>

</body>