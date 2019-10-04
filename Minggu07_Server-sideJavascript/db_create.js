var mysql = require("mysql");

var connection = mysql.createConnection(
{
	host: "localhost",
	user: "root",
	password: ""
});

connection.connect(function(err)
{
	if (err) throw err;
	console.log("Database is connected!");
	connection.query("CREATE DATABASE IF NOT EXISTS jsdb", function(err, result) {
		if (err) throw err;
		console.log("jsdb Database is created");
	});
});