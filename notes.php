<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //marcus@marcus-HP-Z420-Workstation:~/Desktop/coding/php$ php -S localhost:4000
    //always put ';' (semicolon) at the end of each line
        echo 'open VSCode to check out my active notes on php development';
        $string = 'John';
        $integer = 35;
        $float = 33.33;
        $boolean = false;
        
        echo "<br> Hello $string $integer and $float";

        //section 1
        echo '<br><br>';
        echo 'working with strings';
        echo '<br>';
        echo strtolower($string);
        echo '<br>';
        echo strtoupper($string);
        echo '<br>';
        echo strlen($string); //length of string
        echo '<br>';
        echo $string[0]; //prints first char in string [1] 2nd, etc
        echo '<br>';
        $string[0] = 'L'; //changes char at index 0
        echo $string;
        echo '<br>';
        echo str_replace("Lo", "Ha", $string); //replaces specified portion of string with another specified portion of string
        echo '<br>';
        echo substr($string, 1, 3); //will pull a 3 char substring starting at index 1.

        //section 2
        echo '<br><br>';
        echo 'working with numbers';
        echo '<br>';
        echo 40;
        echo '<br>';
        echo -40;
        echo '<br>';
        echo 40.98;
        echo '<br>';
        echo 5 + 9; //can use + - / * and % follows pemdos
        echo '<br>';
        echo $integer;
        echo '<br>';
        $integer++;
        echo $integer;
        echo '<br>';
        $integer--;
        echo $integer;
        echo '<br>';
        $integer += 7; // += -= /= *=
        echo $integer;
        echo '<br>';
        echo abs(-100);
        echo '<br>';
        echo abs(-100); //absolute value
        echo '<br>';
        echo pow(2,4); //2^4
        echo '<br>';
        echo sqrt(144); 
        echo '<br>';
        echo max(2,10); //tells me the larger number
        echo '<br>';
        echo min(2,10);
        echo '<br>';
        echo round(3.2);//rounds to 3;
        echo '<br>';
        echo ceil(3.1); //always rounds decimals up
        echo '<br>';
        echo floor(3.9); //always rounds decimals down
    ?>

    
    <?php 
    //section 3
        echo '<br><br>';
        echo 'working with user input';
    ?>

    <form action="notes.php" method="get">

        Name: <input type="text" name="name">
        <input type="submit">

    </form>

    <?php echo $_GET["name"]?>

    <?php 
    //section 4
        echo '<br><br>';
        echo 'building a basic calculator';
    ?>

    <form action="notes.php" method="get">

        First number: <input type="number" name="first">
        <br>
        Second Number: <input type="number" name="second">
        <input type="submit">

    </form>

    <?php 
        echo $_GET['first'] + $_GET['second'];
        
    ?>

    <?php
    //section 5
        echo '<br><br>';
        echo 'building a mad libs game';
    ?>

    <form action='notes.php' method='get'>
        color:<input type="text" name="color"><br>
        plural noun<input type="text" name="pluralNoun"><br>
        celebrity<input type="text" name="celebrity"><br>
        <input type="submit">
    </form>    


    <?php
        $color = $_GET['color'];
        $pluralNoun = $_GET['pluralNoun'];
        $celebrity = $_GET['celebrity'];
        echo '<br>';
        echo "roses are $color <br>";
        echo "$pluralNoun are blue <br>";
        echo "I love $celebrity <br>";
    ?>
    
    <?php
    //section 6
        echo '<br><br>';
        echo 'working with URL parameters';
    ?>

    <form action='notes.php' method='get'>
        name2:<input type="text" name="nameTwo"><br>
        <!-- didn't use 'name' becasue i used it above and the name attribute needs to be unique -->
        <input type="submit">
    </form>
    <br>
    
    <?php
        echo $_GET['nameTwo'];
        echo '<br>CHECK NOTES CODE<br>';
        // echo "if you modify the url you can create a variable if you would like<br>";
        // echo "try changing \'http://localhost:4000/notes.php?nameTwo=john'\ <br>";
        // echo "to<br>";
        // echo "http://localhost:4000/notes.php?age=70 <br> and then change the '$_GET['nameTwo']' variable to be '$_GET['age']'";
    ?>

    <?php
    //section 7
        echo '<br><br>';
        echo 'post vs get';
        echo '<br>';
        echo "replace GET with POST in previous activities to hide info in the URL";
    ?>

    <?php
    //section 8 
        echo '<br><br>';
        echo 'working with arrays <br>';
        $friends = array('kevin', 'karen','oscar', 'jim');
        echo "$friends[0]<br>";
        echo "$friends[1]<br>";
        echo "$friends[2]<br>";
        echo "$friends[3]<br>";
        $friends[1] = 'dwight';
        echo "$friends[1]<br>";
        echo count($friends);
        echo "<br>"
    ?>

    <form action="notes.php" method="post">
        apples<input type="checkbox" name="fruits[]" value="apples"><br>
        oranges<input type="checkbox" name="fruits[]" value="oranges"><br>
        bananas<input type="checkbox" name="fruits[]" value="bananas"><br>
        pineapple<input type="checkbox" name="fruits[]" value="pineapple"><br>
        grapes<input type="checkbox" name="fruits[]" value="grapes"><br>
        <input type="submit">
    </form>

    <?php 
        $fruits = $_POST["fruits"];
        echo $fruits[1]
    ?>

    <?php 
    //section 9
        echo "<br><br>";
        echo "working with associated arrays<br>";
    ?>
    <form action="notes.php" method="post">
        <input type="text" name="student">
        <input type="submit">
    </form>

</body>
</html>