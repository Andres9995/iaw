<html>
<head>
    <title>Base de dades</title>
    <style>
        * {
            margin-left: 20px;
        }
    </style>
</head>
<body>
<h1>Cambia nombre de un curso</h1>

<?php
$con = mysqli_connect("localhost","andres","123456","shop");
$sql=" SELECT * FROM article order by code asc ";
$rs=mysqli_query($con, $sql);

?>
<form action="act21d.php" method="GET">
    <input type="submit" value="Gangas" /> <br>
</form>
</body>
</html>