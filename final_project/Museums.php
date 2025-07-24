<?php 
  require_once("assets/inc/header.inc.php");
?>
    <main class="museumsPage">
        <h1>Museums</h1>
        <h4>Where are they?</h4>
        <section id="big-img-little-row"> 
            <img id="map-img" src="assets/images/museumsHomePage/allMuseumMap.png" alt="map of museum locations in Egypt">
        </section>
        <section id="pictures-container"></section>

        <section id="images-left-right">
            <h4 id="egyptian-h4">The Egyptian Museum in Cairo</h4>
            <button onclick="leftButton()"><img class="arrow" src="assets/images/museumsHomePage/leftArrow.png" alt="left arrow"></button>
            <img id="egypt-img" src="assets/images/egyptianMuseum/museum.jpg" alt="The Egyptian Museum in Cairo">
            <button onclick="rightButton()"><img class="arrow" src="assets/images/museumsHomePage/rightArrow.png" alt="right arrow"></button>  
        </section>
        <p class="yellow">This is the oldest archaeological museum and it houses the world's largest collection of Egyptian artefacts. It includes
          over 170,000 artefacts ranging from Pre-Dynastic Period to the Graeco-Roman Era.</p>
        <h4 id="national-h4">The National Museum of Egyptian Civilization</h4>
        <section class="img-carasol">
            <img src="assets/images/nationalMuseum/bull.jpg" alt="bull statue">
            <img src="assets/images/nationalMuseum/coffins.jpg" alt="inside tomb">
            <img src="assets/images/nationalMuseum/eagleStone.jpg" alt="carved stone">
            <img src="assets/images/nationalMuseum/glasses.jpg" alt="painted lights">
            <img src="assets/images/nationalMuseum/pyramidUpside.jpg" alt="upside down pyramid">
            <img src="assets/images/nationalMuseum/redCarrier.jpg" alt="carrier">
            <img src="assets/images/nationalMuseum/shield.jpg" alt="carved shield">
            <img src="assets/images/nationalMuseum/sticks.jpg" alt="display case">
        </section>
        <p>This museum contains artefacts from prehistoric times and includes eras such as the Pharoanic, Greek, Coptic,
          and Islamic era. They have a main gallery and a Royal Mummies Gallery. The latter houses mummies from the
           ancient 17 Kings and 3 Queens of Egypt.</p>

        <h4 id="coptic-h4" class="red">Coptic Museum</h4>
        <section id="imgGallery">
            <img id="smallImgLeft" onclick="leftImgButton()" src="assets/images/copticMuseum/outside.jpg" alt="columns and vases">
            <img id="mainImg" src="assets/images/copticMuseum/name.jpg" alt="Coptic Museum">
            <img id="smallImgRight" onclick="rightImgButton()" src="assets/images/copticMuseum/ceiling.jpg" alt="carved ceiling">
        </section>
        <p class="red">This museum has the largest collection of Coptic Christian artefacts in the world. It contains Coptic art along with 
          the Nag Hammadi Library which is the most valuable collection of ancient texts discovered.
        </p>
    </main>
    <script src="assets/script/imageCarasoul.js"></script>
<?php 
  require_once("assets/inc/footer.inc.php");
?>