## Basics of php and key features

    ## what is PHP

        - PHP (Hypertext Preprocessor)
        - Open Source Object Oriented, Interter Programming Language
        - Backend Programming Language useful for Web Development
        - .php is extension

    ## Useful case for PHP?

        - PHP can generate dynamic page content
        - PHP can create, open, read, write, delete, and close files on the server
        - PHP can collect form data
        - PHP can send and receive cookies

        - PHP is Case Sensitive Language

    ## Comment in PHP

        - // This is a single-line comment
        - # This is also a single-line comment
        - /* */ Multi line comment

    ## Different print methods

        -- echo
            - Can output multiple strings
            - No Return Value
            - Fast
        -- print
            - Can only output single string
            - Return value of 1
            - Slow
        -- var_dump
            - displays structured information (type and value) about one or more expressions/variables
            - return all value, data type
        -- print_r
            - PHP that is used to print or display the contents of a variable
            - print arrays

    ## Variable

        - enable strict type
            - declare(strict_types=1) 
        - $ dollar sign to declare the varible
        - $$ varible within a varible
        - No need to explicity define the type our variable
        - &$x referance

        -- const is constant value
            - define() -> run time compling
            - const() -> compile time

    ## Data Types

        -- Scalar Types
            - string (Sequence of characters) (Heredoc, Nowdoc) Heredoc(show values of the variable, Nowdoc cannot check variable)
            - int (without decimal points)
            - float (With decimal points)
            - bool (True or False)

        -- Compound Types
            - array (Single varibale can hold multiple values)
            - object
            - callable
            - iterable

        -- Special Types
            - null (Intentional absence of any object value) Suppose to be empty
            - resource
        
        gettype() - check the type of the variable

    ## Operators

        - Arithmetic Operators
            - +	    Addition
            - -	    Subtraction
            - *	    Multiplication
            - /	    Division
            - **    Exponentiation
            - %	    Modulus (Division Remainder)

        - Assignment Operators
            - (=, +=, -=, *=, /=, %=)

        - Comparison Operators
            - ==        equal to
            - ===       identical with data type
            - !=, <>    not equal
            - !==       Not identical with data type
            - >	        greater than
            - <	        less than
            - >=	    greater than or equal to
            - <=	    less than or equal to
            - <=>       Spaceship (is less than, equal to, or greater than)
        
        - Error Control Operator
            - (@)

        - Execution Operator
            - (``)

        - Type Operator
            - (instanceof)

        - Nullsafe Operator
            - (?)

        - PHP Increment / Decrement Operators
            - ++$x  Pre Increment
            - $x++  Post Increment
            - --$x  Pre Decrement
            - $x--  Post Decrement

        - Logical Operators
            - &&, and	logical and
            - ||, or	logical or
            - !	        logical not
            - xor       logical Xor

        - String Operators
            .   Concatenation
            .=  Concatenation Assignment

        - Array Operators
            - +	    Union
            - ==    Equality
            - ===   Identity
            - !=    Inequality
            - <>	Inequality
            - !==	Non-identity

        -- String Operators
            ?   Ternary
            ??  Null coalescing

    ## String
        - Properties and Methods
            - length
            - access to character name[0]
            - toUpperCase()
            - toLowerCase()
            - charAt()
            - indexOf()
            - substring(2, 5) -> print between 2 to 5
        
    ## Conditional Statement
            - if
            - elseif or else if
            - else

    ## Main Difference between match and switch statement
            - match introduce from php 8
            - match is an expression, while switch is statement
            - match uses strict comparison, while switch uses loose
            - match evaluates only one value, while switch may evaluate more (depending on break statement)
            - match allows only single-line expression, while switch allows block of statements
            - match need to give the key value

    ## Difference between require and inlcude
            - required  => will produce a fatal error (E_COMPILE_ERROR) and stop the script
            - include   => will only produce a warning (E_WARNING) and the script will continue

    ## In Build Funtions and Predefine function

    ## php.ini php configuration

    ## Errors in php
        - Fatal Error
        - Syntax Error
        - Parse Error
        - Complie Error

    ## OOP

        - Variable called as -> Properties
        - Funtions called as -> Methods

        - Access Modifiers
            - Public    // Can Access any where and any class
            - Private   // Only can access within the same class
            - Protected // 

        - Namespaces
            - They allow for better organization by grouping classes that work together to perform a task
            - They allow the same name to be used for more than one class
            - Without namespace all class store in global space
        
        - Method Override
            - Change parent property value in child class
            - But cannot change the parent class value directly
            - Need to call Parent class to change the value (parent::__contruct)
            - We cannot override final class

        - Inheritance 
            - Inherit from another class , Inherit from parent class
            - Extends
            - We can override
            - Cannot change visibilty of the access modifiers
            - Cannot extend if the class final class
            - Can be break the encapsulation principle due to able to use public 
            
        - Polymorphism
            - It occurs when we have many classes that are related to each other by inheritance.

        - Abstraction
            - Process of hiding certain details and showing only essential information to the user
            - Abstract keyword is a non-access modifier, used for classes and methods
            - Parent class has a named method, but need its child class(es) to fill out the tasks.
            - Using Public break the Abstraction princials 
            - Hide actual implementation

        - Encapsulation 
            - Bundle of data and operates in class in one unit
            - Hide sensitive data from users, Internal Persentation, Widely using getter and setter
            - Public break the Encapsulation princials, property must be use Protected or Private
            - Getter and Setter don't always break the encapsulation principals
            - Hide's internal data and informations
            
        - Traits
            - PHP only supports single inheritance: a child class can inherit only from one single parent.

        - Interfaces
            - Interfaces allow you to specify what methods a class should implement.
            - Interfaces cannot have properties
            - All interface methods must be public

        - PHP_INT_MAX && PHP_INT_MIN
        - PHP_FLOAT_MAX && PHP_FLOAT_MIN

        - __DIR__                           // Current Directory
        - mkdir                             // Create Directory
        - rmdir                             // Remove Directory
        - file_exists                       // Check file in there
        - unlink()                          // Delete File
        - copy()                            // Copy File
        - rename('sample.txt, rename.txt)   // Copy File
    
        - is_bool($x)                       // Check Bool or Not , Return true or false
        - is_int($x) or is_interger($x)     // Check interger or not, Return true or false
        - is_finite($x)                     // Check not inifinty number, Return true or false
        - is_infinity($x)                   // Check infinity, Return true or false
        - is_nan ($x)                       // Check not a number, Return true or false
        - is_null($x)                       // Check is null, Return true or false
        - unset($x)                         // Destroy value of the variable
            - unset($x[1])
        - isset($x[0])                      // Check is null, Return true or false
        - count($x)                         // Count how many values in the array
        - array_push                        // Add values to array
        - array_pop                         // Remove last element in the array
        - array_shift                       // Remove first element in the array
        - array_key_exists                  // Check the key is exists, Return true or false
        - declare(strict_types=1)           // Allowed strict data type
        - is_array                          // Check its an array, Return true or false
        - is_callable                       // Check contents of a variable can be called as a function or not
        - array_map                         // Loop through all the array values
        - date_parse()                      // Full Detail of the given date
        - date_default_timezone_get()
        - date()
        - time()

        - array_chunks()                      // splits an array into chunks of new arrays
        - array_combine()                     // combine array lists (Size need to match)
        - array_filter()                      // return values from the array
        - array_keys()                        // find the key in the array list
        - array_map()                         // loop through the array
        - array_merge()                       // marge multiple arrays, without overriding array keys
        - array_sum()                         // calculate all the values in the array
        - array_search()                      // array search, Return true or false
        - array_diff()                        // find diffrence values in array
        - array_diff_assoc()                  // find diffrence values in array with keys
        - array_diff_key()                    // find diffrence values in array with keys
        - asort()                             // sort by values
        - ksort()                             // sort by keys
        - usort()                             // sort by our way can spaceship 
        - array_reduce()                      // sends the values in an array to a user-defined function, and returns a string.

