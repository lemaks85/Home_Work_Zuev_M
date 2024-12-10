
```js
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

app.get('/', (req, res) => {
    fs.readFile(isToFile, "utf-8", (error, data) => {
        if (error) return console.log(error);
            let isToData = JSON.parse(data, "utf-8");
            isToData[0].tic += 1;
            console.log(isToData);
    fs.writeFile(isToFile, JSON.stringify(isToData, null, 2), (error) => {
        if (error) return console.log(error);
    });
        res.send(`
        <h1>Main page</h1>
        <p>View ${isToData[0].tic}</p>
        <a href="/about">To about page</a>
        `);
    });
});

app.get('/about', (req, res) => {
    fs.readFile(isToFile, "utf-8", (error, data) => {
        if (error) return console.log(error);
            let isToData = JSON.parse(data, "utf-8");
            isToData[1].tic += 1;
            console.log(isToData);
    fs.writeFile(isToFile, JSON.stringify(isToData, null, 2), (error) => {
        if (error) return console.log(error);
    });
        res.send(`
        <h1>About page</h1>
        <p>View ${isToData[1].tic}</p>
        <a href="/">To main page</a>
        `);
    });
});

const port = 3000;
app.listen(port, () => {console.log('Server start');});
```



