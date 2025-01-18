```php
function processArray(array &$arr) {
  foreach ($arr as &$value) {
    $value = $value * 2; 
  }
}

$numbers = [1, 2, 3, 4, 5];
processArray($numbers);
print_r($numbers); // Output: [2, 4, 6, 8, 10]

$objects = [
  (object)['a' => 1],
  (object)['a' => 2],
];

processArray($objects); // Unexpected behavior
print_r($objects); //Output:  Notice: Only variables should be passed by reference in...
```