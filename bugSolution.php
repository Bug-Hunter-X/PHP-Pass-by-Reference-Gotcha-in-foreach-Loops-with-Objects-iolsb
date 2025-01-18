```php
function processArray(array &$arr) {
  foreach ($arr as $key => $value) {
    $arr[$key] = (object)['a' => $value->a * 2];
  }
}

$objects = [
  (object)['a' => 1],
  (object)['a' => 2],
];

processArray($objects);
print_r($objects); //Correct output: [stdClass Object ( [a] => 2 ), stdClass Object ( [a] => 4 )]

```