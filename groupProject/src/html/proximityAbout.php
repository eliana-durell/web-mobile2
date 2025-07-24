<?php 
    $path = '../../';
    $title = 'Oh CRAP: Proxomity - About';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/about.css">';
    $jsFiles = '<script src="../assets/js/interactive.js"></script>';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main>
    <h1>What is <span class="big-pink">Proximity<span class="big-white">?</span></span></h1>
    <p>Proximity is the space between content. Space helps organize content allowing the viewer to easily read the website. Too much space and the website will feel empty. Too little space and the website will feel cluttered. Proximity works with contrast. If a designer puts a red box of color with topic 1 and a blue box with topic 2 it makes it easily differentiable that they are different unrelated parts of the website. Proximity can highlight an element by distancing it from other elements.</p>
    
    <div class="example">
        <img src="../assets/images/prox_img_1.jpg" alt="">
        <p>Group elements by similarity and allow SPACE between groups.</p>
    </div>
    
    <section class="effects">
        <h2>Effects</h2>

        <section class="correct">
            <h3>When Used Correctly</h3>
            <h4>Organizes Information and Creates Groupings</h4>
            <p>Proper use of proximity helps group related items together, making the content more digestible and easier to understand.</p>
            <h4>Guides the User's Eye</h4>
            <p>Proximity allows users to quickly identify which elements are related, helping them navigate the design more efficiently.</p>
            <h4>Strengthens Visual Hierarchy</h4>
            <p>Items that are in close proximity to each other are perceived as more closely related, reinforcing the visual hierarchy.</p>
        </section>

        <section class="not-correct">
            <h3>When Not Used Correctly</h3>
            <h4>Crowding or Grouping Unrelated Items Together</h4>
            <p>Grouping unrelated items too close together can create confusion, making it difficult for users to distinguish between different sections.</p>
            <h4>Overuse of Proximity in Tight Clusters</h4>
            <p>While grouping related items is useful, over-clustering can lead to a cluttered design, making it hard for users to focus on key elements.While grouping related items is useful, over-clustering can lead to a cluttered design, making it hard for users to focus on key elements.</p>
            <h4>Inconsistent Spacing Across Pages</h4>
            <p>Inconsistent proximity across pages or sections can create a feeling of disorganization and disrupt the user's sense of flow.</p>
        
            <div class="example">
                <img src="../assets/images/prox_img_2.jpg" alt="">
                <p>Proximity defines groups of related text (paragraphs and sections) and helps scanning.</p>
            </div>
        </section>
    </section>

    <section class="use-in">
        <h2>Use Proximity In</h2>
        <h3>Group Related Elements</h3>
        <ul>
            <li>Place elements that are logically related in close proximity. This helps users recognize their relationship and makes the content easier to understand.</li>
            <ul>
                <li>Headings and their content should be close together to visually communicate they belong together.</li>
            </ul>
        </ul>
        <h3>Maintain Adequate Spacing Between Unrelated Elements</h3>
        <ul>
            <li>Leave space between unrelated content to clearly define different sections of the page.</li>
            <li>Example: The navigation bar should be spaced apart from the footer to clearly distinguish these separate sections.</li>
            <li>Avoid crowding unrelated elements together.</li>
        </ul>
        <h3>Use Spacing to Create Visual Hierarchy</h3>
        <ul>
            <li>Larger gaps between important sections can make them stand out more, while smaller 
                gaps help group related content.</li>
            <li>Example: You can use larger space between different CRAP principles (Contrast, Repetition, Alignment, Proximity) and tighter space between the examples and the explanation of each principle.</li>
        </ul>
        <h3>Use Proximity to Organize Information</h3>
        <ul>
            <li>Proximity can help users navigate information faster by guiding their eyes to what's important.</li>
        </ul>
    </section>

    <section class="interactives">
        <div class="example">
            <button class="interactive">Correct This!</button>
            <img src="../assets/images/prox_img_3.jpg" alt="" class="bad display">
            <img src="../assets/images/prox_img_4.jpg" alt="" class="good">
            <p>Be sure to use all possible space available for your content. Leave some white space, but not too much as to leave the page with blank spaces.</p>
        </div>

        <div class="example">
            <button class="interactive">Correct This!</button>
            <img src="../assets/images/prox_img_5.jpg" alt="" class="bad display">
            <img src="../assets/images/prox_img_6.jpg" alt="" class="good">
            <p>Allow for details and content of your website to have proper spacing as to not cram content together.</p>
        </div>
    </section>

    <a class="button practice" href="proximityPractice.php">Go To Practice</a>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>