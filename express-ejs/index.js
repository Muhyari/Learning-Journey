const path = require("path");
const express = require("express");
const tagData = require("./data.json");
const app = express();

app.set("view engine", "ejs");
app.set("views", path.join(__dirname, "/views"));

app.get("/", (req, res) => {
	res.render("home.ejs");
});

app.get("/t/:tags", (req, res) => {
	const { tags } = req.params;
	const data = tagData[tags];

	if (!data) {
		res.render("notfound.ejs", { tags });
	}
	res.render("tags.ejs", { data });
});

app.get("/cat", (req, res) => {
	const catName = [
		"Whiskers",
		"Luna",
		"Oliver",
		"Bella",
		"Milo",
		"Daisy",
		"Leo",
		"Lucy",
		"Max",
		"Lily",
	];
	res.render("cat", { Cat: catName });
});

app.use(express.static(path.join(__dirname, "/public")))

app.listen(8000, () => {
	console.log("Server is running in http://localhost:8000");
});
