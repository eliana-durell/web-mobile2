//a
function jsStyle() { 
    // function to change style
    // Change the color and the size of the font
    // in the paragraph with id='text'
    textElement = document.getElementById('text');
    textElement.style.color = "pink";
    textElement.style.fontSize = "24px";
}

function moveTheText() {
    textElement = document.getElementById('text');
    let position = parseInt(textElement.style.left);
    if(isNaN(position))
    {
        position = 0;
    }
    else {
        position += 10;
    }
    textElement.style.left = position + 'px';
}

//b
function getFormValues() {
    // function to send first and last names
    // to an 'alert' message.
    firstName = document.getElementById("fname").value;
    lastName = document.getElementById("lname").value;
    alert("First name: " + firstName + " and Last name: " + lastName);
}

function howmany() {
    let form = document.getElementById("regForm");
    let children = form.childNodes;
    let inputCount = 0;
    let textInputCount = 0;
    for(let i = 0; i < children.length; i++)
    {
        if (children[i] instanceof HTMLInputElement) {
            inputCount++;
        }
        if (children[i].type == "text") {
            textInputCount++;
        }
    }
    console.log("Input count: ", inputCount);
    console.log("Text Input count: ", textInputCount);
}

//c
// function getOptions() {
// 	// function to display the number of options in an alert()
// 	childs = document.querySelectorAll("select option");
// 	num = childs.length;
// 	alert("Number of options: " + num);
// }
function colorchanger() {
    divHolder = document.getElementById('ex5C');
    colors = document.getElementById("mySelect");
    choseColor = colors.value; //automatically gets the option that is selected
    divHolder.style.backgroundColor = choseColor;
}

//d
//put a mouseover and a mouseout event on the p tag below
window.onload = load; //called after the window is done loading
// window.onload = load(); () immediately calls the function when the code is executed
//without the onmouseover="" and onmouseout=""
// function load(){
//     const textElement = document.getElementById("rb");
//     textElement.addEventListener('mouseover', mouseover);
//     textElement.addEventListener('mouseout', mouseout);
// }

//create a function that is called on the mouseover that turns the text red
function mouseover(){
    textElement = document.getElementById("rb");

    colors = document.getElementById("mySelect");
    choseColor = colors.value; //automatically gets the option that is selected
    textElement.style.color = choseColor;
}

//create a function that is called on the mouseout that turns the text black
function mouseout(){
    textElement = document.getElementById("rb");
    textElement.style.color = "black";
}
//e
// code two functions multiply and divide functions here
//hints:
//when you get a value out of an input, you are getting a string.  To get a number, use parseInt()
//When you want to output something into the HTML you can use .innerHTML - like document.getElementById("result").innerHTML= "fred";
function multiply() {
    value1 = parseInt(document.getElementById("firstoperand").value);
    value2 = parseInt(document.getElementById("secondoperand").value);
    result = document.getElementById("result");

    clearErrors();
    // result.innerHTML = null;
    result.textContent = "";

    let failed = false;
    if(isNaN(value1)) {
        addError("Please enter a valid number into the first input field.");
        failed = true;
    }
    if(isNaN(value2)) {
        addError("Please enter a valid number into the second input field.");
        failed = true;
    }
    if (failed) {
        return;
    }

    // result.innerHTML = value1 * value2;
    let multiplied = value1 * value2;
    newNode = document.createTextNode(multiplied);
    result.appendChild(newNode);
}
function divide(){
    value1 = parseInt(document.getElementById("firstoperand").value);
    value2 = parseInt(document.getElementById("secondoperand").value);
    result = document.getElementById("result");

    clearErrors();
    // result.innerHTML = null; 
    result.textContent = "";

    let failed = false;
    if(isNaN(value1)) {
        addError("Please enter a valid number into the first input field.");
        failed = true;
    }
    if(isNaN(value2)) {
        addError("Please enter a valid number into the second input field.");
        failed = true;
    }
    if (failed) {
        return;
    }

    // result.innerHTML = value1 / value2;
    let divided = value1 / value2;
    newNode = document.createTextNode(divided);
    result.appendChild(newNode);

}

function addError(errMsg) {
    let mathError = document.getElementsByClassName('mathError')[0]; //collection then get first element
    let errElement = document.createElement('p');
    errElement.appendChild(document.createTextNode(errMsg));
    mathError.appendChild(errElement);
}

function clearErrors() {
    let mathError = document.getElementsByClassName('mathError')[0]; 
    while(mathError.children.length > 0) {
        mathError.removeChild(mathError.children[0]);
    }
}
