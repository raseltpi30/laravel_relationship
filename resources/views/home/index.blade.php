<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is home page</title>
</head>
<body>
    <!-- Simple php -->
    <?php echo $name; ?>
    <h1>Welcome to Home page</h1>
    <?php echo $subjects[0]."<br>";  ?>
    <?php echo $subjects[1]."<br>";  ?>
    <?php echo $subjects[2]."<br>";  ?>
    <?php echo $subjects[3]."<br>";  ?>
    <!-- for blade -->
    {{$roll}}
    {{$registration}}
</body>
</html>

<!-- Blade use ar advantage hocche {{ $roll }} amon use korlei kaj kore Php lage na -->