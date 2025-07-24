function getComments(articleId) {
    http = new XMLHttpRequest();           // Create the object
    http.open( "POST", "./data/comments.php", true );   // Set up the request. Arguments are: GET/POST, file, true if asynchronous
    http.onreadystatechange = handleResponse;     // Callback function that is called when the response is received

    //http.send( null );                         // Start the process (send null for GETs; data for POSTs)
    http.send({
        "id": id,
        "name": from,
        "comment": message,
        "time": date
    });
}

function handleResponse(response) {
    if (http.readyState == 4) {                                 // Make sure the response is complete (all done)
        if ( http.status >= 200 && http.status <= 299 ) {       // Make sure the response is good (a valid page)
            console.dir( response.target.response );                            // Or do something meaningful here
        }
    }
}
// Taken from exercise in class