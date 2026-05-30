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
    **var:** Variables declared with var are hoisted to the top of their scope. This means you can use a var variable before it is declared in the code.
    **let:** Variables declared with let are also hoisted, but there is a key difference known as the "temporal dead zone." If you try to access a let variable before it is declared, you'll get a ReferenceError.

*   **Re-declaration:**
    **var:** You can re-declare a variable using var within the same scope without any error.
    **let:** You cannot re-declare a variable using let within the same scope. Attempting to do so will result in a SyntaxError.

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

### 15. What is temporal dead zone? 

**Answer:** The temporal dead zone (TDZ) is a specific period in the execution of JavaScript code where variables declared with let and const exist but cannot be accessed or assigned any value. During this phase, accessing or using the variable will result in a ReferenceError. TDZ prevent accidental early access.

### 16. What is JSON? 

**Answer:** JSON(Javascript Object Notation) is a light weight data interchange formate. JSON consists of Key value pairs.
