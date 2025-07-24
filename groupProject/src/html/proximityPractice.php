<?php 
    $path = '../../';
    $title = 'Oh CRAP: Proxomity - Practice';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/practice.css">';
                // <link rel="stylesheet" href="../assets/css/codeTest.css">';
    $jsFiles = '<script src="../assets/js/codeTest.js"></script>';
    $quizFile = 'proximityQuiz.php';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<h1>Proximity</h1>
<script> 
    page = 'proximity';
    
</script>
<?php
    require_once($path . 'src/assets/inc/codeTest.inc.php'); 
    require_once($path . 'src/assets/inc/footer.inc.php'); 
?>