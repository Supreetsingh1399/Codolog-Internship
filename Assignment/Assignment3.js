// JavaScript Objects
// Title: Understanding JavaScript Objects

// Definition: In JavaScript, an object is a standalone entity, with properties and type. It's a collection of related data and/or functionality, which usually consists of several variables and functions, which are called properties and methods when inside objects. Objects in JavaScript are used to model real-world objects, giving them properties and behavior just like their real-world counterparts.

// Example Code:
// Defining an object
let book = {
    title: "The Hobbit",
    author: "J.R.R. Tolkien",
    publishedYear: 1937,
    isAvailable: true,
    // Method to display book info
    displayInfo: function() {
        console.log(`${this.title} by ${this.author}, published in ${this.publishedYear}.`);
    }
};

// Accessing properties
console.log(book.title); // Output: The Hobbit

// Calling a method
book.displayInfo(); // Output: The Hobbit by J.R.R. Tolkien, published in 1937.

// Adding a new property
book.genre = "Fantasy";

// Deleting a property
delete book.isAvailable;

// Checking if a property exists
console.log('genre' in book); // Output: true
console.log('isAvailable' in book); // Output: false
console.table(book);

// This example demonstrates how to define an object, access and modify its properties, define methods, and check for the existence of properties. Objects are a fundamental part of JavaScript and are used extensively in almost all JavaScript programs.