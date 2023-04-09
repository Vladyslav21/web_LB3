<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lb3 var3</title>
</head>
<body>
    <a>Перелік палат, у яких чергує обрана медсестра</a>    
    <br>

    <form action="get1.php" method="get">
        <select name ="nurseName" id="nurseName">
            <?php
            include('connect.php');
            $sqlSelect = "SELECT name FROM nurse";
            foreach($dbh->query($sqlSelect) as $row){
                echo "<option value='$row[0]'>$row[0]</option>";
            }
            $dbh = null;
            ?>
        </select> 
        <input type="submit" value="Отримати результат">
    </form>
    <br>
    <br>
    <br>
    <br>
    <a>Медсестри обраного відділення</a>    
    <br>
    <form action="get2.php" method="get">
        <select name ="nurseDepartment" id="nurseDepartment">
            <option value = "1">1</option>
            <option value = "2">2</option>
            <option value = "3">3</option>
            <option value = "4">4</option>
        </select> 
        <input type="submit" value="Отримати результат">
    </form>
    <br>
    <br>
    <br>
    <br>
    <a>Чергування (у будь-яких палатах) у зазначену зміну</a>    
    <br>
    <form action="get3.php" method="get">
        <select name ="wardName" id="wardName">
           <option value = "First">First</option>
           <option value = "Second">Second</option>
           <option value = "Third">Third</option>
        </select> 
        <input type="submit" value="Отримати результат">
    </form>
</body>
</html>