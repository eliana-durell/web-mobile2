//make sure the form has values in all required fields 
//if not throw an error
const submitButton = document.getElementById('submitButton');
submitButton.addEventListener('click', (e) => {
    let form = getFormFromEvent(e);
    if(!form) { //form doesn't exist
        return;
    }
    let failed = false;
    let errorType = "You must provide values for all the required fields";
    for(let i = 0; i<form.length; i++)
    {
        if(form[i].type === 'submit' || !form[i].required) //submit button or not required
        {
            continue;
        }
        form[i].classList.remove('formError');  //remove inital error in case there is no error in form
        if(!form[i].value) { //no value inputted
            form[i].classList.add("formError");
            failed = true;
        }
        if (form[i].name === "name") //name length validation
        {
            if(form[i].value.length > 30)
            {
                form[i].classList.add("formError");
                form[i].style.border = "solid 2px red";
                failed = true;
                errorType = "Name must be 30 characters or less";
            }
            else {
                form[i].style.border = "none";
            }
        }
    }

    const errorBox = document.getElementById("errorBox");
    if(failed) {
        errorBox.textContent = errorType;
        e.preventDefault();
    }
});

function getFormFromEvent(event) {
    let response = null; 
    if(!event) { //event doesn't exist
        return response;
    }
    response = event.target; //get element that triggered the event (the submit button)
    //traverse up the DOM tree until a form element is found
    while(response && response.tagName.toLowerCase() !=="form") { //response exists and the tagname doesn't = form
        response = response.parentNode;
    }
    return response; 
}
