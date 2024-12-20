# Top Node Js Interview Questions and Answers 🚀

##  What is Node? 

Node Js is an open-source and cross-platform javascript runtime environment that allow user to run javascript outside the browser. It is used to create server side web application such as traditional websites and backend API services. Node js runs the v8 javascript engine which is core of google chrome outside the browser.
Node js uses a asynchronous event-driven architecture with non-blocking I/O primitives.

## What is the difference between require and import in Node.js?

*require:*
  1. CommonJS module syntax.
  2. Used in older Node.js versions or projects not using ES modules.
  3. Example: const fs = require('fs');
*import:*
  1. ES module syntax (ECMAScript 2015+).
  2. Must enable "type": "module" in package.json or use .mjs file extension.
  3. Example: import fs from 'fs';

*export example using both*
  #### CommonJS (CJS) Export
  CommonJS is the default module system in Node.js (before ES modules became widely adopted).
  Use module.exports or exports to export values.

  1. Exporting and importing a single value:
  
  ```js
  // utils.js
  module.exports = function add(a, b) {
      return a + b;
  };
  ```
  Importing:
  ```js
  const add = require('./utils');
  console.log(add(2, 3)); // 5
  ```
  
