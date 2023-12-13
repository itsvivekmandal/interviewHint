# Top OOPS Related Interview Questions and Answers 🚀

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

Public: The members of the class specified as the public can be accessible everywhere

Protected: The members of the class specified as protected can be accessible within that particular class and the derived class which extends this class

Private: The members of the class specified as private can be accessed only within that class

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

12. What is abstract class in PHP?
✅ An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.

An abstract class or method is defined with the abstract keyword.

11. Differentiate between Abstract class and interface.
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

12. Explain Namespaces.
✅ Namespaces are qualifiers that solve two different problems:

They allow for better organization by grouping classes that work together to perform a task
They allow the same name to be used for more than one class

Namespaces are declared at the beginning of a file using the namespace keyword.
