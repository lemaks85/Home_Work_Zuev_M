const http = require('http');
const server = http.createServer((req, res) => {

    if(req.url === '/') {
        res.writeHead(200, {'Content-Type': 'text/html; charset=UTF-8'});
        res.end(`<h1>Main page</h1> <a href="/about">To about</a>`);
    } else if (req.url === '/about'){
        res.writeHead(200, {'Content-Type': 'text/html; charset=UTF-8'});
        res.end(`<h1>About page</h1> <a href="/">To main</a>`);
    } else {
        res.writeHead(404, {'Content-Type': 'text/html; charset=UTF-8'});
        res.end(`<h1>Page not found 404</h1>`);
    }
});

server.listen('3000');