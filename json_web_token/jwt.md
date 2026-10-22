# JWT Interview Questions and Answers 🚀

## 1. What is JWT?
**Answer :** JWT stands for JSON WEB TOKEN. 
It is a standard method for securely transmitting information between parties as a JSON object.

It looks like a long, random string of text separated by dots.
eg. xxxxx.yyyyy.zzzzz

It consist of three parts which are:

**1. Header :** Contains metadata about the token, such as the signing algorithm used (e.g., HS256) and the token type (JWT).

**2. Payload :** Contains the actual data you want to pass around, such as user ID, role, expiration time (exp), and issued-at time (iat).

**3. Signature :** Created by taking the encoded header, encoded payload, a secret key (or private key), and applying the algorithm specified in the header.

## 2. What is the Key Benefits of JWTs?
**Answer :**

**1. Statelessness :** The server doesn`t need to keep a session store in memory or a database lookup table for every logged-in user. All the context needed is right inside the token payload.

**2. Performance :** Because validation is cryptographic and stateless, it scales easily across multiple server clusters or microservices.

**3. Compact Size :** They are small enough to be sent via HTTP headers, URL parameters, or POST bodies.

## 3. Where Should You ACTUALLY Store JWT Tokens?
**Answer :** We can store jwt tokens in session or local storage.
But if we store it in local or session storage then any Cross-Site Scripting (XSS) attack or malicious npm package can read and steal the token.

So, the standard is a Hybrid Approach
* Store your short-lived Access Token in-memory using JavaScript application state.
* Store your long-lived Refresh Token in an httpOnly cookie.
```js
res.cookie('refreshToken', refreshToken, {
  httpOnly: true, // Prevents client-side JS from reading the cookie (protects against XSS)
  secure: true,   // Ensures cookie is sent ONLY over HTTPS (set to false in local dev)
  sameSite: 'strict', // Protects against Cross-Site Request Forgery (CSRF)
  path: '/api/refresh-token', // Limits cookie transmission exclusively to the refresh route
  maxAge: 7 * 24 * 60 * 60 * 1000 // 7 days expiration
});
```

## 4. What is the best approach to generate Refresh Tokens?
**Answer :** If we generate a new Refresh Token only after the previous one expires, an attacker who steals it can use it until it expires or is revoked.

To improve security, we use **Refresh Token Rotation**. Every time a new Access Token is generated, the server also generates a new Refresh Token and invalidates the old one. This reduces the risk of token reuse and helps detect stolen tokens.

## 5. How does JWT token Refreshing know it’s the same user?
**Answer :** When a user logs in, the server generates an Access Token and a Refresh Token, both containing the same user ID (userId or sub).

The server also stores the refresh-token record in a database or Redis, associated with that user.

When the Access Token expires, the client sends the Refresh Token to the /refresh endpoint. The server verifies the token using jwt.verify(), extracts the user ID, and checks the database or Redis to ensure the token is valid and the user is active.

If everything is valid, the server generates a new Access Token for the same user.