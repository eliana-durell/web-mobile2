<?php 
    $path = '../../';
    $title = 'Oh CRAP: Repetition - Practice';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/practice.css">';
                // <link rel="stylesheet" href="../assets/css/codeTest.css">';
    $jsFiles = '<script src="../assets/js/codeTest.js"></script>';
    $quizFile = 'repetitionQuiz.php';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<h1>Repetition</h1>
<script> 
    page = 'repetition';
    
</script>
<?php
    require_once($path . 'src/assets/inc/codeTest.inc.php'); 
    require_once($path . 'src/assets/inc/footer.inc.php'); 
?>