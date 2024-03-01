<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //First create the array
        $fruits = array("apple", "banana", "orange");

        //Modify the array
        $fruits[1] = "pear";
        $fruits[3] = "banana";

        echo("<h1>These are my fruits</h1>");
        echo($fruits[0] . "<br>");
        echo($fruits[1] . "<br>");
        echo($fruits[2] . "<br>");
        echo($fruits[3] . "<br>");
        ?>


        <h1>And now the fruits as a list</h1>

        <ol>
            <?php
            /*
              Now we print out ony the list items
              We startet the list on HTML
             */
            echo("<li> $fruits[0] </li>");
            echo("<li> $fruits[1] </li>");
            echo("<li> $fruits[2] </li>");
            echo("<li> $fruits[3] </li>");
            ?>
        </ol>
    </body>
</html>
