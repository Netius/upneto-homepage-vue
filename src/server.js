import express, { json } from "express";
import { fileURLToPath } from "url"; // Recreating __ name available when type is not equal to module - JS
import path from "path";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);


const app = express();
app.use(express.json()); // Middleware to get req body in json format
app.use(express.static(path.join(__dirname, '../dist')));


const PORT = process.env.PORT || 8000;

app.listen(PORT, () => {
  console.log("Server is listening on port" + PORT);
});