// db.js
const mysql = require("mysql2");

// Database connection details
const db = mysql.createConnection({
  host: "database-1.c5u8ksk2gp91.ap-south-1.rds.amazonaws.com",
  user: "admin",
  password: "1234tanu",
  port: "3306",
  database: "user2",
});

db.connect((err) => {
  if (err) {
    console.error("Database connection failed:", err.stack);
    return;
  }
  console.log("Connected to the database.");
});

module.exports = db;
