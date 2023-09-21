'use strict';
const http = require("http");


// Constants
const PORT = 3000;
const HOST = '0.0.0.0';

const server = http.createServer();

server.on("request", function (req, res) {
    res.writeHead(200, { "Content-Type": "text/plain" });
    res.write("Hello world");
    res.end();
});

server.listen(PORT, HOST);
console.log("server listen...");