<?php 
  require_once("assets/inc/header.inc.php");
?>
    <main class="gradingPage">
      <h1>Grading</h1>
      <h3>Design and Quality of Content</h3>
      <hr>
      <h4>CRAP Princples</h4>
      <p>I made sure that text color and background color were at least AA approved. 
        I used some of the same photo layouts as well as designs for homepages. I centered everything 
        so it is all aligned. I tried to make sure everything had space using padding and margin.</p>
      <h4>Organization of information</h4>
      <p>I put any information that related to the header or picture underneath. They are short blurbs so that the reader
        isn't overwhelmed with information and can enjoy the content and design more.</p>
      <h4>Content</h4>
      <p>In the Museums Page I got an image and edited it to show where the muesums are.
         I also took photos of maps. An example is in the Valley of Kings section in the West Bank page. </p>
    
      <h3>Quantity of Content</h3>
      <hr>
      <p>It's a little lacking in information because it seemed like it would either by a lot of information or a just enough
          to get the reader interested.
        </p>
      
      <h3>More Miscellaneous</h3>
      <hr>
      <h4>Code Design Requirements</h4>
      <p>I have a global styles sheet and tried to put comments specifying the section it is styling.</p>
      <h4>Interaction Design & Navigation </h4>
      <p>Each page has a header indicating where the user is. The user can also navigate through a navigation
         bar or a footer navigation.</p>
      <h4>HTML & CSS Validates</h4>
      <p>It validates on W3.</p>

      <h3>Responsive Web Design</h3>
      <hr>
      <p>I created several screen breaks where content is changed to try and get a smooth flow of repsonsiveness.</p>

      <h3>Final: New Features</h3>
      <hr>
      <h4>JavaScript</h4>
      <p> In the Cairo and Luxor pages, I added onmouseon, onmouseout, and onmousedown. I used these event 
        listeners to simulate link effects since users are able
         to click on the image and navigate to a different web page. The effects also work in mobile. I'm not sure 
         if this counts since I had it in my midterm, but on my Museums page I have several image carasouls that use JS.
        On the Museum Page, I added blur effects when the user selects an image to highlight which one the user is currently on.</p>
     
      <h4>DHTML</h4>
      <p>On the Home page I dynamically add footsteps on the page as the user scrolls down on the mini itinerary.
        The footsteps regenerate when the user scrolls up and the container is out of view so users can enjoy the animation again. 
      </p>

      <h4>Extras</h4>
      <ul>
        <li>Mobile Navigation In Javascript with clickable dropdowns that expand</li>
        <li>Underlining which navigation page the user is on in PHP</li>
        <li>Links are now clickable in mobile with effects similar when hovering over a link</li>
        <li>Added padding to paragraphs and headers to help with proximity</li>
        <li>For Mobile, hero image in About Us, Cairo, and Luxor is no longed fixed due to background sizing conflicts</li>
        <li>Changed bottom footsteps in Landmarks to be white so they're more seeable</li>
        <li>Added hr in Grading page to define sections clearly</li>
        <li>Media queries for Grading page</li>
        <li>Adjusted footer so each navigation section is the same width</li>
        <li>Added copyright in footer</li>
      </ul>
    </main>
<?php 
  require_once("assets/inc/footer.inc.php");
?>
