# Top React Interview Questions and Answers 🚀

## 1. What is Ract? 
**Answer :** React is an open-source front-end JavaScript library that is used for building composable user interfaces, especially for single-page applications. It is used for handling view layer for web and mobile apps based on components in a declarative approach.

## 2. Why React is fast? 
**Answer :** React is fast because it utilizes a virtual DOM to efficiently update and render only the parts of the actual DOM that change, reducing unnecessary operations and improving performance.

## 3. What are the major features of React?? 
**Answer :** The major features of React are:
*   Uses JSX syntax, a syntax extension of JS that allows developers to write HTML in their JS code.
*   It uses Virtual DOM instead of Real DOM considering that Real DOM manipulations are expensive.
*   Supports server-side rendering which is useful for Search Engine Optimizations(SEO).
*   Follows Unidirectional or one-way data flow or data binding.
*   Uses reusable/composable UI components to develop the view.

## 4. What is JSX?
**Answer :** JSX stands for "JavaScript XML." It is a syntax extension for JavaScript that allows developers to write HTML-like code in their JavaScript files. JSX is most commonly associated with React, where it is used to define the structure of React components.

## 5. What is NPM?
**Answer :** NPM is a command-line tool used to manage packages for Node.js.

## 6. Does React update the entire Real DOM whenever state changes?
**Answer :** No. React renders the component to determine its next UI representation, reconciles it with the previous representation, and commits the necessary changes to the DOM. A component rendering again does not mean every DOM element is recreated.

## 7. What is reconciliation in React?
**Answer :** Reconciliation is the process React uses to compare the previous UI representation with the next one and determine how the UI should be updated.

React uses rules involving element types, tree position, and keys to determine whether elements can be reused or need to be replaced.

## 8. What is the purpose of key in React lists?
**Answer :** A key helps React identify items between renders so it can match list elements correctly when items are inserted, removed, or reordered.

## 9. What is the difference between Virtual DOM and Shadow DOM?
**Answer :** They solve different problems.
| Virtual DOM |	Shadow DOM |
| :--- | :--- |
| In-memory representation of UI | Browser feature for DOM encapsulation |
| Used by some UI frameworks, including React's rendering model	| Used by Web Components and other browser features |
| Helps determine UI updates | Helps isolate a component's DOM and styles |
| Not a browser standard API itself	| Standard browser API |

## 10. What is a React Component?
**Answer :** A React component is a reusable, independent piece of UI that defines how a part of the user interface should look and behave. Components are usually written as JavaScript functions that return JSX, which describes the UI.

There are two commonly discussed types:
```js
1. Functional Components 

    // These are JavaScript functions that return React elements or other supported renderable values.

    function Button() {
    return <button>Click me</button>;
    }

    // Modern React development primarily uses function components with Hooks when state or lifecycle-related behavior is needed.

2. Class Components

    // These are JavaScript classes that extend React.Component and implement a render() method.

    class Button extends React.Component {
        render() {
            return <button>Click me</button>;
        }
    }

    // Class components are still supported, but function components are generally preferred for new code.
```
## 11. What are props in React components?
**Answer :** Props (short for properties) are inputs passed from a parent component to a child component. They allow a component to display different data while reusing the same implementation.

```js
function User({ name }) {
  return <h2>Hello, {name}</h2>;
}

function App() {
  return (
    <>
      <User name="Vivek" />
      <User name="Rahul" />
    </>
  );
}
```

## 12. What is props?
**Answer :** In React, passing parameters or data from a parent component to a child component is called Props (Properties).

## 13. What is Props Drilling in React?
**Answer :** Props drilling is a process in React where data is passed from a parent component to a deeply nested child component through multiple intermediate components using props, even when those intermediate components do not need the data themselves.
```js
function App() {
  const name = "Vivek";

  return <Parent name={name} />;
}

function Parent({ name }) {
  // Parent doesn't use name itself.
  return <Child name={name} />;
}

function Child({ name }) {
  return <h1>Hello, {name}</h1>;
}
```

## 14. What are the disadvantages of props drilling?
**Answer :**
* ***Unnecessary prop passing :*** Intermediate components receive props they don't use.
* ***Maintenance difficulty :*** Changing the data flow can require updating multiple components.
* ***Reduced readability :*** It becomes harder to understand where data originates and where it is used.
* ***Tighter coupling :*** Intermediate components become involved in passing data they don't actually need.

Props drilling is not inherently bad. For a small component tree, passing props is often the simplest and clearest solution.

## 15. How can we avoid props drilling?
**Answer :** Common approaches include:
| Approach | When to use |
| :--- | :--- |
| React Context API	| Share data such as theme, authenticated user, or locale across a component tree |
| State management libraries | Manage complex shared state, such as with Redux or Zustand |
| Component composition	| Pass components as props or children to reduce the need for intermediate components to know about the data |