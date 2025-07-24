<?php 
    $path = '../../';
    $title = 'Oh CRAP: Settings';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/setttings.css">';
    $jsFiles = '';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main class="settings">
    <h1>Settings</h1>
    <h2>Select Language</h2>
    <div id="google_translate_element"></div>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>