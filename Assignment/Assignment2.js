// Evolution of JavaScript
// JavaScript, often abbreviated as JS, is a high-level, interpreted programming language that conforms to the ECMAScript specification. It was initially created by Brendan Eich in 1995 and has evolved significantly over the years.

// JavaScript in the 1990s: Birth and Early Years
// JavaScript was first developed by Brendan Eich in 1995 while he was an engineer at Netscape. The language was originally named Mocha, but was quickly renamed to LiveScript, and finally to JavaScript.

// Early JavaScript was not as powerful as it is today. It was primarily used for simple tasks on web pages, like form validation.
// Example of early JavaScript for form validation
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
// JavaScript in the 2000s: AJAX and jQuery
// In the early 2000s, JavaScript started to become more powerful and useful. The introduction of AJAX allowed JavaScript to communicate with a server and update parts of a web page without reloading the whole page.

// jQuery, a fast, small, and feature-rich JavaScript library, was released in 2006. It made things like HTML document traversal and manipulation, event handling, and animation much simpler with an easy-to-use API that works across a multitude of browsers.
// Example of using jQuery for AJAX
$.ajax({
    url: "test.html",
    context: document.body
}).done(function() {
    $(this).addClass("done");
});
// JavaScript in the 2010s: Node.js and Modern Frameworks
// In 2009, Ryan Dahl released Node.js, a runtime environment that allows JavaScript to run on the server side. This was a major milestone in the evolution of JavaScript, as it expanded the capabilities of the language beyond just client-side scripting.

// The 2010s also saw the rise of modern JavaScript frameworks like AngularJS, React, and Vue.js, which have made it easier to build complex, interactive web applications.
// Example of a simple Node.js server
const http = require('http');

const server = http.createServer((req, res) => {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    res.end('Hello World\n');
});

server.listen(3000, '127.0.0.1', () => {
    console.log('Server running at http://127.0.0.1:3000/');
});
// JavaScript Today
// Today, JavaScript is one of the most popular and widely used programming languages in the world. It's used for a wide range of applications, from web and mobile app development, to server-side programming, and even for building desktop applications. With the ongoing development of the ECMAScript standard and the rise of new frameworks and tools, the future of JavaScript looks bright.