# Top Javascript Interview Questions and Answers 🚀

## 1. What is DOM? 
**Answer:** The DOM represent the web page as a tree-like structure.

## 2. What is JavaScript? What is the role of javascript engine? 
**Answer:** 
* **JavaScript =>** JavaScript is a programming language that is used for converting the static web pages to interactive and dynamic web pages.

* **JavaScript Engine =>** A JavaScript Engine is a program present in web browser that executes javaScript code.

Eg. Chrome(V8), Firefox(Spider Monkey), Edge(Chakra), Safari (Javascript core)

## 3. What is client side and server side? 
**Answer:** 
* **Client Side =>** A client is a device, application or software component that requests and consumes services or resources from a server.

* **Server Side =>** A server side is a device, computer or software application that provides services, resources or functions to client.

## 4. What is Scope in Javascript? 
**Answer:** Scope determines where variables are defined and where they can be accessed.

There are three types of scope:
*   Global Scope
*   Functional Scope
*   Block Scope

## 5. Why Do We Need Scope?
**Answer:** Scope helps:

*   Prevent variable conflict
*   Protect data
*   Reduce memory usage
*   Control accessibility
*   Organize code

## 6. What is Lexical Scope? 
**Answer:** Lexical Scope (also known as Static Scope) is the convention where a function's scope is determined strictly by its physical location within the source code. In other words, a function's "outer environment" is defined at the moment the code is written, not when the function is called. This ensures that a function always has access to the variables that were in its environment at the time of its creation.

## 7. What is Scope Chain? 
**Answer:** The Scope Chain is a mechanism in JavaScript that determines how variables are looked up. When the code tries to access a variable, the engine first searches the local scope. If it is not found, it moves up to the outer function's scope, continuing this process until it reaches the global scope. This creates a "one-way street" where inner functions can access variables from their outer parents, but outer functions cannot access variables defined inside inner functions.

## 8. Types of variable? 
**Answer:** Var is the default variable in javaScript.

There three type of varibles:
*   Var
*   Let
*   Const

## 9. What is the difference between var and let? 
**Answer:** Differences:

*   **Scope:**
    **var:** Variables declared with var are function-scoped. This means they are only visible within the function where they are declared, and they are not block-scoped.
    **let:** Variables declared with let are block-scoped. They are only accessible within the block (a pair of curly braces {}) where they are defined, whether it's inside a function, loop, or any other block.

*   **Hoisting:**
    **var:** Variables declared with var are hoisted to the top of their scope. This means we can use a var variable before it is declared in the code.
    **let:** Variables declared with let are also hoisted, but there is a key difference known as the "temporal dead zone." If we try to access a let variable before it is declared, we'll get a ReferenceError.

*   **Re-declaration:**
    **var:** We can re-declare a variable using var within the same scope without any error.
    **let:** We cannot re-declare a variable using let within the same scope. Attempting to do so will result in a SyntaxError.

*   **Global Object Property:**
    **var:** Variables declared with var become properties of the global object (e.g., window in a browser environment).
    **let:** Variables declared with let do not become properties of the global object.

## 10. Why Does This Print 3 3 3?
```
for (var i = 0; i < 3; i++) {
    setTimeout(() => {
        console.log(i);
    }, 100);
}
```
**Answer:** Because:

*   var has single shared binding
*   loop finishes first
*   i becomes 3
*   all callbacks reference same i

## 11. Why Does let Fix It?
```
for (let i = 0; i < 3; i++) {
    setTimeout(() => {
        console.log(i);
    }, 100);
}
```
**Answer:** Because let creates New binding per iteration.
```
Internal Concept

Iteration 1:

i → 0

Iteration 2:

i → 1

Iteration 3:

i → 2

Each callback closes over different binding.
```

## 12. What is closure?
**Answer:** A Closure is a feature where an inner function retains access to the variables of its outer function even after the outer function has finished executing and has been removed from the call stack.
```
function greeting() {
    let message = 'Hi';

    return function sayHi(name) {
        console.log(`${message}, ${name}`);
    }
}

let hi = greeting();

hi('Vivek'); // still can access the message variable
```

## 13. Can Closures Cause Memory Leaks?
**Answer:** Yes. If closure keeps unnecessary large objects alive.
```
function test() {
    let hugeData = new Array(1000000);

    return function() {
        console.log("Hi");
    };
}

hugeData may remain in memory if closure retains lexical environment.
```

## 14. What is hoisting?
**Answer:** When the JavaScript engine executes the JavaScript code, it creates the global execution context.

The global execution context has two phases:

*   ***Creation***
*   ***Execution***

During the creation phase, the JavaScript engine moves the variable and function declarations to the top of our code. This is known as hoisting.
```
console.log(a); // undefined
var a = 5;

////////////////////

let x = 20,
  y = 10;

let result = add(x, y); 
console.log(result); // 👉 30

function add(a, b) {
  return a + b;
}
```

## 15. What is temporal dead zone? 
**Answer:** The temporal dead zone (TDZ) is a specific period in the execution of JavaScript code where variables declared with let and const exist but cannot be accessed or assigned any value. During this phase, accessing or using the variable will result in a ReferenceError. TDZ prevent accidental early access.

## 16. What is JSON? 
**Answer:** JSON(Javascript Object Notation) is a light weight data interchange formate. JSON consists of Key value pairs.

## 17. What is event loop?
**Answer:** JavaScript runs on a single thread with one call stack. Async operations like timers, network calls, and I/O are handled by the runtime outside the stack. 
When they finish, their callbacks go into queues: promise callbacks into the microtask queue and timers/events/I/O into the macrotask queue. 
The event loop continuously checks if the call stack is empty. When it is, it runs all pending microtasks, then takes one macrotask and repeats.

## 18. What is an Arrow Function in JavaScript?
**Answer:** An arrow function is a shorter syntax for writing functions in JavaScript, introduced in ES6 (ECMAScript 2015).

It provides a concise way to define functions and does not have its own this context. Instead, it inherits this from its surrounding lexical scope.

## 19. What is the difference between a Regular Function and an Arrow Function?
**Answer:** The main difference between a regular function and an arrow function is how they handle the this keyword, along with their syntax and constructor behavior.

| Feature | Regular Function | Arrow Function
| :--- | :--- | :--- |
| Syntax | Uses function keyword | Uses =>
| this | Depends on how the function is called | Inherits this from surrounding scope
| arguments | Has its own arguments object | Does not have its own
| Constructor | Can be used with new (if constructible) | Cannot be used with new
| Hoisting | Function declarations are hoisted | Depends on variable declaration; commonly not usable before initialization
| Use case | Object methods, constructors | Callbacks, array methods, concise functions
```js
// Example: Difference in this

const user = {
    name: "Vivek",

    regularFunction: function () {
        console.log(this.name);
    },

    arrowFunction: () => {
        console.log(this.name);
    }
};

user.regularFunction(); // Vivek
user.arrowFunction();   // undefined (in a typical non-module browser context)
```

## 20. What is a Callback Function in JavaScript?
**Answer:** A callback function is a function that is passed as an argument to another function and is executed by that function, usually after a particular operation or event.

Callbacks are commonly used in asynchronous programming, event handling, and array methods.

## 21. What is a Higher-Order Function in JavaScript?
**Answer:** A higher-order function is a function that either accepts another function as an argument or returns another function, or both.

Higher-order functions are commonly used in functional programming to improve code reusability and maintainability.

```js
// Common examples of built-in higher-order functions:
1. map()
2. filter()
3. reduce()
4. forEach()
5. setTimeout()
```

## 22. What is the difference between a Callback Function and a Higher-Order Function?
**Answer:** A callback function and a higher-order function are related concepts, but they describe different roles.

A callback is a function passed to another function as an argument, whereas a higher-order function is the function that accepts another function as an argument or returns a function.

## 23. What is a Pure Function in JavaScript?
**Answer:** A pure function is a function that always returns the same output for the same input and does not produce any side effects.

A pure function does not modify external variables, global state, or the original input data.
```js
// Example of a Pure Function:
function add(a, b) {
    return a + b;
}

console.log(add(10, 20)); // 30
console.log(add(10, 20)); // 30

For the same inputs, the function always returns the same output without modifying anything outside the function.

// Example of an Impure Function:
let total = 0;

function add(value) {
    total += value;
    return total;
}

console.log(add(10)); // 10
console.log(add(10)); // 20

This function is impure because it modifies the external variable total, and the output depends on its previous state.

// Benefits of Pure Functions:
1. Easy to test and debug.
2. Predictable output.
3. Easier code maintenance.
4. Useful in functional programming.
```

## 24. What is an IIFE in JavaScript?
**Answer:** IIFE stands for Immediately Invoked Function Expression.

It is a function expression that is defined and executed immediately after its creation.

IIFEs are commonly used to create a private scope, avoid polluting the global namespace, and encapsulate variables.
```js
(function () {
    const message = "Hello JavaScript";

    console.log(message);
})();
```

## 25. what is callback hell?
**Answer :** Callback hell is a situation in JavaScript where multiple asynchronous operations are nested inside one another through callbacks, making the code difficult to read, understand, debug, and maintain.

It commonly occurs when one asynchronous task depends on the result of another task, creating deeply nested callback functions.
```js

// Imagine you are building an application that needs to:
// 1. Fetch a user.
// 2. Fetch that user's orders.
// 3. Fetch the details of the first order.
// 4. Process the payment.
// Each operation depends on the previous operation's result.

getUser(userId, (user) => {
  getOrders(user.id, (orders) => {
    getOrderDetails(orders[0].id, (details) => {
      processPayment(details, (result) => {
        console.log("Payment successful", result);
      });
    });
  });
});
```

## 26. What is difference between map, filter and reduce?
**Answer :** In JavaScript, map(), filter(), and reduce() are higher-order array methods used to process array elements. They each accept a callback function, but they serve different purposes.
* **map()** transforms each element and returns a new array.
```js
const numbers = [1, 2, 3, 4, 5];

const result = numbers.map((num) => num * 2);

console.log(result);
// [2, 4, 6, 8, 10]
```
* **filter()** selects elements that satisfy a condition and returns a new array.
```js
const numbers = [1, 2, 3, 4, 5, 6];

const result = numbers.filter((num) => num % 2 === 0);

console.log(result);
// [2, 4, 6]
```
* **reduce()** processes elements to produce a single accumulated result, which can be a number, object, array, or another value.
```js
const numbers = [1, 2, 3, 4, 5];

const result = numbers.reduce((total, num) => {
  return total + num;
}, 0);

console.log(result);
// 15
```
## 27. What is a Promise?
**Answer :** A Promise is a JavaScript object that represents the eventual success or failure of an asynchronous operation.
```js
const promise = new Promise((resolve, reject) => {
  const success = true;

  if (success) {
    resolve("API call successful");
  } else {
    reject(new Error("API call failed"));
  }
});

promise
  .then((result) => console.log(result))
  .catch((error) => console.error(error.message));

// resolve() fulfills the Promise with a value.
// reject() rejects the Promise with a reason.
// .then() handles a fulfilled result.
// .catch() handles a rejection.
// .finally() runs after the Promise settles, whether fulfilled or rejected.
```

## 28. What is Promise.all()?
**Answer :** Promise.all() is a static method that takes an iterable of Promises and returns a single Promise.

It fulfills when all input Promises fulfill. If any input Promise rejects, the returned Promise rejects with that rejection reason.

## 29. What are async and await?
**Answer :** async and await are JavaScript keywords that make asynchronous code easier to write and read.
* **async** makes a function return a Promise.
* **await** pauses execution of the surrounding async function until the awaited Promise settles. It does not block the entire JavaScript thread.

## 30. What is hasOwn in JavaScript?
**Answer :** Object.hasOwn() checks whether a property exists directly on an object, excluding inherited properties. It is useful when working with object properties and prototypes.
```js
const parent = { role: "admin" };
const user = Object.create(parent);

user.name = "Vivek";

console.log(Object.hasOwn(user, "name")); // true
console.log(Object.hasOwn(user, "role")); // false
console.log("role" in user);              // true
```

## 31. What is the difference between setTimeout() and setInterval()?
**Answer :** Both are JavaScript timer functions, but they behave differently.
| Feature |	setTimeout() | setInterval() |
| :--- | :--- | :--- |
| Purpose |	Execute a callback once after a delay | Execute a callback repeatedly at intervals |
| Repetition |	Once | Repeatedly until cleared |
| Clear method | clearTimeout() | clearInterval() |
| Example use |	Delay a notification | Update a clock |

```js
// setTimeout and clearTimeout
const timer = setTimeout(() => {
  console.log("Hello, Vivek!");
}, 3000);

// Stop the timeout
clearTimeout(timer);


// SetInterval and clearInterval
const timer = setInterval(() => {
  console.log("Running...");
}, 1000);

// Stop the interval
clearInterval(timer);
```
## 32. What is the difference between for...in and for...of?
**Answer :** The key difference is:
* **for...in** iterates over enumerable property keys.
* **for...of** iterates over values provided by an iterable, such as an array or string.
```js
// for...in
const user = {
  name: "Vivek",
  age: 28,
  city: "Mumbai"
};

for (const key in user) {
  console.log(key);
}

// Output:
// name
// age
// city

// for...of
const colors = ["red", "green", "blue"];

for (const color of colors) {
  console.log(color);
}

// Output:
// red
// green
// blue
```
## 33. What is the difference between Spread Operator, Rest Operator and Rest Parameters?
**Answer :** All three use the same syntax: ... (three dots). Their purpose depends on where you use them.
* **Spread operator** — expands values
The spread operator expands an iterable, such as an array, or an object's enumerable properties into individual values or properties.
* **Rest operator in destructuring** — collect remaining values
Rest syntax can also collect the remaining elements or properties during array or object destructuring.
* **Rest parameters** — collect function arguments
Rest parameters collect multiple function arguments into a single array. They must be the last parameter in the function's parameter list.
```js
// Spread operator
// Spread with arrays
const numbers = [10, 20, 30];

console.log(...numbers);
// 10 20 30

// Copy an array
const copy = [...numbers];

console.log(copy);
// [10, 20, 30]

// Merge arrays
const moreNumbers = [...numbers, 40, 50];

console.log(moreNumbers);
// [10, 20, 30, 40, 50]

// Spread with objects
const user = { name: "Vivek", age: 28 };
const updatedUser = { ...user, city: "Mumbai" };

console.log(updatedUser);
// { name: "Vivek", age: 28, city: "Mumbai" }
//////////////////////////////////////////////////

// Rest operator
// Array destructuring
const numbers = [10, 20, 30, 40];

const [first, second, ...remaining] = numbers;

console.log(first);     // 10
console.log(second);    // 20
console.log(remaining); // [30, 40]
/////////////////////////////////////////////////////

// Rest parameters
function sum(...numbers) {
  return numbers.reduce((total, num) => total + num, 0);
}

console.log(sum(10, 20, 30));
// 60
```

Followup questions
Why does an arrow function not have its own this?

Can we use an arrow function as a constructor?

What is callback hell, and how can Promises solve it?

Why are map(), filter(), and reduce() called higher-order functions?

What is the difference between a pure function and an impure function?

Why were IIFEs commonly used before ES6 modules?

## 24. What is difference between spread operator, rest operator and rest parameters?
## 25. What is difference between map, filter and reduce?
## 26. What is callback function?
## 27. what is callback hell?
## 28. What is promise all?
## 29. How to get the error from promises?
## 30. If we are using promise.all and calling 3 apis if the second api failed then what will happen?
## 31. Inside a async function we have a for loop and we are calling api inside that loop then how it will behave? will it wait for response and just complete the loop and not wait for response?
## 32. What is hasOne in javascript?
## 33. What is async and await?
## 34. What is difference between setTimeout and setInterval?
## 35. How to clear or remove setInterval?
## 36. What is difference between for in and for of? 
## 37. is arrow function hoisted?



