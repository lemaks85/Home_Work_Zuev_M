const fs = require('fs');
const path = require('path');
const express = require('express');
const isToFile = path.join(__dirname, "ticPages.json");
const app = express();
const ticPage = [
        {
            "page": "/",
            "tic": 0
        },

        {
            "page": "/about",
            "tic": 0
        }];

fs.readFile('./ticPages.json', (err, data) => {
    if (err) {
        console.error('File not found ! To be create new file')
        const jsonData = JSON.stringify(ticPage, null, 2);
        fs.writeFile('ticPages.json', jsonData, (err) => {
        if (err) {
            console.error('Error writing file:', err);
        } else {
            console.log('JSON data has been written to data.json');
        }});
        return
    }
        console.log(data.toString());
})

fs.readFile(isToFile, "utf-8", (error, data) => {
    if (error) return console.log(error);
        let isToData = JSON.parse(data, "utf-8");
        isToData[1].tic += 1;
        console.log(isToData);
fs.writeFile(isToFile, JSON.stringify(isToData, null, 2), (error) => {
    if (error) return console.log(error);
        });
});














// const port = 3000;
// app.listen(port, () => {console.log('Server start');});




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