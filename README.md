# PHP Ternary Operator Array Assignment Bug
This repository demonstrates a subtle bug in PHP involving the use of the ternary operator within an array assignment.  The code appears to attempt to increment a value in an array, but due to the behavior of the ternary operator and array access, it produces an unexpected result.  The solution demonstrates the correct approach to handle such scenarios.

## Bug
The `bug.php` file contains the buggy code.  Running this script will show that the array element 'c' is not incremented as expected but instead is initialized to 0. This occurs because the conditional expression in the ternary operator evaluates to 0 when the key 'c' is not initially present in `$myArray`. 

## Solution
The `bugSolution.php` file provides the corrected code that resolves this issue.  It uses a more explicit approach of checking for the existence of the array key before performing the increment or adding a new element.