const fs = require('fs');
const path = require('path');
const express = require('express');

const app = express();

























const port = 3000;
app.listen(port, () => {
    console.log('Server start');

});




// const uuid = require('uuid');
// const id = uuid.v4();

// const nameIn = require('./generatorNames');
// const nameId = nameIn.generateName();

// const http = require('http');
// const server = http.createServer((req, res) => {
//     if(req.url === '/') {
//         res.writeHead(200, {'Content-Type': 'text/html; charset=UTF-8'});
//         res.end(`<h1>Main page</h1> <a href="/about">To about</a> <h3>Visit ${countMain} </h3> <h3>Your password: ${id}</h3> <h3>Your name: ${nameId}</h3>`);
//         countMain++;
//     } else if (req.url === '/about'){
//         res.writeHead(200, {'Content-Type': 'text/html; charset=UTF-8'});
//         res.end(`<h1>About page</h1> <a href="/">To main</a> <h3>Visit ${countAbout}</h3> </h3> <h3>Your password: ${id}</h3> <h3>Your name: ${nameId}</h3>`);
//         countAbout++;
//     } else {
//         res.writeHead(404, {'Content-Type': 'text/html; charset=UTF-8'});
//         res.end(`<h1>Page not found 404</h1>`);
//     }
// });

// let countMain = 0;
// let countAbout = 0;
// server.listen('3000');