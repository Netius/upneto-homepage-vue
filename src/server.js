const express = require('express');
const path = require("path");

const app = express();

app.use(express.static(path.join(__dirname, '../dist')));

const PORT = process.env.PORT || 8000;

app.listen(PORT, () => {
  console.log("Server is listening on port " + PORT);
});