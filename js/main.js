const sqlite3 = require('sqlite3');
startup.all("SELECT * FROM customer", (error, rows) => {
  printQueryResults(rows);
});
