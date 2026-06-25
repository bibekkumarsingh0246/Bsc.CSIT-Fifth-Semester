<!DOCTYPE html>
<html>
<head>
    <title>Display Using XPath</title>
</head>
<body>

    <h1>Student Name and Project Name using XPath</h1>

    <?php

    $xml = simplexml_load_file("student.xml");

    $students = $xml->xpath("//student");

    foreach($students as $student)
    {
        echo $student->name . " - " . $student->project_name . "<br>";
    }

    ?>

    <hr>

</body>
</html>