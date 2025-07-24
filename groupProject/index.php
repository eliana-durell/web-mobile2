<?php 
    $path = '';
    $title = 'Home';
    $cssFiles = '<link rel="stylesheet" href="src/assets/css/home.css">';
    $jsFiles = '';

    require_once('src/assets/inc/head.inc.php');
    require_once('src/assets/inc/header.inc.php');
?>
<main>
    <h1>Oh CRAP.</h1>

    <section class="about-us">
        <h2>About This Site<img src="src/assets/images/one-stem-round-lightgreen.png" alt="light green leaf icon"></h2>
        <p>The CRAP design principles are a set of rules for web design, guiding web developers to create websites that are pleasant to look at, while also offering a large blanket of accessibility to users, allowing for more people to use the website. The main aspects building the acronym are:</p>
        <p>Contrast, Repetition, Alignment and Proximity.</p>
        <p>Team Perfect Cell aims to teach users of the site about CRAP design principles, by showing them direct bad examples of design, then with user interaction (likely a button or arrow press) they can change aspects of the site to better adhere to the CRAP design rules. All interactivity and the intention with the areas where purposefully bad design will be outlined clearly for the user before the examples are given. We expect that the interactivity of the site will make learning the principles of design more memorable, opposed to just scrolling down.</p>
    </section>

    <section class="who-made">
        <h2>Who Made This?<img src="src/assets/images/three-stem-round-pink-2.png" alt="pink clover icon"></h2>
        <section class="person">
            <img src="src/assets/images/Lucilius.jpg" alt="">
            <section class="person-info">
                <h3>Jake Hamilton</h3>
                <p>Age: 22</p>
                <p>Major: Humanities, Computing and Design</p>
                <p>Why Did I Take This Class: It was part of my major requirements, but this is also kinda fun </p>
            </section>
        </section>

        <section class="person">
            <img src="src/assets/images/elliePic.jpg" alt="appa">
            <section class="person-info">
                <h3>Eliana Durell</h3>
                <p>Age: 21</p>
                <p>Major: Computer Science</p>
                <p>Why Did I Take This Class:  I'm doing it for funsizes. I want to expand my knowledge of coding.</p>
            </section>
        </section>

        <section class="person">
            <img src="src/assets/images/johnPic.jpg" alt="">
            <section class="person-info">
                <h3>John Treon</h3>
                <p>Age: 22</p>
                <p>Major: Computing Information Technology</p>
                <p>Why Did I Take This Class: To learn more that I can implement in my career. It’s also required...</p>
            </section>
        </section>

        <section class="person">
            <img src="src/assets/images/kevin.GIF" alt="">
            <section class="person-info">
                <h3>Kevin Zheng</h3>
                <p>Age: 19</p>
                <p>Major: Game Design and Development</p>
                <p>Why Did I Take This Class: Cuz I have to for my minor</p>
            </section>
        </section>

        <section class="person">
            <img src="src/assets/images/kylePic.gif" alt="">
            <section class="person-info">
                <h3>Kyle Soltis</h3>
                <p>Age: 21</p>
                <p>Major: Humanities, Computing, and Design</p>
                <p>Why Did I Take This Class: Had to take this class for a requirement.</p>
            </section>
        </section>

        <section class="person">
            <img src="src/assets/images/TylerProfile.jpg" alt="">
            <section class="person-info">
                <h3>Tyler Gardner</h3>
                <p>Age: 20</p>
                <p>Major: Computing and Information Technology</p>
                <p>Why Did I Take This Class: For a requirement for my major/ Learn more about web development.</p>
            </section>
        </section>
    </section>
</main>
<?php require_once('src/assets/inc/footer.inc.php'); ?>