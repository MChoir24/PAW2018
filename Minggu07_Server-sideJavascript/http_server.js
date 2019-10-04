//include HTTP module
var http = require('http');

//create a server object:
var server = http.createServer(function(req, res)
{
	res.write("Hello, World!");
	res.end();
})

server.listen(3000);