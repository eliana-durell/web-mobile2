// maps
const mapImages = [
    "assets/images/museumsHomePage/allMuseumMap.png", //main
    "assets/images/museumsHomePage/egyptianMuseumMap.png",
    "assets/images/museumsHomePage/copticMuseumMap.png",
    "assets/images/museumsHomePage/nationalMuseumMap.png"
];


function addImg(imgSrc) {
    let image = document.createElement("img");
    image.setAttribute("src", imgSrc);
    image.classList.add("picture");
    document.getElementById("pictures-container").appendChild(image);

    image.onclick = function() {
        document.getElementById("map-img").setAttribute("src", imgSrc);
    }
}

function addAllPics() {
    for(let i = 0; i< mapImages.length; i++)
    {
        addImg(mapImages[i]);
    }
}
addAllPics();

//egyptian
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

//coptic
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




