// For mobile navigation bar 

// if the hamburger icon is selected 
// then add responsive to the topnav class, 
// else get rid of the responsive class
function toggleDropdown() {
    let x = document.querySelector("nav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }

// if a navigation with a drop down menu is clicked and show class is there
// then don't it and remove class
// else show it and add class
function toggleMiniDropdown(whichDropBtn) {
  let dropBtnNum = parseInt(whichDropBtn);
  let dropBtn = document.getElementsByClassName("dropBtn")[dropBtnNum];
  let links = dropBtn.nextElementSibling;
  if (links.className.includes("show")) {
    links.classList.remove("show");
  }
  else {
    links.className += " show";
  }
}