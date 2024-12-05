const http = require('http');
const server = http.createServer((req, res) => {

    if(req.url === '/') {
        res.writeHead(200, {'Content-Type': 'text/html; charset=UTF-8'});
        res.end(
            `<h1>Main_page</h1>
            <a href="/about">To about</a>'
        );
    } else if (req.url === '/about'){
     }


})