import mysql from "mysql2/promise";
export const db = mysql.createPool({
  host:"localhost",
  user:"root",
  password:"",
  database:'docprofile'
});

try {
const connection = await db.getConnection();
console.log("database Connection success");
connection.release();  
} catch (err) {
  console.error("Not connected");
  process.exit(1);
}
