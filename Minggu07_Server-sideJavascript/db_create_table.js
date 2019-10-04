var mysql = require("mysql");

var connection = mysql.createConnection(
{
	host: "localhost",
	user: "root",
	password: "",
	database: "jsdb"
});

connection.connect(function(err) {
	if (err) throw err;
	console.log("Database is connected!");
	var sql = "CREATE TABLE IF NOT EXISTS customer (customerID INT(6)"+
	" NOT NULL AUTO_INCREMENT , firstname VARCHAR(45) NOT NULL, address"+
	" VARCHAR(256) NULL, PRIMARY KEY (customerID))";
	connection.query(sql, function(err, result){
		if(err) throw err;
		console.log("customer table is created");
	})
})