<?php 
    $path = '../../';
    $title = 'Oh CRAP: Repetition - About';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/about.css">';
    $jsFiles = '<script src="../assets/js/interactive.js"></script>';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main>
    <h1>What is <span class="big-pink">Repetition<span class="big-white">?</span></span></h1>
    <p>Repetition is all about keeping the website consistent and controlled. It is important to not confuse the user and make the website very easy to navigate and scroll without any curl balls coming at them. Images should always be in similar positions and set ups, with consistent spacing, and any shapes and decorations you have on your site should follow a pattern that flows together seamlessly.</p>
    
    <div class="example ex-grid">
       <!-- <img src="../assets/images/rep_img_1.jpg" alt=""> -->
       <img src="../assets/images/rep_img1_1.png" alt="">
       <img src="../assets/images/rep_img2_1.png" alt="">
       <img src="../assets/images/rep_img3_1.png" alt="">
   </div>

    <section class="effects">
        <h2>Effects</h2>

        <section class="correct">
            <h3>When Used Correctly</h3>
            <h4>Establishes Consistency and Unity</h4>
            <p> Repeating elements like buttons, fonts, or colors helps create a unified design. It reinforces the brand identity and makes the layout easier to navigate.</p>
            <h4>Improves Navigation and Usability</h4>
            <p> Repeating layout patterns (e.g., navigation bars, footers, or sidebars) ensures users know where to find important elements every time they visit a new page.</p>
        </section>

        <section class="not-correct">
            <h3>When Not Used Correctly</h3>
            <h4>Overuse of Repetition Leads to Boredom</h4>
            <p>Using the same design elements too frequently or in every aspect of the layout can make the design feel repetitive and uninteresting.</p>
            <h4>Unnecessary Redundancy</h4>
            <p>Repeating unnecessary elements (e.g., repeating the same information or graphics in multiple places) can create visual clutter and confuse the user.</p>
            <h4>Inconsistent Repetition Across Pages</h4>
            <p>If the repetition is inconsistent or mismatched (e.g., different fonts, colors, or icon styles on different pages), it can lead to visual disarray.</p>
            <h4>Excessive Similarity Without Variation</h4>
            <p>Repeating the same elements without variation in size, positioning, or color can make a design feel stagnant and predictable.</p>
            
            <div class="example ex-grid">
               <!-- <img src="../assets/images/rep_img_2.jpg" alt=""> -->
               <img src="../assets/images/rep_img1_2.png" alt="">
               <img src="../assets/images/rep_img2_2.png" alt="">
               <img src="../assets/images/rep_img3_2.png" alt="">
           </div>
        </section>
    </section>

    <section class="use-in">
        <h2>Use Repetition In</h2>
        <h3>Images</h3>
        <ul>
            <li>Repetition can also be in text and images</li>
            <li>Ex: using only cartoon images or only real life images</li>
        </ul>
        <h3>Color Scheme</h3>
        <ul>
            <li>Use consistent color palette</li>
        </ul>
        <h3>Font Styles / Text</h3>
        <ul>
            <li>Consistent font, sizes, and styles</li>
            <li>Use thematic color coding</li>
        </ul>
        <h3>UI Patterns</h3>
        <ul>
            <li>UI patterns/designs like buttons or line breaks</li>
        </ul>
    </section>

    <section class="interactives">
        <div class="example">
            <button class="interactive">Correct This!</button>
            <img src="../assets/images/rep_img_3.jpg" alt="" class="bad display">
            <img src="../assets/images/rep_img_4.jpg" alt="" class="good">
        </div>

        <div class="example">
            <button class="interactive">Correct This!</button>
            <img src="../assets/images/rep_img_5.jpg" alt="" class="bad display">
            <img src="../assets/images/rep_img_6.jpg" alt="" class="good">
            <p>Create and keep consistent patterns. Don't let things be chaotic.</p>
        </div>
    </section>

    <a class="button practice" href="repetitionPractice.php">Go To Practice</a>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>