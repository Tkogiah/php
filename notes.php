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
        echo '<br><br>';
        echo 'working with user input';
    ?>

    <form action="notes.php" method="get">

        Name: <input type="text" name="name">
        <input type="submit">

    </form>

    <?php echo $_GET["name"]?>

    <?php 
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



</body>
</html>