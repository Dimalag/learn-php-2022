<html>
<head>
    <title>PHP Test</title>
</head>
<body>
<?php

use Coursework\Student;

$studentOne = new Student("Дмитрий", "Лагунов");
$studentTwo = new Student("Алексей", "Лагунов");
$studentThree = new Student("Александр", "Ермолаев");

$students = array($studentOne, $studentTwo, $studentThree);

foreach ($students as $student) {
    echo "Имя: " + $student->name + ", фамилия: " + $student->surname . PHP_EOL;
}

?>
</body>
</html>