# PHP Pass-by-Reference Gotcha in foreach Loops with Objects

This example demonstrates a subtle issue in PHP's pass-by-reference mechanism within `foreach` loops when handling objects.  Modifying objects directly within the loop may not produce the intended outcome, leading to unexpected behavior and potential errors.

The `bug.php` file contains the problematic code, while `bugSolution.php` offers a corrected approach.

## Problem

The original code attempts to double the 'a' property of each object in the `$objects` array. However, due to PHP's handling of references, this direct modification leads to issues.

## Solution

The solution demonstrates how to correctly modify the object properties while avoiding the issues caused by direct pass-by-reference within the `foreach` loop.