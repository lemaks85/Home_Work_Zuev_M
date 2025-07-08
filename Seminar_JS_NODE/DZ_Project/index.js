const express = require('express');
const path = require('path');
const fs = require('fs');
const joi = require('joi');
const app = express();
const usersListPath = path.join(__dirname, 'users.json');
app.use(express.json());
let uniqueID = 0;

const usersDB = joi.object({
    firstName: joi.string().min(2).required(),
    secondName: joi.string().min(2).required(),
    age: joi.number().min(0).required(),
    city: joi.string().min(2)
})

// VIEW ALL users JSON
app.get('/users', (req, res) => {
    const usersJson = fs.readFileSync(usersListPath, 'utf-8');
    const usersData = JSON.parse(usersJson);
    res.send({ users: usersData });
});


// VIEW ID user for  JSON
app.get('/users/:id', (req, res) => {
    const usersJson = fs.readFileSync(usersListPath, 'utf-8');
    const usersData = JSON.parse(usersJson);
    const user = usersData.find((user) => user.id === Number( req.params.id));
    if (user) {
        res.send({ user });
    } else {
        res.status(404);
        res.send({ user: null, message: 'User dot search' });
    }
});


// CREATE users for body JSON
app.post('/users', (req, res) => {
    const validateData = usersDB.validate(req.body);
    if (validateData.error) {
        return res.status(400).send({ error: validateData.error.details })
    };
    const usersJson = fs.readFileSync(usersListPath, 'utf-8');
    const usersData = JSON.parse(usersJson);
    uniqueID += 1;
    usersData.push({
        id: uniqueID,
        ...req.body
    });
    fs.writeFileSync(usersListPath, JSON.stringify(usersData));
    res.send({
        id: uniqueID,
    });
});


// UPLOAD user
app.put('/users/:id', (req, res) => {
    const validateData = usersDB.validate(req.body);
    if (validateData.error) {
        return res.status(400).send({ error: validateData.error.details })
    };
    const usersJson = fs.readFileSync(usersListPath, 'utf-8');
    const usersData = JSON.parse(usersJson);
    const user = usersData.find((user) => user.id === Number(req.params.id));
    if (user) {
        user.firstName = req.body.firstName;
        user.secondName = req.body.secondName;
        user.age = req.body.age;
        user.city = req.body.city;
        fs.writeFileSync(usersListPath, JSON.stringify(usersData));
        res.send({ user });
    } else {
        res.status(404);
        res.send({ user: null, message: 'User dot search' });
    }
});


// DELETE user for ID
app.delete('/users/:id', (req, res) => {
    const usersJson = fs.readFileSync(usersListPath, 'utf-8');
    const usersData = JSON.parse(usersJson);
    const usersIndex = usersData.findIndex((user) => user.id === Number(req.params.id));
    if (usersIndex > -1) {
        usersData.splice(usersIndex, 1);
        fs.writeFileSync(usersListPath, JSON.stringify(usersData));
        res.send({ message: 'User accept ' });
    } else {
        res.status(404);
        res.send({ message: 'User dot search' });
    }
});


app.use((req, res) => {
    res.status(404). send({
        message: 'URL not found!'
    })
});

const port = 3000;
app.listen(port, () => {console.log('Server start');});