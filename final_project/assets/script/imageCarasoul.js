// For Museum page

//for map pictures
const mapImages = [
    "assets/images/museumsHomePage/allMuseumMap.png", //mapImg
    "assets/images/museumsHomePage/egyptianMuseumMap.png",
    "assets/images/museumsHomePage/copticMuseumMap.png",
    "assets/images/museumsHomePage/nationalMuseumMap.png"
];

//create and add image to pictures container
function addImg(imgSrc) {
    // create and set picture src
    let image = document.createElement("img");
    image.setAttribute("src", imgSrc);
    // get path for map img
    let mapImg = document.getElementById("map-img");
    let path = mapImg.src;
    if(image.src == path) //compare absolute paths for it to work in mobile
    {
        image.style.filter = "none"; //if map img then don't blur img in small row
    }
    else {
        image.style.filter = "blur(1px)";  //if not map img then blur img in small row
    }
    // add created image to the row
    image.classList.add("picture");
    document.getElementById("pictures-container").appendChild(image);

    // if a user clicks on one of the small images in the row then make it the big image (map img)
    image.onclick = function() {
        let element = document.getElementById("map-img");
        element.setAttribute("src", imgSrc);
        // set all images that are not the map img to blur
        let picturesContainer = document.getElementById("pictures-container");
        let picturesList = picturesContainer.children;
        for(let i = 0; i< picturesList.length; i++) {
            if(image != picturesList[i])
            {
                picturesList[i].style.filter = "blur(1px)"; //not map img
            }
            else {
                picturesList[i].style.filter = "none"; //map img
            }
        }
    }
}
// add all images in mapImages to the picture container (the little images in the row)
function addAllPics() {
    for(let i = 0; i< mapImages.length; i++)
    {
        addImg(mapImages[i]);
    }
}
addAllPics();

//for egyptian museum
const imgSelection = [
    "assets/images/egyptianMuseum/museum.jpg",
    "assets/images/egyptianMuseum/blackHyro.jpg",
    "assets/images/egyptianMuseum/coffin.jpg",
    "assets/images/egyptianMuseum/family.jpg",
    "assets/images/egyptianMuseum/lady.jpg",
    "assets/images/egyptianMuseum/marble.jpg",
    "assets/images/egyptianMuseum/spotlightHead.jpg",
    "assets/images/egyptianMuseum/vases.jpg"
];
let currIdx = 0;
// rotate through imgSelection and update the current shown image's source
function leftButton(){
    let image = document.getElementById('egypt-img');
    if (currIdx == 0) {
        currIdx = imgSelection.length-1;
    }
    else{
        currIdx--;
    }
    image.src = imgSelection[currIdx];
}
// rotate through imgSelection and update the current shown image's source
function rightButton() {
    let image = document.getElementById('egypt-img');
    if(currIdx == imgSelection.length-1) {
        currIdx = 0;
    }
    else
    {
        currIdx++;
    }
    image.src = imgSelection[currIdx];
}

//for coptic museum
const imgArr = [
    "assets/images/copticMuseum/name.jpg",
    "assets/images/copticMuseum/ceiling.jpg",
    "assets/images/copticMuseum/oct.jpg",
    "assets/images/copticMuseum/octTop.jpg",
    "assets/images/copticMuseum/chairs.jpg",
    "assets/images/copticMuseum/colorGlass.jpg",
    "assets/images/copticMuseum/columnTop.jpg",
    "assets/images/copticMuseum/columnShell.jpg",
    "assets/images/copticMuseum/cross.jpg",
    "assets/images/copticMuseum/oldBooks.jpg",
    "assets/images/copticMuseum/outside.jpg"
];
let mainIdx = 0;
let leftIdx = imgArr.length - 1;
let rightIdx = 1;
// rotate images and show the immediate left and right images as well
// move right mainIdx increases
//  move left it decreases
function leftImgButton(){
    let mainImg = document.getElementById('mainImg');
    let leftImg = document.getElementById('smallImgLeft');
    let rightImg = document.getElementById('smallImgRight');
    
    mainIdx = (mainIdx - 1 + imgArr.length) % imgArr.length;
    leftIdx = (mainIdx - 1 + imgArr.length) % imgArr.length;
    rightIdx = (mainIdx + 1) % imgArr.length;

    mainImg.src = imgArr[mainIdx];
    leftImg.src = imgArr[leftIdx];
    rightImg.src =imgArr[rightIdx];
}

function rightImgButton(){
    let mainImg = document.getElementById('mainImg');
    let leftImg = document.getElementById('smallImgLeft');
    let rightImg = document.getElementById('smallImgRight');
    
    mainIdx = (mainIdx + 1) % imgArr.length;
    leftIdx = (mainIdx - 1 + imgArr.length) % imgArr.length;
    rightIdx = (mainIdx + 1) % imgArr.length;

    mainImg.src = imgArr[mainIdx];
    leftImg.src = imgArr[leftIdx];
    rightImg.src =imgArr[rightIdx];
}




