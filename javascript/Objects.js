// 1. What is an object in JavaScript?
// An object in javascript is collection of key-value pairs, where keys are string or symbols and values can be any data types, including other objects or functions. Object allow you to store and organize related data.
//example - {name: "Vivek Mandal", age: 31}

// 2. How do you create an object in JavaScript?
// There are multiple ways to create an object:
// a. Using object literal syntax (most common)
const personUsingObejctLiteral = {name: "Vivek Mandal", age: 31};
// b. Using the new Object() constructor
const personUsingObjectConstructor = new Object();
personUsingObjectConstructor.name = "Vivek Mandal";
personUsingObjectConstructor.age = 31;
// c. Using a constructor function
function Person(name, age) {
  this.name = name;
  this.age = age;
}
const personUsingConstructorFunction = new Person("Vivek", 31);
// d.Using Object.create() (for prototype-based inheritance)
const person = Object.create({ name: "Vivek", age: 31 });

// 3. How do you access object property?
console.log(person.name); // using dot notation
console.log(person['age']); // using bracket notation





