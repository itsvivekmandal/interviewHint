# Top PHP Interview Questions and Answers 🚀

## Core PHP Basics


### 1. What is the latest version of PHP?
```php 
As of 2026, PHP 8.4 is the latest stable major version (released Nov 2024), with 8.5 in active development. 
// Always verify the current version on php.net before an interview.
```

### 2. What are the advantages and disadvantages of PHP?
```php
# Advantages of PHP
1. Open Source
2. Easy to Learn
3. Large Community
5. Excellent Framework Support  // Laravel, CodeIgniter, CakePHP, Symfony
6. Strong Database Support      // MySQL, PostgreSQL, Oracle, MongoDB

# Disadvantages of PHP
1. Inconsistent Function Naming
    strpos()
    strlen()
    array_push()
    array_merge()
2. Loose Typing by Default
    $a = "10";
    $b = 20;

    echo $a + $b; // 30
3. Legacy Codebases 
    Many older PHP applications were written before modern best practices became common, so maintaining legacy code can be challenging.
4. Performance for CPU-Intensive Tasks
    PHP is optimized for web request handling, not heavy computational workloads.
    For tasks like:
        Machine learning
        Scientific computing
        Large-scale numerical simulations

    languages such as C++, Rust, or Java may be more suitable.
```

### 3. What is new in PHP8.0?
```php
1. union types
2. named arguments 
3. constructor property promotion
4. match expression
    // A match expression has a more readable syntax than switch
    // A match expression returns a value, while switch does not
    // A match expression breaks automatically after a match, while switch requires break;
    // A match expression has strict comparison (===), while switch uses loose comparison (==)
5. nullsafe operator (?->)
6. str_contains()
7. str_starts_with()
8. str_ends_with()
```

### 4. What are the differences between echo and print in PHP?
```php 
echo and print are largely the same in PHP. Both are used to output data to the screen.

The only differences are as follows:
1. echo does not return a value whereas print does return a value of 1 (this enables print to be used in expressions).

2. echo can accept multiple parameters (although such usage is rare) while print can only take a single argument.

3. echo is fatser than print.
```

### 5. PHP data types. 
```php 
PHP supports the following data types:

1. string (text values)
2. int (whole numbers)
3. float (decimal numbers)
4. bool (true or false)
5. array (multiple values)
6. object (stores data as objects)
7. null (empty variable)
```

### 6. Difference between Double("") or Single(``) Quotes?
```php
1. A double quoted string will substitute the value of variables, and accepts many special characters, like \n, \r, \t by escaping them.
Slightly slower (PHP must scan for variables and escape sequences)
2. A single quoted string does not substitute the value of variables, and will output the string as it was written.
Slightly faster (PHP does not need to parse the content)

$x = "John";
echo "Hello $x"; // Returns Hello John

$x = "John";
echo `Hello $x`; // Returns Hello $x 
```

### 7. List 5 string functions?
```php
1. strlen(string $string): int // Return Values => The length of the string in bytes. 
2. str_split(string $string, int $length = 1): array
3. strpos(string $haystack, string $needle, int $offset = 0): int|false // String positions start at 0, and not 1. Returns false if the needle was not found.
4. strtolower(string $string): string
5. strtoupper(string $string): string
```

### 8. How to convert string into array?
```php 
str_split(string $string, int $length = 1): array
```

### 9. What is the difference between the include() and require() functions?
```php 
1. include() and require() both are used to include a specific file in script.

2. include() : If the file can`t be included then it will execute the remaining script and show an warning error.

3.  require() : If the file can`t be included then it will stoped the script execution with fatal error.
```

### 10. What is difference between require() and require_once()?
```php 
require_once() checks if the file has already been included and, if so, skips re-including it, preventing redeclaration errors
```

### 11. What is type casting?
```php 
Converting a variable from one data type to another
e.g. (int), (string), (array), (bool). 
Example: $num = (int) "123abc"; results in 123.
```

### 12. What`s the difference between unset() and unlink()?
```php 
unset() sets a variable to "undefined" while unlink() deletes a file we pass to it from the file system.
```

### 13. What is the difference between == and ===?
```php 
== compares values only (with type juggling). 
=== compares both value and type (strict comparison).
```

### 14. What is the difference between isset(), empty(), and is_null()?
```php 
1. isset()      // checks if a variable is set and not null. 
2. empty()      // checks if a variable is set AND has a falsy value (0, "", null, false). 
3. is_null()    // strictly checks if a value is null.
```

### 15. What are PHP superglobals?
```php 
Built-in arrays accessible everywhere: $_GET, $_POST, $_SESSION, $_COOKIE, $_SERVER, $_FILES, $_ENV, $_REQUEST, $GLOBALS.
```

### 16. What is the difference between GET and POST methods?
```php 
GET sends data via the URL (visible, limited length, cacheable). 
POST sends data in the request body (not visible in the URL, no practical size limit, not cached).
```

### 17. What is the difference between $_REQUEST and $_POST/$_GET?
```php 
$_REQUEST combines GET, POST, and COOKIE data, making it less predictable and secure. 
$_POST and $_GET are specific to their respective methods.
```

### 18. What are magic constants in PHP?
```php 
Predefined constants that change based on context: 
1. __LINE__ (current line)
2. __FILE__ (file path)
3. __DIR__ (directory)
4. __FUNCTION__
5. __CLASS__
6. __METHOD__.
```

### 19. What are magic methods in PHP?
```php 
Special methods triggered automatically: 
1. __construct() (object creation)
2. __destruct() (object destruction) 
3. __get()/__set() (accessing inaccessible properties) 
4. __call() (calling inaccessible methods)
5. __toString() (converting object to string)
```

### 20. What is the difference between die() and exit()?
```php 
They are aliases of each other and are functionally identical. Both stop script execution and can output a message.
```

### 21. Difference between array_map(), array_filter(), and array_walk()?
```php 
1. array_map() applies a callback to every element and returns a new array. 
2. array_filter() filters elements based on a callback condition. 
3. array_walk() applies a callback to each element by reference, modifying the original array rather than returning a new one.
```

### 22. Difference between implode() and explode()?
```php
1. implode() joins array elements into a string using a separator. 
2. explode() splits a string into an array using a delimiter.
```

### 23. How do you remove duplicate values from an array?
```php 
Use array_unique($array).
```

### 24. Difference between indexed, associative, and multidimensional arrays?
```php 
1. Indexed arrays use numeric keys ([0, 1, 2]). 
2. Associative arrays use named keys (["name" => "John"]). 
3. Multidimensional arrays contain other arrays as elements.
```

### 25. Difference between sort(), asort(), and ksort()?
```php
1. sort() sorts by value and re-indexes keys. 
2. asort() sorts by value but preserves key-value association. 
3. ksort() sorts by key.
```

### 26. Difference between in_array() and array_search()?
```php
1. in_array() returns a boolean indicating whether a value exists. 
2. array_search() returns the key/index of the found value, or false if not found.
```

### 26. Difference between array_merge() and array_combine()?
```php
1. array_merge() is used to merge more than one array>
2. array_combine is used to combine the two arrays. First array is used as key and second array used as its value.
```

### 27. What are the main error types in PHP and how do they differ?
```php 
In PHP there are three main type of errors:

1. Notices => Simple, non-critical errors that are occurred during the script execution. An example of a Notice would be accessing an undefined variable. (minor issue, script continues)

2. Warnings => more important errors than Notices, however the scripts continue the execution. An example would be include() a file that does not exist.

3. Fatal => this type of error causes a termination of the script execution when it occurs. An example of a Fatal error would be accessing a property of a non-existent object or require() a non-existent file.

4. Parse Error => (syntax error, script won`t run at all).
```

### 28. How do you enable error reporting in PHP?
```php 
error_reporting(E_ALL); 
ini_set(`display_errors`, 1);
```

### 29. What is the difference between GET and POST?
```php 
GET displays the submitted data as part of the URL, during POST this information is not shown as it`s encoded in the request.

GET can handle a maximum of 2048 characters, POST has no such restrictions.

GET allows only ASCII data, POST has no restrictions, binary data are also allowed.

Normally GET is used to retrieve data while POST to insert and update.
```

### 30. What is the difference between json_encode() and json_decode()?
```php 
1. json_encode() converts a PHP array/object into a JSON string. 
2. json_decode() converts a JSON string back into a PHP array/object.
```

### 31. Difference between pass by value and pass by reference in functions?
```php  
1. By value copies the variable, so changes inside the function don`t affect the original. 
2. By reference (&$var) passes the actual memory address, so changes affect the original variable.
```

### 32. Difference between file_get_contents() and fopen()?
```php 
1. file_get_contents() reads an entire file into a string in one call, good for smaller files. 
2. fopen() opens a file handle for more granular control such as reading line-by-line or writing, and is better for large files.
```

### 33. Is it important to close the file using fclose after fopen()?
```php 
Yes! It is very important.
1. Preventing Resource Leaks => IF your program runs for a long time and repeatedly opens file without closing them, it will eventually run out of file descriptors. When this happenes, any future calls to fopen will fail, returning Null and potentially crashing the application.
2. Ensuring Data is Actually Written => When write data to a file using function like fwrite the data usually isn`t written to the hard drive immediately. Instead, it is stored in a temporary memory area called buffer to maximize performance. Calling fclose automatically forces the system to flush the buffer and write all remaining data safely to the disk. If omit fclose and the program terminates unexpectedly or crash letter, that buffered data could be lost forever, leading to currupted or imcomplete files.
3. Avoid file locking issue => If program leaves a file open might be blocked from renaming, deleting or opening that file later in the program execution. fclose release this lock.
```

### 34. What is PDO and why should we use it over mysqli?
```php 
PDO stands for PHP Data Objects. It is a database abstraction layer that provides uniform interface to interact with multiple databases. mysqli works with MySQL databases. PRO support multiple database drivers.
```

### 35. How do we establish a secure connection using PDO?
```php 
Instantiate a new PRO object by passing a Data Source Name (DSN), username, password and an optional array of configuration options.

try {
    $dsn = "mysql:host=loaclhost;dbname=mydb;charset=utf8mb4";
    $options = [];
    $pdo = new PDO($dsn, "user", "password", $options);
} catch(PDOException $e) {
    die($e->getMessage());
}
```

### 36. What are prepared statements, and why are they important?
```php 
Precompiled SQL queries with placeholders for parameters. They prevent SQL injection and improve performance for repeated queries.
```

### 37. What is the difference between bindValue() and bindParam()?
```php
1. bindValue() binds the actual value of the variable at the exact moment the methode is called. Means if the value of variable will change after this query still execute with old value.
2. bindParam() binds the variable by reference. The value is evaluated only when $stmt->execute() runs.
```

### 38. Difference between mysqli_fetch_array(), mysqli_fetch_assoc(), and mysqli_fetch_object()?
```php 
1. fetch_array() returns both numeric and associative keys. 
2. fetch_assoc() returns only associative (column name) keys. 
3. fetch_object() returns results as an object.
```

## Sessions, Cookies & Security

### 34. What is session and Cookies and difference between session and cookie?
```php
# Session
1. A session is information maintained by the server for a particular user. 
2. Can store larger/sensitive server-side data.
3. Usually expires when the session expires. 
4. Requires server-side session storage.

# Cookie
1. A cookie is small data stored in the user`s browser.
2. Size is limited (typically ~4 KB per cookie).
3. Can be session-based or have an explicit expiry.
4. Doesn`t require server-side storage for the cookie itself.
```

### 35. What is the difference between session_start() and session_destroy()?
```php 
1. session_start() initiates or resumes a session. 
2.  session_destroy() ends the session and clears all session data.
```

### 36. What are SQL Injections, how do you prevent them and what are the best practices?
```php 
SQL injections are a method to alter a query in a SQL statement send to the database server. That modified query then might leak information like username/password combinations and can help the intruder to further compromise the server.

To prevent SQL injections, one should always check & escape all user input.

The only real protection is to use prepared statements everywhere consistently.

Do not use any of the mysql_* functions which have been deprecated since PHP 5.5 ,but rather use PDO, as it allows you to use other servers than MySQL out of the box.
```

### 37. What is Cross-Site Scripting (XSS), and how do you prevent it?
```php 
XSS lets attackers inject malicious scripts into web pages viewed by others. Prevent it using htmlspecialchars(), input validation, and Content Security Policy headers.
```

### 38. What is CSRF, and how can it be prevented?
```php 
Cross-Site Request Forgery tricks a user into performing unwanted actions. Prevent it using CSRF tokens unique to each session/form.
```

### 39. What is the use of htmlspecialchars() and strip_tags()?
```php 
1. htmlspecialchars() converts special characters to HTML entities, preventing them from being interpreted as HTML/scripts. 2. 2. strip_tags() removes HTML/PHP tags entirely from a string.
```

### 40. How do you securely store passwords in PHP?
```php 
Use password_hash() to hash passwords before storing, and password_verify() to check a plain password against the hash during login. Never store plain-text passwords.
```

