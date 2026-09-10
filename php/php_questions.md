# Top PHP Interview Questions and Answers 🚀

## Core PHP Basics

### 1. What is the latest version of PHP?
**Answer:** As of 2026, PHP 8.4 is the latest stable major version (released Nov 2024), with 8.5 in active development. 
// Always verify the current version on php.net before an interview.

### 2. What are the advantages and disadvantages of PHP?
**Answer:**
```bash
# Advantages of PHP
1. Open Source
2. Easy to Learn
3. Large Community
5. Excellent Framework Support // Laravel, CodeIgniter, CakePHP, Symfony
6. Strong Database Support // MySQL, PostgreSQL, Oracle, MongoDB

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
**Answer:**
* union types
* named arguments 
* constructor property promotion
* match expression
    // A match expression has a more readable syntax than switch
    // A match expression returns a value, while switch does not
    // A match expression breaks automatically after a match, while switch requires break;
    // A match expression has strict comparison (===), while switch uses loose comparison (==)
* nullsafe operator (?->)
* str_contains()
* str_starts_with()
* str_ends_with()

### 4. What are the differences between echo and print in PHP?
**Answer:** echo and print are largely the same in PHP. Both are used to output data to the screen.

The only differences are as follows:
*   echo does not return a value whereas print does return a value of 1 (this enables print to be used in expressions).

*   echo can accept multiple parameters (although such usage is rare) while print can only take a single argument.

*   echo is fatser than print.

### 5. PHP data types. 
**Answer:** PHP supports the following data types:

* string (text values)
* int (whole numbers)
* float (decimal numbers)
* bool (true or false)
* array (multiple values)
* object (stores data as objects)
* null (empty variable)

### 6. Difference between Double("") or Single('') Quotes?
**Answer:**
* A double quoted string will substitute the value of variables, and accepts many special characters, like \n, \r, \t by escaping them.
Slightly slower (PHP must scan for variables and escape sequences)
* A single quoted string does not substitute the value of variables, and will output the string as it was written.
Slightly faster (PHP does not need to parse the content)
```bash
$x = "John";
echo "Hello $x"; // Returns Hello John

$x = "John";
echo 'Hello $x'; // Returns Hello $x 
```

### 7. List 5 string functions?
**Answer:**
* strlen(string $string): int // Return Values => The length of the string in bytes. 
* str_split(string $string, int $length = 1): array
* strpos(string $haystack, string $needle, int $offset = 0): int|false // String positions start at 0, and not 1. Returns false if the needle was not found.
* strtolower(string $string): string
* strtoupper(string $string): string

### 8. How to convert string into array?
**Answer:** str_split(string $string, int $length = 1): array

### 9. What is the difference between the include() and require() functions?
**Answer:** include() and require() both are used to include a specific file in script.

*   include() : If the file can't be included then it will execute the remaining script and show an warning error.

*   require() : If the file can't be included then it will stoped the script execution with fatal error.

### 10. What is difference between require() and require_once()?
**Answer:** : require_once() checks if the file has already been included and, if so, skips re-including it, preventing redeclaration errors

### 11. What is type casting?
**Answer:** Converting a variable from one data type to another, e.g. (int), (string), (array), (bool). Example: $num = (int) "123abc"; results in 123.

### 12. What's the difference between unset() and unlink()?
**Answer:** unset() sets a variable to "undefined" while unlink() deletes a file we pass to it from the file system.

### 13. What is the difference between == and ===?
**Answer:** == compares values only (with type juggling). === compares both value and type (strict comparison).

### 14. What is the difference between isset(), empty(), and is_null()?
**Answer:** isset() checks if a variable is set and not null. empty() checks if a variable is set AND has a falsy value (0, "", null, false). is_null() strictly checks if a value is null.

### 15. What are PHP superglobals?
**Answer:** Built-in arrays accessible everywhere: $_GET, $_POST, $_SESSION, $_COOKIE, $_SERVER, $_FILES, $_ENV, $_REQUEST, $GLOBALS.

### 16. What is the difference between GET and POST methods?
**Answer:** GET sends data via the URL (visible, limited length, cacheable). POST sends data in the request body (not visible in the URL, no practical size limit, not cached).

### 17. What is the difference between $_REQUEST and $_POST/$_GET?
**Answer:** $_REQUEST combines GET, POST, and COOKIE data, making it less predictable and secure. $_POST and $_GET are specific to their respective methods.

### 18. What are magic constants in PHP?
**Answer:** Predefined constants that change based on context: __LINE__ (current line), __FILE__ (file path), __DIR__ (directory), __FUNCTION__, __CLASS__, __METHOD__.

### 19. What are magic methods in PHP?
**Answer:** Special methods triggered automatically: 
* __construct() (object creation)
* __destruct() (object destruction) 
* __get()/__set() (accessing inaccessible properties) 
* __call() (calling inaccessible methods)
* __toString() (converting object to string)

### 20. What is the difference between die() and exit()?
**Answer:** They are aliases of each other and are functionally identical. Both stop script execution and can output a message.

### 21. Difference between array_map(), array_filter(), and array_walk()?
**Answer:** 
* array_map() applies a callback to every element and returns a new array. 
* array_filter() filters elements based on a callback condition. 
* array_walk() applies a callback to each element by reference, modifying the original array rather than returning a new one.

### 22. Difference between implode() and explode()?
**Answer:**
* implode() joins array elements into a string using a separator. 
* explode() splits a string into an array using a delimiter.

### 23. How do you remove duplicate values from an array?
**Answer:** Use array_unique($array).

### 24. Difference between indexed, associative, and multidimensional arrays?
**Answer:** 
* Indexed arrays use numeric keys ([0, 1, 2]). 
* Associative arrays use named keys (["name" => "John"]). 
* Multidimensional arrays contain other arrays as elements.

### 25. Difference between sort(), asort(), and ksort()?
**Answer:**
* sort() sorts by value and re-indexes keys. 
* asort() sorts by value but preserves key-value association. 
* ksort() sorts by key.

### 26. Difference between in_array() and array_search()?
**Answer:**
* in_array() returns a boolean indicating whether a value exists. 
* array_search() returns the key/index of the found value, or false if not found.

### 26. Difference between array_merge() and array_combine()?
**Answer:**
* array_merge() is used to merge more than one array>
* array_combine is used to combine the two arrays. First array is used as key and second array used as its value.

### 27. What are the main error types in PHP and how do they differ?
**Answer:** In PHP there are three main type of errors:

* **Notices** => Simple, non-critical errors that are occurred during the script execution. An example of a Notice would be accessing an undefined variable. (minor issue, script continues)

* **Warnings** => more important errors than Notices, however the scripts continue the execution. An example would be include() a file that does not exist.

* **Fatal** => this type of error causes a termination of the script execution when it occurs. An example of a Fatal error would be accessing a property of a non-existent object or require() a non-existent file.

* **Parse Error** => (syntax error, script won't run at all).

### 28. How do you enable error reporting in PHP?
**Answer:** error_reporting(E_ALL); ini_set('display_errors', 1);

### 29. What is the difference between GET and POST?
**Answer:** GET displays the submitted data as part of the URL, during POST this information is not shown as it's encoded in the request.

GET can handle a maximum of 2048 characters, POST has no such restrictions.

GET allows only ASCII data, POST has no restrictions, binary data are also allowed.

Normally GET is used to retrieve data while POST to insert and update.

### 30. What is the difference between json_encode() and json_decode()?
**Answer:** json_encode() converts a PHP array/object into a JSON string. json_decode() converts a JSON string back into a PHP array/object.

### 31. Difference between pass by value and pass by reference in functions?
**Answer:**  By value copies the variable, so changes inside the function don't affect the original. By reference (&$var) passes the actual memory address, so changes affect the original variable.

### 32. Difference between file_get_contents() and fopen()?
**Answer:** file_get_contents() reads an entire file into a string in one call, good for smaller files. fopen() opens a file handle for more granular control such as reading line-by-line or writing, and is better for large files.

### 33. Is it important to close the file using fclose after fopen()?
**Answer:** Yes! It is very important.
* Preventing Resource Leaks => IF your program runs for a long time and repeatedly opens file without closing them, it will eventually run out of file descriptors. When this happenes, any future calls to fopen will fail, returning Null and potentially crashing the application.
* Ensuring Data is Actually Written => When write data to a file using function like fwrite the data usually isn't written to the hard drive immediately. Instead, it is stored in a temporary memory area called buffer to maximize performance. Calling fclose automatically forces the system to flush the buffer and write all remaining data safely to the disk. If omit fclose and the program terminates unexpectedly or crash letter, that buffered data could be lost forever, leading to currupted or imcomplete files.
* Avoid file locking issue => If program leaves a file open might be blocked from renaming, deleting or opening that file later in the program execution. fclose release this lock.

### 34. What is PDO and why should we use it over mysqli?
**Answer:** PDO stands for PHP Data Objects. It is a database abstraction layer that provides uniform interface to interact with multiple databases. mysqli works with MySQL databases. PRO support multiple database drivers.

### 35. How do we establish a secure connection using PDO?
**Answer:** Instantiate a new PRO object by passing a Data Source Name (DSN), username, password and an optional array of configuration options.
```bash
try {
    $dsn = "mysql:host=loaclhost;dbname=mydb;charset=utf8mb4";
    $options = [];
    $pdo = new PDO($dsn, "user", "password", $options);
} catch(PDOException $e) {
    die($e->getMessage());
}
```

### 36. What are prepared statements, and why are they important?
**Answer:** Precompiled SQL queries with placeholders for parameters. They prevent SQL injection and improve performance for repeated queries.

### 37. What is the difference between bindValue() and bindParam()?
**Answer:**
* bindValue() binds the actual value of the variable at the exact moment the methode is called. Means if the value of variable will change after this query still execute with old value.
* bindParam() binds the variable by reference. The value is evaluated only when $stmt->execute() runs.

### 38. Difference between mysqli_fetch_array(), mysqli_fetch_assoc(), and mysqli_fetch_object()?
**Answer:** fetch_array() returns both numeric and associative keys. fetch_assoc() returns only associative (column name) keys. fetch_object() returns results as an object.

## Sessions, Cookies & Security

### 34. What is session and Cookies and difference between session and cookie?
**Answer:**
```bash
# Session
* A session is information maintained by the server for a particular user. 
* Can store larger/sensitive server-side data.
* Usually expires when the session expires. 
* Requires server-side session storage.

# Cookie
* A cookie is small data stored in the user's browser.
* Size is limited (typically ~4 KB per cookie).
* Can be session-based or have an explicit expiry.
* Doesn't require server-side storage for the cookie itself.
```

### 35. What is the difference between session_start() and session_destroy()?
**Answer:** 
* session_start() initiates or resumes a session. 
* session_destroy() ends the session and clears all session data.

### 36. What are SQL Injections, how do you prevent them and what are the best practices?
**Answer:** SQL injections are a method to alter a query in a SQL statement send to the database server. That modified query then might leak information like username/password combinations and can help the intruder to further compromise the server.

To prevent SQL injections, one should always check & escape all user input.

The only real protection is to use prepared statements everywhere consistently.

Do not use any of the mysql_* functions which have been deprecated since PHP 5.5 ,but rather use PDO, as it allows you to use other servers than MySQL out of the box.

### 37. What is Cross-Site Scripting (XSS), and how do you prevent it?
**Answer:** XSS lets attackers inject malicious scripts into web pages viewed by others. Prevent it using htmlspecialchars(), input validation, and Content Security Policy headers.

### 38. What is CSRF, and how can it be prevented?
**Answer:** Cross-Site Request Forgery tricks a user into performing unwanted actions. Prevent it using CSRF tokens unique to each session/form.

### 39. What is the use of htmlspecialchars() and strip_tags()?
**Answer:** htmlspecialchars() converts special characters to HTML entities, preventing them from being interpreted as HTML/scripts. strip_tags() removes HTML/PHP tags entirely from a string.

### 40. How do you securely store passwords in PHP?
**Answer:** Use password_hash() to hash passwords before storing, and password_verify() to check a plain password against the hash during login. Never store plain-text passwords.

