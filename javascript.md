# Top Javascript Interview Questions and Answers 🚀

### 1. what is Lexical Scope? 

**Answer:** Lexical Scope (also known as Static Scope) is the convention where a function's scope is determined strictly by its physical location within the source code. In other words, a function's "outer environment" is defined at the moment the code is written, not when the function is called. This ensures that a function always has access to the variables that were in its environment at the time of its creation.

### 2. What is Scope Chain? 

**Answer:** The Scope Chain is a mechanism in JavaScript that determines how variables are looked up. When the code tries to access a variable, the engine first searches the local scope. If it is not found, it moves up to the outer function's scope, continuing this process until it reaches the global scope. This creates a "one-way street" where inner functions can access variables from their outer parents, but outer functions cannot access variables defined inside inner functions.

### 3. What is closure?

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

### 3. What is hoisting?

**Answer:** When the JavaScript engine executes the JavaScript code, it creates the global execution context.

The global execution context has two phases:

*   ***Creation***
*   ***Execution***

During the creation phase, the JavaScript engine moves the variable and function declarations to the top of your code. This is known as hoisting.
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
