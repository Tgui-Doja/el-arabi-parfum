const express = require('express');
const bodyParser = require('body-parser');
const path = require('path');

const app = express();
const port = 3000;

// Middleware to parse the body of POST requests
app.use(bodyParser.urlencoded({ extended: true }));

// Serve static files from the "public" directory
app.use(express.static(path.join(__dirname, 'public')));

// Handle POST request for newsletter subscription
app.post('/subscribe', (req, res) => {
    const email = req.body.email;
    console.log(`Received subscription request for email: ${email}`);
    // Here you can add the email to your database or mailing list
    
    res.send('Thank you for subscribing!');
});

// Start the server
app.listen(port, () => {
    console.log(`Server is running on http://localhost:${port}`);
});
