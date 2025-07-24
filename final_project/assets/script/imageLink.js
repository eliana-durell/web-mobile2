// for Cairo and Luxor Home pages 
// link effects but on images

function imgHover(idName) {
    document.getElementById(idName).style.border = "black 5px solid";
}

function imgUnhover(idName) {
    document.getElementById(idName).style.border = "transparent 5px solid";
}

function imgClick(idName) {
    document.getElementById(idName).style.border = "white 5px solid";
}