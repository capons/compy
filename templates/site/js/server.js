/**
 * Created by Александр on 22.09.2015.
 */

/*var http = require('http');
const PORT = 8080;

function handleRequest(request, response){
    response.end('Works! ' + request.url);
}

var server = http.createServer(handleRequest);

server.listen(PORT, function(){
    console.log('Server is listening ' + PORT);
});*/


var express = require('express');
var bodyParser = require('body-parser');
var app = express();
app.use(bodyParser.urlencoded({ extended: true}));

app.post("/myaction", function(request, response){
    //response.send('You sent the name ' + request.body.name);
    var obj = {};
    console.log('body: ' + JSON.stringify(request.body));
    response.send(request.body);
});

app.listen(63342, function(){
    console.log('Server is running at http:localhost:63342');
});