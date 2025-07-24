<?php 
    $path = '../../';
    $title = 'Oh CRAP: Alignment - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '<script src="../assets/js/quiz.js"></script>';

    $h1 = 'Alignment Quiz';
    $coverImg = 'align_quiz_cover.jpg';
    $coverAlt = 'cover for alignement quiz';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');

    require_once('../assets/inc/cover.quiz.inc.php');

    #region quiz questions
    $question = 'Q1: True or False, the site should be aligned in a way that guides the users eyes down the page naturally.';
    // text, radio, or checkbox
    $questionType = 'radio';
    // name for radio is group (common)
    // name for checkbox is individual (unique)
    $options = [
        [
            'id' => 'true', 
            'name' => 'implementation', 
            'value' => 'correct', 
            'label' => 'True'
        ],
        [
            'id' => 'false', 
            'name' => 'implementation', 
            'value' => 'incorrect', 
            'label' => 'False'
        ]
    ];
    require('../assets/inc/quizQuestion.inc.php');

    $question = 'Q2: When is the best time to use center alignment for text?';
    // text, radio, or checkbox
    $questionType = 'radio';
    // name for radio is group (common)
    // name for checkbox is individual (unique)
    $options = [
        [
            'id' => 'paragraphs', 
            'name' => 'centerAlignment', 
            'value' => 'incorrect', 
            'label' => 'For long paragraphs'
        ],
        [
            'id' => 'headerTitle', 
            'name' => 'centerAlignment', 
            'value' => 'correct', 
            'label' => 'Headers and titles'
        ],
        [
            'id' => 'imgDesc', 
            'name' => 'centerAlignment', 
            'value' => 'incorrect', 
            'label' => 'Image descriptions'
        ],
        [
            'id' => 'quotes', 
            'name' => 'centerAlignment', 
            'value' => 'incorrect', 
            'label' => 'For quotes'
        ]
    ];
    require('../assets/inc/quizQuestion.inc.php');

    $question = 'Q3: You are aligning a large paragraph of text for your website. It should be _______ aligned.';
    // text, radio, or checkbox
    $questionType = 'text';
    $textLabels = ['Answer:'];
    $textAnswers = ['left'];
    require('../assets/inc/quizQuestion.inc.php');
    #endregion

    require_once('../assets/inc/indexList.quiz.inc.php');

    require_once($path . 'src/assets/inc/footer.inc.php'); 
?>