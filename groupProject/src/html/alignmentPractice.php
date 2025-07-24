<?php 
    $path = '../../';
    $title = 'Oh CRAP: Alignment - Practice';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/practice.css">';
                // <link rel="stylesheet" href="../assets/css/codeTest.css">';
    $jsFiles = '<script src="../assets/js/codeTest.js"></script>';
    $quizFile = 'alignmentQuiz.php';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<script> 
    page = 'alignment';
    
</script>
<h1>Alignment</h1>
<?php
    require_once($path . 'src/assets/inc/codeTest.inc.php'); 
    require_once($path . 'src/assets/inc/footer.inc.php'); 
?>