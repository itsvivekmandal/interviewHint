# Top Node Js Interview Questions and Answers 🚀

## 1. What is Node? 
```bash
Node.js is javascript runtime environment built on chrome`s v8 javascript engine that allow user to run javascript outside the browser. 

It is commonly used to build server-side applications, REST APIs, and real-time applications.

Node js uses a asynchronous event-driven architecture with non-blocking I/O primitives.
```

## 2. What is the difference between require and import in Node.js?
```bash
# require:
    1. CommonJS module syntax.
    2. Used in older Node.js versions or projects not using ES modules.
    3. Example: const fs = require('fs');

# import:
    1. ES module syntax (ECMAScript 2015+).
    2. Must enable "type": "module" in package.json or use .mjs file extension.
    3. Example: import fs from 'fs';

# CommonJS (CJS) Export
    CommonJS is the default module system in Node.js (before ES modules became widely adopted).
    Use module.exports or exports to export values.

    1. Exporting and importing
    
        const sum  = require('./addition');
        const multiplication = require('./multiplication');
        OR
        const {sum, multiplication} = require('./caculation');

        module.exports = sum; 
        OR
        module.exports = {sum, multiplication};

  # ES Modules (ESM) Export
        ES Modules follow the standardized export and import syntax.

        Enable ES modules in Node.js by adding "type": "module" in package.json or using .mjs file extension.

    1. Exporting and importing
    
        import sum  from './addition';
        import multiplication from './multiplication';
        OR
        import {sum, multiplication} from './caculation';

        export default sum; 
        OR
        export {sum, multiplication};

    # Key Differences Between CommonJS and ES Modules
        | Feature           | CommonJS                 | ES Modules                |
        |-------------------|--------------------------|---------------------------|
        | Syntax            | module.exports / exports | export / export default   |
        | Import Syntax     | require()                | import                    |
        | File Extensions   | .js                      | .js or .mjs               |
        | Default Export    | module.exports = value   | export default value      |
        | Named Export      | exports.name = value     | export const name = value |
```

## 3. Difference between Node.js and Express.js?
```bash
Node.js is a runtime built on Chrome`s V8 engine that lets us run JavaScript on the server, with built-in modules like http and fs. 

Express.js is a minimal web framework built on top of Node`s http module. It adds routing, middleware, and helpers for requests and responses, so we write far less boilerplate.

Node gives us the capability to build servers, Express makes building them fast and organized.
```  

## 4. What is event loop?
```bash
JavaScript runs on a single thread with one call stack. Async operations like timers, network calls, and I/O are handled by the runtime outside the stack. 

When they finish, their callbacks go into queues: promise callbacks into the microtask queue and timers/events/I/O into the macrotask queue. 

The event loop continuously checks if the call stack is empty. When it is, it runs all pending microtasks, then takes one macrotask and repeats.
```  
