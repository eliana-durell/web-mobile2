<?php 
    $path = '../../';
    $title = 'Oh CRAP: Contrast - About';
    $cssFiles = '<link rel="stylesheet" href="../assets/css/about.css">';
    $jsFiles = '<script src="../assets/js/interactive.js"></script>';

    require_once($path . 'src/assets/inc/head.inc.php');
    require_once($path . 'src/assets/inc/header.inc.php');
?>
<main>
    <h1>What is <span class="big-pink">Contrast<span class="big-white">?</span></span></h1>
    <p>Contrast is about making certain elements stand out from other elements. We want the user to see this element first out of all the content while highlighting the important information. This can help guide the user through the page (how you want them to view it ex: a visual path). Contrast makes the page interesting to look at. If we didn't have it it would be a plain and boring layout and users wouldn't be as engaged.</p>

    <div class="example">
        <img src="../assets/images/contrast_img_1.jpg" alt="">
        <p>Always pick out a color pallet that will compliment and work well. Be very careful to not use a color for text that will blend in with the background too much. </p>
    </div>

    <section class="effects">
        <h2>Effects</h2>

        <section class="correct">
            <h3>When Used Correctly</h3>
            <h4>Improves Readability & Accessibility</h4>
            <p>High contrast between text and background makes content easier to read. Ensures accessibility for people with visual impairments. </p>
            <h4>Draws Attention & Emphasizes Key Elements</h4>
            <p>Helps important elements stand out, like Call-to-Actions or headlines.</p>
            <h4>Creates Visual Hierarchy</h4>
            <p>Helps guide users by making certain elements more dominant. For example, large, bold headlines contrast with smaller, lighter body text, leading the eye naturally.</p>
            <h4>Enhances Aesthetic Appeal</h4>
            <p>Well-balanced contrast adds dynamism and prevents designs from looking flat.</p>

            <div class="example">
                <img src="../assets/images/contrast_img_2.jpg" alt="Color contrast test on the color palette of this website">
                <p>Do a readability test with the colors in your color palette.</p>
            </div>
        </section>

        <section class="not-correct">
            <h3>When Not Used Correctly</h3>
            <h4>Poor Readability</h4>
            <p>Low contrast between text and background makes it hard to read, especially for users with visual impairments. This could lead to frustration and abandonment of content.</p>
            <h4>Visual Clutter</h4>
            <p>Too much contrast between elements (e.g., bright colors everywhere) can overwhelm the user. It makes it hard for the eyes to focus on specific areas and distracts from the main content.</p>
            <h4>Inconsistent Branding</h4>
            <p>Clashing colors or random contrast patterns can confuse users and disrupt the visual flow, leading to inconsistency in the design. This makes it difficult for users to recognize and connect with the brand.</p>
            <h4>Overuse of Bad Elements</h4>
            <p>Excessive use of bold, high-contrast fonts or images can make the design feel chaotic, reducing its impact. Important information may get lost if everything is treated with equal contrast.</p>
            <h4>Hidden Details</h4>
            <p>Lack of contrast in key details can result in users missing important visual cues (like borders, icons, or dividers).</p>

            <div class="example">
                <img src="../assets/images/contrast_img_3.jpg" alt="">
                <p>Contrast can be shown through colors, shape, size, texture, and other forms.</p>
            </div>
        </section>
    </section>

    <section class="use-in">
        <h2>Use Contrast In</h2>
        <h3>Size</h3>
        <ul>
            <li>Make elements bigger or smaller compared to the surrounding text/elements</li>
            <li>Ex: large text for headers, small text for paragraphs</li>
        </ul>
        <h3>Shape</h3>
        <ul>
            <li>Change the shape ex: a circle and squares</li>
            <li>Ex: Put important information in a circle</li>
        </ul>
        <h3>Texture</h3>
        <ul>
            <li>Change the color or shade of the element to highlight it</li>
        </ul>
        <h3>Color</h3>
        <ul>
            <li>Try looking at a grayscale version of your website and see if things are thoroughly contrasted</li>
            <li>Just the right amount of contrasting color can help alert the user to look at that element</li>
            <ul>
                <li>Ex: caution signs on the road</li>
            </ul>
            <li>Using different temperature colors</li>
            <li>Using different colors, but consistently throughout the page</li>
        </ul>
        <h3>Font</h3>
        <ul>
            <li>A page should have contrasting fonts.</li>
            <ul>
                <li>Ex: 1 serif and 1 sans serif</li>
            </ul>
        </ul>
        <h3>Text</h3>
        <ul>
            <li>Contrast can also be created with <strong>bold</strong>, <i>italics</i>, and <u>underlining</u>, even <s>strikethrough</s></li>
        </ul>
    </section>

    <section class="interactives">
        <div class="example">
            <button class="interactive">Correct This!</button>
            <div class="bad one display">This is a Bad Example</div>
            <div class="good one">This is a Good Example</div>
            <p>A key aspect to web design is legibility of your content. Always make sure the text starkly contrasts the background so anyone can read it.</p>
        </div>

        <div class="example">
            <button class="interactive">Correct This!</button>
            <div class="bad two display">Don't do this, red and green blend together</div>
            <div class="good two">Do something like this, colors with clear contrast</div>
            <p>Be sure that your color choices are not alienating users who have colorblindness. There are various tools to check.</p>
        </div>
    </section>

    <a class="button practice" href="contrastPractice.php">Go To Practice</a>
</main>
<?php require_once($path . 'src/assets/inc/footer.inc.php'); ?>