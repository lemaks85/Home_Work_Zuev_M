const fs = require('fs');
const path = require('path');
const handlebars = require('handlebars')
const express = require('express');
const { engine} = require('express-handlebars');
const { title } = require('process');
const app = express();

app.engine('handlebars', engine());
app.set('view engine', 'handlebars');
app.set('views', './views');


const articles = [
    {title: 'Article 1', description: 'First awesome article'},
    {title: 'Article 2', description: 'Secoond awesome article'},
    {title: 'Article 3', description: 'Third awesome article'},
];

app.get('/', (req, res) => {
    res.render('home', {layout: 'main', title: 'Home', articles});
})

app.listen(3000);


// app.get('/',(req, res) => {
//     const pathToTemplate = path.join(
//         __dirname,
//         '/templates/home.handlebars'
//     );

//     fs.readFile(pathToTemplate,'utf-8', (err, data) => {
//         if (err) {
//             res.status(500);
//             res.send(err.message);
//         } else {
//             const template = handlebars.compile(data);
//             res.send(template({articles}));
//         }
//     })
// })

