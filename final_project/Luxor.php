<?php 
  require_once("assets/inc/header.inc.php");
?>
    <main>
      <section class="luxorHeroSection">
        <h1>Luxor</h1>
      </section>
      <p class="luxor-description">Luxor is located in upper Egypt and contains the Ancient Egyptian city of Thebes. 
        It is the oldest inhabited city in the world. It's most well known for the West Bank and East Bank which 
        are split up by the Nile River.</p>
      <section class="grid-luxor">
        <section>
          <h5>West Bank</h5>
          <a href="WestBank.php"><img src="assets/images/luxorHomePage/westBankHomePage.jpg" alt="Valley of Kings" onmouseover="imgHover('hoverWestBank')" onmouseout="imgUnhover('hoverWestBank')" onmousedown="imgClick('hoverWestBank')" id="hoverWestBank"></a>
          <p>The West Bank contains many important archaeological sites like the Valley of Kings, the Valley of Queens,
             and the tombs of kings and queens.</p>
        </section>
        <section>
          <h5>East Bank</h5>
          <a href="EastBank.php"><img src="assets/images/luxorHomePage/eastBankHomePage.jpg" alt="Karnak Temple" onmouseover="imgHover('hoverEastBank')" onmouseout="imgUnhover('hoverEastBank')" onmousedown="imgClick('hoverEastBank')" id="hoverEastBank"></a>   
          <p>The East Bank is known for housing the huge and significant Karnak Temple and Luxor Temple. </p> 
        </section>
      </section> 
      <section class="luxorActivitySection">
        <h5>Activities</h5>
        <a href="LuxorActivities.php"><img src="assets/images/luxorHomePage/luxorActivitiesHomePage.jpg" alt="felucca in water" onmouseover="imgHover('hoverLuxorActivities')" onmouseout="imgUnhover('hoverLuxorActivities')" onmousedown="imgClick('hoverLuxorActivities')" id="hoverLuxorActivities"></a>  
        <p>Luxor is located on the Nile River allowing boats as transportation. If you go to Karnak Temple at night you can view a spectacular light show.</p>
      </section> 
    </main>
    <script src="assets/script/imageLink.js"></script>
<?php 
  require_once("assets/inc/footer.inc.php");
?>