<?php

// 1. strlen()
$str = "Hello, world!";
echo "strlen(): " . strlen($str) . "\n"; // Outputs: 13

// 2. strpos()
echo "strpos(): " . strpos($str, "world") . "\n"; // Outputs: 7

// 3. str_replace()
echo "str_replace(): " . str_replace("world", "PHP", $str) . "\n"; // Outputs: Hello, PHP!

// 4. substr()
echo "substr(): " . substr($str, 7, 5) . "\n"; // Outputs: world

// 5. strtolower()
$str_upper = "Hello, WORLD!";
echo "strtolower(): " . strtolower($str_upper) . "\n"; // Outputs: hello, world!

// 6. strtoupper()
$str_lower = "Hello, world!";
echo "strtoupper(): " . strtoupper($str_lower) . "\n"; // Outputs: HELLO, WORLD!

// 7. trim()
$str_with_spaces = "   Hello, world!   ";
echo "trim(): '" . trim($str_with_spaces) . "'\n"; // Outputs: 'Hello, world!'

// 8. explode()
$str_to_split = "Hello, world!";
$arr = explode(", ", $str_to_split);
echo "explode(): ";
print_r($arr); // Outputs: Array ( [0] => Hello [1] => world! )

// 9. implode()
$arr_to_join = ["Hello", "world!"];
echo "implode(): " . implode(", ", $arr_to_join) . "\n"; // Outputs: Hello, world!

// 10. htmlspecialchars()
$html_str = "<a href='test'>Test</a>";
echo "htmlspecialchars(): " . htmlspecialchars($html_str) . "\n"; // Outputs: &lt;a href='test'&gt;Test&lt;/a&gt;

// 11. md5()
$password = "password";
echo "md5(): " . md5($password) . "\n"; // Outputs: 5f4dcc3b5aa765d61d8327deb882cf99

// 12. sha1()
echo "sha1(): " . sha1($password) . "\n"; // Outputs: 5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8

// 13. number_format()
$num = 1234567.89;
echo "number_format(): " . number_format($num) . "\n"; // Outputs: 1,234,567.89

// 14. str_repeat()
$str_repeat = "Hello";
echo "str_repeat(): " . str_repeat($str_repeat, 3) . "\n"; // Outputs: HelloHelloHello

// 15. sprintf()
$num_format = 9.123456;
echo "sprintf(): " . sprintf("%.2f", $num_format) . "\n"; // Outputs: 9.12

?>
