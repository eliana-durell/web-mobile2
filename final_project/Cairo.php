<?php 
  require_once("assets/inc/header.inc.php");
?>
    <main>
        <section class="cairoHeroSection">
            <h1>Cairo</h1>
        </section>
        <p class="cairo-description">Cairo is the captial of Egypt and the largest city, housing over 10 million people. It
          holds an abundance of places from the past that are waiting to be explored.
        </p>
        <section class="grid-cairo">
            <section>
              <h5>Landmarks</h5>
              <a href="Landmarks.php"><img src="assets/images/cairoHomePage/landmarkHomePage.jpg" alt="Great Sphinx of Giza" onmouseover="imgHover('hoverLandmarks')" onmouseout="imgUnhover('hoverLandmarks')" onmousedown="imgClick('hoverLandmarks')" id="hoverLandmarks"></a>
              <p>Landmarks include the pyramids, temples, and the sphinx.</p>
            </section>
            <section>
              <h5>Museums</h5>
              <a href="Museums.php"><img src="assets/images/cairoHomePage/museumHomePage.jpg" alt="The National Museum of Egyptian Civilization" onmouseover="imgHover('hoverMuseums')" onmouseout="imgUnhover('hoverMuseums')" onmousedown="imgClick('hoverMuseums')" id="hoverMuseums"></a>
              <p>Egypt is rich in history, housing many museums.</p>
            </section>
            <section class="btm-row">
              <h5>Sacred Sites</h5>
              <a href="SacredSites.php"><img src="assets/images/cairoHomePage/sacredsiteHomePage.jpg" alt="Muhammad Ali Mosque" onmouseover="imgHover('hoverSacred')" onmouseout="imgUnhover('hoverSacred')" onmousedown="imgClick('hoverSacred')" id="hoverSacred"></a>
              <p>Sacred sites include churches and mosques.</p>
            </section>
            <section class="btm-row">
              <h5>Activities</h5>
              <a href="CairoActivities.php"><img src="assets/images/cairoHomePage/cairoActivitiesHomePage.jpg" alt="Camel" onmouseover="imgHover('hoverCairoActivities')" onmouseout="imgUnhover('hoverCairoActivities')" onmousedown="imgClick('hoverCairoActivities')" id="hoverCairoActivities"></a>
              <p>From riding a camel to seeing a light show at night, Egypt has it all.</p>
            </section>
        </section>    
    </main>   
    <script src="assets/script/imageLink.js"></script>   
<?php 
  require_once("assets/inc/footer.inc.php");
?>