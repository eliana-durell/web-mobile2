let whichFoot = 0; //even = right foot, odd = left foot
let previousPos = 0;
let scrollStepSize = 50;
let element = document.getElementById('footsteps');

window.addEventListener("scroll", (e) => {
    let boxTop = element.getBoundingClientRect().top;

    let currentPos = window.scrollY;
    if(currentPos > previousPos) //make sure the user is scrolling down
    {
        if (currentPos-previousPos >= scrollStepSize) //to delay img generation, user must scroll a certain amount
        {
            if(window.innerHeight >= boxTop+50) //in container area - +50 for a delay so the user sees animation
            {
                let img = document.createElement("img");
                if(whichFoot % 2 == 0)
                {
                    img.src = "assets/images/landmarks/southRightFoot.png";
                    img.alt = "right foot";
                    img.className = "footstep";
                    img.style.padding = "2vh 0";
                }
                else {
                    img.src = "assets/images/landmarks/southLeftFoot.png";
                    img.alt = "left foot";
                    img.className = "footstep";
                }
                whichFoot++; //switch foot
                element.appendChild(img);
                previousPos = currentPos; //update 
            }
        }
    }
    else if (currentPos < previousPos && window.innerHeight < boxTop) //scrolling up and container is out of view
    {
        let elementsIn = element.querySelectorAll('*'); //get all elements in footsteps
        let numOfChildren = elementsIn.length;
        for(let i = numOfChildren-1; 0<i; i--)
        {
            let childElement = document.getElementsByClassName('footstep')[i];
            element.removeChild(childElement); //remove footsteps
        }
        whichFoot = 1; //reset
        previousPos = currentPos; //update 
    }
});

//setting the height of footsteps after the page loads 
window.addEventListener("load", () => {
    let homepage = document.querySelector(".itinerary-content-mini");
    let footsteps = document.getElementById("footsteps");
    footsteps.style.height = `${homepage.offsetHeight}px`;
  });
