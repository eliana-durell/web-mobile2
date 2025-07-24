//a
function jsStyle() { 
    // function to change style
    // Change the color and the size of the font
    // in the paragraph with id='text'
    textElement = document.getElementById('text');
    textElement.style.color = "pink";
    textElement.style.fontSize = "24px";
}
//b
function getFormValues() {
    // function to send first and last names
    // to an 'alert' message.
    firstName = document.getElementById("fname").value;
    lastName = document.getElementById("lname").value;
    alert("First name: " + firstName + " and Last name: " + lastName);
}
//c
function getOptions() {
	// function to display the number of options in an alert()
	childs = document.querySelectorAll("select option");
	num = childs.length;
	alert("Number of options: " + num);
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
    textElement.style.color = "red";
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
    result.innerHTML = null;

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

    result.innerHTML = value1 * value2;
}
function divide(){
    value1 = parseInt(document.getElementById("firstoperand").value);
    value2 = parseInt(document.getElementById("secondoperand").value);
    result = document.getElementById("result");

    clearErrors();
    result.innerHTML = null;

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

    result.innerHTML = value1 / value2;
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
