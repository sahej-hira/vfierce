var express = require('express');
var bodyParser = require('body-parser');
var mongoose = require('mongoose'); 
var app = express();
var port = 3000;

app.use(bodyParser.urlencoded({ extended: true }));

mongoose.connect("mongodb+srv://gnotrapayal421:<U6Hp0dC6XMjLGFYO>@cluster2.siain0i.mongodb.net/?retryWrites=true&w=majority&appName=Cluster2", {
    useNewUrlParser: true,
    useUnifiedTopology: true
});

var db = mongoose.connection;

db.on('error', console.error.bind(console, 'connection error:'));


db.once('open', function() {
    console.log("MongoDB connection established successfully");
});


app.listen(port, function() {
    console.log("Server is running on port", port);
});




