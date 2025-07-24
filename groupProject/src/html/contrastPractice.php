<?php 
    $path = '../../';
    $title = 'Oh CRAP: Contrast - Practice';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/practice.css">';
                //<link rel="stylesheet" href="../assets/css/codeTest.css">';
    $jsFiles = '<script src="../assets/js/codeTest.js"></script>';
    $quizFile = 'contrastQuiz.php';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
 <h1>Contrast</h1>
 <script> 
    page = 'contrast';
    
</script>
<?php
    require_once($path . 'src/assets/inc/codeTest.inc.php'); 
    require_once($path . 'src/assets/inc/footer.inc.php'); 
?>