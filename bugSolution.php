```php
<?php
$myArray = ['a' => 1, 'b' => 2];
if (!isset($myArray['c'])) {
  $myArray['c'] = 1;
} else {
  $myArray['c']++;
}
print_r($myArray);
?>
```
This revised code explicitly checks if the key 'c' exists in the array.  If it doesn't exist, it adds it with a value of 1. Otherwise, it increments the existing value. This provides the expected and predictable outcome.