# Top Javascript Interview Questions and Answers 🚀

### 1. What is DOM? 

**Answer:** The DOM represent the web page as a tree-like structure.

### 2. What is JavaScript? What is the role of javascript engine? 

**Answer:** 
**JavaScript =>** JavaScript is a programming language that is used for converting the static web pages to interactive and dynamic web pages.

**JavaScript Engine =>** A JavaScript Engine is a program present in web browser that executes javaScript code.

Eg. Chrome(V8), Firefox(Spider Monkey), Edge(Chakra), Safari (Javascript core)

### 3. What is client side and server side? 

**Answer:** 
**Client Side =>** A client is a device, application or software component that requests and consumes services or resources from a server.

**Server Side =>** A server side is a device, computer or software application that provides services, resources or functions to client.

### 4. What is Scope in Javascript? 

**Answer:** Scope determines where variables are defined and where they can be accessed.

There are three types of scope:
*   Global Scope
*   Functional Scope
*   Block Scope

### 5. Why Do We Need Scope?

**Answer:** Scope helps:

*   Prevent variable conflict
*   Protect data
*   Reduce memory usage
*   Control accessibility
*   Organize code

### 6. What is Lexical Scope? 

**Answer:** Lexical Scope (also known as Static Scope) is the convention where a function's scope is determined strictly by its physical location within the source code. In other words, a function's "outer environment" is defined at the moment the code is written, not when the function is called. This ensures that a function always has access to the variables that were in its environment at the time of its creation.

### 7. What is Scope Chain? 

**Answer:** The Scope Chain is a mechanism in JavaScript that determines how variables are looked up. When the code tries to access a variable, the engine first searches the local scope. If it is not found, it moves up to the outer function's scope, continuing this process until it reaches the global scope. This creates a "one-way street" where inner functions can access variables from their outer parents, but outer functions cannot access variables defined inside inner functions.

### 8. Types of variable? 

**Answer:** Var is the default variable in javaScript.

There three type of varibles:
*   Var
*   Let
*   Const

### 9. What is the difference between var and let? 

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

### 10. Why Does This Print 3 3 3?
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

### 11. Why Does let Fix It?
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

### 12. What is closure?

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

### 13. Can Closures Cause Memory Leaks?

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

### 14. What is hoisting?

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

### 15. What is temporal dead zone? 

**Answer:** The temporal dead zone (TDZ) is a specific period in the execution of JavaScript code where variables declared with let and const exist but cannot be accessed or assigned any value. During this phase, accessing or using the variable will result in a ReferenceError. TDZ prevent accidental early access.

### 16. What is JSON? 

**Answer:** JSON(Javascript Object Notation) is a light weight data interchange formate. JSON consists of Key value pairs.

### 17. What is event loop?
**Answer:** JavaScript runs on a single thread with one call stack. Async operations like timers, network calls, and I/O are handled by the runtime outside the stack. 
When they finish, their callbacks go into queues: promise callbacks into the microtask queue and timers/events/I/O into the macrotask queue. 
The event loop continuously checks if the call stack is empty. When it is, it runs all pending microtasks, then takes one macrotask and repeats.

### 18. What is an Arrow Function in JavaScript?
**Answer:** An arrow function is a shorter syntax for writing functions in JavaScript, introduced in ES6 (ECMAScript 2015).

It provides a concise way to define functions and does not have its own this context. Instead, it inherits this from its surrounding lexical scope.

### 19. What is the difference between a Regular Function and an Arrow Function?
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

### 20. What is a Callback Function in JavaScript?
**Answer:** A callback function is a function that is passed as an argument to another function and is executed by that function, usually after a particular operation or event.

Callbacks are commonly used in asynchronous programming, event handling, and array methods.

### 21. What is a Higher-Order Function in JavaScript?
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

### 22. What is the difference between a Callback Function and a Higher-Order Function?
**Answer:** A callback function and a higher-order function are related concepts, but they describe different roles.

A callback is a function passed to another function as an argument, whereas a higher-order function is the function that accepts another function as an argument or returns a function.

### 23. What is a Pure Function in JavaScript?
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

### 24. What is an IIFE in JavaScript?
**Answer:** IIFE stands for Immediately Invoked Function Expression.

It is a function expression that is defined and executed immediately after its creation.

IIFEs are commonly used to create a private scope, avoid polluting the global namespace, and encapsulate variables.
```js
(function () {
    const message = "Hello JavaScript";

    console.log(message);
})();
```

Followup questions
Why does an arrow function not have its own this?

Can we use an arrow function as a constructor?

What is callback hell, and how can Promises solve it?

Why are map(), filter(), and reduce() called higher-order functions?

What is the difference between a pure function and an impure function?

Why were IIFEs commonly used before ES6 modules?
### 24. What is an IIFE in JavaScript?


