<?php 
    $path = '../../';
    $title = 'Oh CRAP: Final Quiz';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/quiz.css">';
    $jsFiles = '<script src="../assets/js/quiz.js"></script>';

    $h1 = 'Final Quiz';
    $coverImg = 'crap_final_cover.jpg';
    $coverAlt = 'cover for final quiz';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');

    require_once('../assets/inc/cover.quiz.inc.php');

    #region quiz questions
    $question = 'Q1: What does CRAP stand for?';
    // text, radio, or checkbox
    $questionType = 'text';
    $textLabels = ['C:', 'R:', 'A:', 'P:'];
    $textAnswers = ['contrast', 'repetition', 'alignment', 'proximity'];
    require('../assets/inc/quizQuestion.inc.php');

    $question = 'Q2: What principle is applied when a designer changes the background and text colors to improve readability?';
    // text, radio, or checkbox
    $questionType = 'radio';
    // name for radio is group (common)
    // name for checkbox is individual (unique)
    $options = [
        [
            'id' => 'contrast', 
            'name' => 'principle', 
            'value' => 'correct', 
            'label' => 'Contrast'
        ],
        [
            'id' => 'repetition', 
            'name' => 'principle', 
            'value' => 'incorrect', 
            'label' => 'Repetition'
        ],
        [
            'id' => 'alignment', 
            'name' => 'principle', 
            'value' => 'incorrect', 
            'label' => 'Alignment'
        ],
        [
            'id' => 'proximity', 
            'name' => 'principle', 
            'value' => 'incorrect', 
            'label' => 'Proximity'
        ]
    ];
    require('../assets/inc/quizQuestion.inc.php');

    $question = 'Q3: A lot of articles are stuffed together on a sidebar on a news website. This is a poor example of _____';
    // text, radio, or checkbox
    $questionType = 'radio';
    // name for radio is group (common)
    // name for checkbox is individual (unique)
    $options = [
        [
            'id' => 'poor-contrast', 
            'name' => 'poor-example', 
            'value' => 'incorrect', 
            'label' => 'Contrast'
        ],
        [
            'id' => 'poor-repetition', 
            'name' => 'poor-example', 
            'value' => 'incorrect', 
            'label' => 'Repetition'
        ],
        [
            'id' => 'poor-alignment', 
            'name' => 'poor-example', 
            'value' => 'incorrect', 
            'label' => 'Alignment'
        ],
        [
            'id' => 'poor-proximity', 
            'name' => 'poor-example', 
            'value' => 'correct', 
            'label' => 'Proximity'
        ]
    ];
    require('../assets/inc/quizQuestion.inc.php');

    $question = 'Q4: A man is writing an article about how much he hates his boss. Where should the header be?';
    // text, radio, or checkbox
    $questionType = 'radio';
    // name for radio is group (common)
    // name for checkbox is individual (unique)
    $options = [
        [
            'id' => 'left', 
            'name' => 'text-align', 
            'value' => 'incorrect', 
            'label' => 'Left'
        ],
        [
            'id' => 'right', 
            'name' => 'text-align', 
            'value' => 'incorrect', 
            'label' => 'Right'
        ],
        [
            'id' => 'center', 
            'name' => 'text-align', 
            'value' => 'correct', 
            'label' => 'Center'
        ],
        [
            'id' => 'justified', 
            'name' => 'text-align', 
            'value' => 'incorrect', 
            'label' => 'Justified'
        ]
    ];
    require('../assets/inc/quizQuestion.inc.php');

    $question = 'Q5: What is the best way to utilize repetition?';
    // text, radio, or checkbox
    $questionType = 'radio';
    // name for radio is group (common)
    // name for checkbox is individual (unique)
    $options = [
        [
            'id' => 'same', 
            'name' => 'use-repetition', 
            'value' => 'incorrect', 
            'label' => 'Strictly always the same alignments and set up to each page'
        ],
        [
            'id' => 'skeleton', 
            'name' => 'use-repetition', 
            'value' => 'correct', 
            'label' => 'A general skeleton, but still enough to spice it up on each page'
        ],
        [
            'id' => 'chaos', 
            'name' => 'use-repetition', 
            'value' => 'incorrect', 
            'label' => 'Pure chaos'
        ],
        [
            'id' => 'pretend', 
            'name' => 'use-repetition', 
            'value' => 'incorrect', 
            'label' => 'Pretend to know what you are doing enough'
        ]
    ];
    require('../assets/inc/quizQuestion.inc.php');
    #endregion

    require_once('../assets/inc/indexList.quiz.inc.php');

    require_once($path . 'src/assets/inc/footer.inc.php'); 
?>