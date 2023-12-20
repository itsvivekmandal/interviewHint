# Top PHP Interview Questions and Answers 🚀

1. What are the differences between echo and print in PHP?

✅ echo and print are largely the same in PHP. Both are used to output data to the screen.

The only differences are as follows:

    1. echo does not return a value whereas print does return a value of 1 (this enables print to be used in expressions).

    2. echo can accept multiple parameters (although such usage is rare) while print can only take a single argument.

    3. echo is fatser than print.

2. What is the difference between the include() and require() functions?

✅ include() and require() both are used to include a specific file in script.

    include() : If the file can’t be included then it will execute the remaining script and show an warning error.

    require() : If the file can’t be included then it will stoped the script execution with fatal error.

3. What’s the difference between unset() and unlink()?

✅ unset() sets a variable to “undefined” while unlink() deletes a file we pass to it from the file system.

4. What are the main error types in PHP and how do they differ?

✅ In PHP there are three main type of errors:

    Notices => Simple, non-critical errors that are occurred during the script execution. An example of a Notice would be accessing an undefined variable.

    Warnings => more important errors than Notices, however the scripts continue the execution. An example would be include() a file that does not exist.

    Fatal => this type of error causes a termination of the script execution when it occurs. An example of a Fatal error would be accessing a property of a non-existent object or require() a non-existent file.

5. What is the difference between GET and POST?

✅ GET displays the submitted data as part of the URL, during POST this information is not shown as it’s encoded in the request.

GET can handle a maximum of 2048 characters, POST has no such restrictions.

GET allows only ASCII data, POST has no restrictions, binary data are also allowed.

Normally GET is used to retrieve data while POST to insert and update.

6. How can you enable error reporting in PHP?

✅ Check if “display_errors” is equal “on” in the php.ini or declare “ini_set('display_errors', 1)” in your script.

Then, include “error_reporting(E_ALL)” in your code to display all types of error messages during the script execution.

7. Types of Array in php? 

✅ In PHP, there are three types of arrays:

    Indexed arrays => Arrays with a numeric index

    Associative arrays => Arrays with named keys
    
    Multidimensional arrays => Arrays containing one or more arrays

100. What are SQL Injections, how do you prevent them and what are the best practices?

✅ SQL injections are a method to alter a query in a SQL statement send to the database server. That modified query then might leak information like username/password combinations and can help the intruder to further compromise the server.

To prevent SQL injections, one should always check & escape all user input.

The only real protection is to use prepared statements everywhere consistently.

Do not use any of the mysql_* functions which have been deprecated since PHP 5.5 ,but rather use PDO, as it allows you to use other servers than MySQL out of the box.

# Top OOPS Related Questions and Answers 🚀

1. What do you mean by object-oriented programming?

✅ An object-oriented programming language is an approach that enables programmers to create secure and flexible applications using independent objects that can be modified or reorganized without affecting the other parts of the program.

2. What is a class and object?

✅ Class => A class is a blueprint for an object. It defines properties and other functions associated with the object. It is created using the "class" keyword.

Object => Each object has its own properties and functions defined under the class. They can interact without having information about each other. It is created using a "new" keyword.
(An instance of a class is know as Object.)

3. What do you mean by Inheritance?

✅ Inheritance in oops(object-oriented programming) happens when a class inherits properties from other classes. The class which inherits properties and methods from the other class is known as the child class, and the class from which the properties are inherited then it is known as the parent class. The child class uses extend keyword to inherit the properties of the parent class, and it can also have its own properties and methods.

4. What is the use of traits in PHP?

✅ Traits in PHP allow classes to inherit multiple behaviors by declaring methods in multiple classes, as PHP doesn't support multiple inheritances; therefore, OOP traits solve this problem. Traits can have methods with any access modifier. The trait keyword is used to create the traits. It helps developers to reuse methods kept in different inheritance hierarchies preventing code duplication.

5. How is the static keyword used in the program?

✅ The static keyword is a non-access modifier that defines the static variables and methods common to all objects. The static properties and methods can be used directly without creating an instance of the class.
A static method and variables can be accessed from a method in the same class using the "self" keyword and double colon or scope resolution operator (::).
To call a static method and variables from a child class, use the "parent" keyword inside the child class.

6. Describe the types of access modifiers in PHP

✅ The three access specifiers in PHP are:

    Public => The members of the class specified as the public can be accessible everywhere

    Protected => The members of the class specified as protected can be accessible within that particular class and the derived class which extends this class

    Private => The members of the class specified as private can be accessed only within that class

7. Explain Polymorphism with the help of an example.

✅ Polymorphism is an important object-oriented programming concept, which means the same name of the methods performing different operations. 

There are two types of Polymorphism:
Compile time Polymorphism (Method overloading): PHP does not support compile time polymorphism.

Runtime polymorphism(Method overriding): Runtime polymorphism in object-oriented programming, also known as dynamic polymorphism, is often achieved through method overriding. 

example =>
<?php
class main {
    function operation($x, $y) {
        $val = $x * $y;
        echo "After multiplying = " . $val;
    }
}
class Sub extends Main {
    function operation($x, $y) {
        $val = $x + $y;
        echo "After addition  = " . $val;
    }
}
$obj = new Sub();
$obj->operation(60, 90);
?>

8. Name the types of constructors.

✅ The three types of constructors in PHP are:

Default constructor: The constructor with no parameters

Parameterized constructor: The constructor with arguments is called a parameterized constructor

Copy constructor: This constructor will take the address of the other objects as a parameter

9. What is the use of the final keyword in PHP?

✅ The final keyword in PHP is used only for methods and classes. It prevents the subclass from overriding a method and prevents a class from being inherited.

10. What is Interface in PHP?

✅ Interfaces allow you to specify what methods a class should implement.

Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".

Interfaces are declared using the interface keyword.
To implement an interface, a class must use the implements keyword.

11. What is abstract class in PHP?

✅ An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

An abstract class or method is defined with the abstract keyword.

12. Differentiate between Abstract class and interface.

✅ The main differences between abstract class and interface in PHP are:

    Abstract class:
    It is under partial abstraction.	
    It is declared by using an abstract keyword.
    Complete members of abstract classes can be static.
    In abstract class a method must be declared as abstract.
    The abstract methods can be protected or public.

    Interface:
    It is under full abstraction.
    It is declared by using the interface keyword.
    The members of the interface can not be static.
    All the methods in the interface are abstract by default.
    The interface methods must be public.

13. Explain Namespaces.

✅ Namespaces are qualifiers that solve two different problems:

They allow for better organization by grouping classes that work together to perform a task
They allow the same name to be used for more than one class

Namespaces are declared at the beginning of a file using the namespace keyword.
