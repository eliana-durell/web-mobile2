<?php 
    $path = '../../';
    $title = 'Oh CRAP: Proxomity - Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '<script src="../assets/js/quiz.js"></script>';

    $h1 = 'Proximity Quiz';
    $coverImg = 'prox_quiz_cover.jpg';
    $coverAlt = 'cover for proximity quiz';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');

    require_once('../assets/inc/cover.quiz.inc.php');

    #region quiz questions
    $question = 'Q1: Items that are grouped together are considered in the same part of the visual ___________';
    // text, radio, or checkbox
    $questionType = 'text';
    $textLabels = ['Answer:'];
    $textAnswers = ['hierarchy'];
    require('../assets/inc/quizQuestion.inc.php');

    $question = 'Q2: Why is it so important to space out items?';
    // text, radio, or checkbox
    $questionType = 'radio';
    // name for radio is group (common)
    // name for checkbox is individual (unique)
    $options = [
        [
            'id' => 'aesthetic', 
            'name' => 'reason', 
            'value' => 'incorrect', 
            'label' => 'It looks better'
        ],
        [
            'id' => 'space', 
            'name' => 'reason', 
            'value' => 'incorrect', 
            'label' => 'To give the user more space to scroll'
        ],
        [
            'id' => 'interference', 
            'name' => 'reason', 
            'value' => 'correct', 
            'label' => 'So items of different groups do not interfere with others'
        ],
        [
            'id' => 'piling', 
            'name' => 'reason', 
            'value' => 'incorrect', 
            'label' => "Don't worry, let them pile up"
        ]
    ];
    require('../assets/inc/quizQuestion.inc.php');

    $question = 'Q3: If images are too close together you should:';
    // text, radio, or checkbox
    $questionType = 'radio';
    // name for radio is group (common)
    // name for checkbox is individual (unique)
    $options = [
        [
            'id' => 'separate', 
            'name' => 'cluster', 
            'value' => 'incorrect', 
            'label' => 'Use breaks to separate them'
        ],
        [
            'id' => 'margin', 
            'name' => 'cluster', 
            'value' => 'correct', 
            'label' => 'Add margins or padding to each image'
        ],
        [
            'id' => 'hope', 
            'name' => 'cluster', 
            'value' => 'incorrect', 
            'label' => 'Hope it fixes itself on the user screen'
        ],
        [
            'id' => 'do-nothing', 
            'name' => 'cluster', 
            'value' => 'incorrect', 
            'label' => 'Let it sit like that'
        ]
    ];
    require('../assets/inc/quizQuestion.inc.php');
    #endregion

    require_once('../assets/inc/indexList.quiz.inc.php');

    require_once($path . 'src/assets/inc/footer.inc.php'); 
?>