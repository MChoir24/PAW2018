var http = require("http");

var server = http.createServer (function(req, res)
{
	res.writeHead(200, {"Content-Type":"text/html"}); //add and HTTP header to display response as HTML
	res.write("Hello, World!");
	res.end();
});

server.listen(3000);