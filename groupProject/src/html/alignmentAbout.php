<?php 
    $path = '../../';
    $title = 'Oh CRAP: Alignment - About';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/about.css">';
    $jsFiles = '<script src="../assets/js/interactive.js"></script>';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main>
    <h1>What is <span class="big-pink">Alignment<span class="big-white">?</span></span></h1>
    <p>Consider how elements are positioned in relation to each other. Alignment creates the structures and balance of a document. Alignment can also establish order and organization for a website or a document. If the site lacks alignment there will be instances where it looks messy and the viewer might not notice some information on the site. By using negative space you can avoid cramming too much into the project. Every element in the page should be placed with intention and should have visual connections with each other. Using thirds in layout design is also important in laying everything out.</p>
    
    <div id="text-example">
        <div id="left-align">
            <div>
                <p>Left Alignment</p>
                <p>Content is Anchored To the Left Side</p>
            </div>
            <p>Left-aligned text improves readability, as it follows the natural reading direction. Commonly used in body text.</p>
        </div>

        <div id="center-align">
            <div>
                <p>Center Alignment</p>
                <span></span>
                <p>Content is Anchored Down the Middle</p>
            </div>
            <p>Centered alignment is commonly used for titles, headlines, and invitations to create a sense of balance.</p>
        </div>

        <div id="justified-align">
            <div>
                <p>Justified Alignment</p>
                <p>Content is Anchored Evenly Between Two Lines</p>
            </div>
            <p>Justified alignment creates a clean rectangular block of text. Commonly used in print publications to maintain a structured layout.</p>
        </div>

        <div id="right-align">
            <div>
                <p>Right Alignment</p>
                <p>Content is Anchored To the Right Side</p>
            </div>
            <p>Right alignment is less common but can be useful in certain designs. Commonly used in captions and image credits.</p>
        </div>
    </div>

    <section class="effects">
        <h2>Effects</h2>

        <section class="correct">
            <h3>When Used Correctly</h3>
            <h4>Creates Visual Balance and Order</h4>
            <p>Proper alignment ensures that elements are neatly organized, guiding the viewer's eye in a natural and intuitive way.</p>
            <h4>Improves Readability and Flow</h4>
            <p>Left-aligned text (for languages that read left-to-right) is easier to read and follows a predictable pattern</p>
        </section>

        <section class="not-correct">
            <h3>When Not Used Correctly</h3>
            <h4>Misaligned Text or Objects</h4>
            <p>Inconsistent alignment can lead to a messy and confusing design, where users don't know where to look first.</p>
            <h4>Overcrowding Elements Without Proper Spacing</h4>
            <p>Poor alignment with insufficient white space can create clutter and overwhelm the user, making it difficult to focus on key content.</p>
            <h4>Lack of Grid Structure</h4>
            <p>Without a clear grid or baseline structure, elements may seem disconnected and out of place. This can make the design feel random rather than organized.</p>
        </section>
    </section>

    <div class="example">
        <img src="../assets/images/align_img_1.png" alt="">
    </div>

    <section class="use-in">
        <h2>Use Alignment In</h2>
        <h3>Text Alignment</h3>
        <ul>
            <li>Centered small text is better than centered large text (large makes it harder to read)</li>
            <li>“Justification works fine when the text has a long line-length, small font size, and shorter words. Narrow columns and long words can pose readability issues when justification is used.”</li>
        </ul>
    </section>

    <section class="interactives">
        <div class="example">
            <button class="interactive">Correct This!</button>
            <img src="../assets/images/align_img_2.jpg" alt="" class="bad display">
            <img src="../assets/images/align_img_3.png" alt="" class="good">
        </div>

        <div class="example">
            <button class="interactive">Correct This!</button>
            <img src="../assets/images/align_img_4.jpg" alt="" class="bad display">
            <img src="../assets/images/align_img_5.jpg" alt="" class="good">
            <p>Shapes and images should be arranged in an easy to spot pattern, and sorted as to not.</p>
        </div>
    </section>

    <a class="button practice" href="alignmentPractice.php">Go To Practice</a>
</main>   
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>