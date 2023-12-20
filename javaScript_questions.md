# Top JavaScript Interview Questions and Answers 🚀

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
*   Block or Scope

### 5. What is Scope Chain? 

**Answer:** Scope chaining is the mechanism in which the JavaScript interpreter looks for variables in nested scopes, starting from the innermost scope and going up to the outer scopes until it finds the variable.

### 6. Types of variable? 

**Answer:** Var is the default variable in javaScript.

There three type of varibles:
*   Var
*   Let
*   Const

### 7. What is the difference between var and let? 

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

### 8. What is Hoisting? 

**Answer:** Hoisting is a javascript behaviour where functions and variables declarations are moved to the top of their respective scopes during the complation phase.

### 9. What is temporal dead zone? 

**Answer:** The temporal dead zone (TDZ) is a specific period in the execution of JavaScript code where variables declared with let and const exist but cannot be accessed or assigned any value. During this phase, accessing or using the variable will result in a ReferenceError .

### 10. What is JSON? 

**Answer:** JSON(Javascript Object Notation) is a light weight data interchange formate. JSON consists of Key value pairs.
