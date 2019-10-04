var mysql = require("mysql");

var connection = mysql.createConnection(
{
	host: "localhost",
	user: "root",
	password: "",
	database: "jsdb"
});

connection.connect(function(err)
{
	if (err) throw err;
	console.log("database is connected!");
	var sql = "INSERT INTO customer (firstname, address, balance) VALUES ('Indah Wahyu Utami',"
	+"'Bojonegoro',1000000)";
	connection.query(sql, function(err, result)
	{
		if (err) throw err;
		console.log(result.affectedRows + " record inserted into customer table")
	});

});