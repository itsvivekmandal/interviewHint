# JWT Interview Questions and Answers 🚀

### 1. What is JWT?
```js
JWT stands for JSON WEB TOKEN. 
It is a standard method for securely transmitting information between parties as a JSON object.

It looks like a long, random string of text separated by dots.
eg. xxxxx.yyyyy.zzzzz

// It consist of three parts which are: 

1. Header: Contains metadata about the token, such as the signing algorithm used (e.g., HS256) and the token type (JWT).

2. Payload: Contains the actual data you want to pass around, such as user ID, role, expiration time (exp), and issued-at time (iat).

3. Signature: Created by taking the encoded header, encoded payload, a secret key (or private key), and applying the algorithm specified in the header.
```

### 2. What is the Key Benefits of JWTs?
```js
1. Statelessness: The server doesn`t need to keep a session store in memory or a database lookup table for every logged-in user. All the context needed is right inside the token payload.

2. Performance: Because validation is cryptographic and stateless, it scales easily across multiple server clusters or microservices.

3. Compact Size: They are small enough to be sent via HTTP headers, URL parameters, or POST bodies.
```

### 3. Where Should You ACTUALLY Store JWT Tokens?
```js
We can store jwt tokens in session or local storage.
But if we store it in local or session storage then any Cross-Site Scripting (XSS) attack or malicious npm package can read and steal the token.

So, the standard is a Hybrid Approach
1. Store your short-lived Access Token in-memory using JavaScript application state.
2. Store your long-lived Refresh Token in an httpOnly cookie.

res.cookie('refreshToken', refreshToken, {
  httpOnly: true, // Prevents client-side JS from reading the cookie (protects against XSS)
  secure: true,   // Ensures cookie is sent ONLY over HTTPS (set to false in local dev)
  sameSite: 'strict', // Protects against Cross-Site Request Forgery (CSRF)
  path: '/api/refresh-token', // Limits cookie transmission exclusively to the refresh route
  maxAge: 7 * 24 * 60 * 60 * 1000 // 7 days expiration
});
```

### 4. What is the best approach to generate Refresh Tokens?
```js
We can generate new refresh token once the refresh token expired but If an attacker steals a refresh token, they have access until it expires.
So, that the correct approach is Refresh Token Rotation. Generate brand new Refresh Token every time when new access token generated.
```

### 5. How Does JWT Token Refreshing Know It’s the Same User?
```js
When your user first logs in, Node.js embeds a unique identifier—like userId or the standard sub claim—into BOTH the short-lived access token AND the long-lived refresh token.
Then we will store the user_id into database or redis.

When the access token expires, the client sends the refresh token to the /refresh endpoint.
Node runs jwt.verify() using your secret key. If the signature is valid, it decodes the payload, extracts that exact same userId, and checks your database or Redis to confirm the user is active.
```