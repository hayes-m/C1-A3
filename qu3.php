<!DOCTYPE html>
<html>
<head>
    <title>QUESTION 3</title>
</head>
<body>

<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<!--Allows for easier viewing on mobile-->

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <!--Submits form to same location as found-->

        Number: <input type="number" name="num">
        Creature: <input type="text" name="creature">
        Noise: <input type ="text" name="noise">
        <input type="Submit" name="Submit" value="Submit">
</form><!--Displays input area-->

<?php
//Opens php coding area

        function writeSong()
        {
            global $num;
            $num = $_GET["num"];
            global $creature;
            $creature = $_GET["creature"];
            global $single;
            $single = $_GET["creature"];
            global $noise;
            $noise = $_GET["noise"];
        }//Function to assign input from form to php variables

        if (isset($_GET["Submit"])) {
            //Ensures text boxes are filled before taking any action

            writeSong();
            //Calls function

                if ($num > 1) {
                    $creature = $creature . "s";
                        } elseif ($num == 1) {
                    $creature = rtrim($creature, "s");
                    }//Adds an "s" onto the end of the creature input, ensuring plural semantics for more than one creature; removes "s" if singular


                if ($num >= 1) {
                    echo "<br>$num little $creature went wandering one day <br>";
                }//First line

                for ($num -= 1; $num > -1; --$num) {
                    //Loop to reduce number of creatures until there is only one left

                    echo "Over the hill and far away <br>Mother $single said <i>$noise, $noise, $noise</i><br>";
                    if ($num == 0) {
                        echo "And all the ";
                        echo $_GET["num"];
                        echo " little $creature came back.";
                        //If statement to change last line of last verse to return all creatures
                            }else{
                        echo "But only $num little ";
                        //Alternative statement to continue the rhyme until all creatures are gone

                        if ($num > 1) {
                            echo "$creature came back.<br><br>";
                                }elseif($num == 1){
                            echo rtrim($creature, "s");
                            echo " came back.<br><br>";
                        }//Final line with if statement to determine singular or plural creature

                        echo "$num little ";

                        if ($num > 1) {
                            echo "$creature went wandering one day <br>";
                                }elseif($num == 1){
                            echo rtrim($creature, "s");
                            echo " went wandering one day <br>";
                                }//Return of the first line until all animals are gone
                            }
                        }
                    }else{
                echo "<br>Please input a number, a creature, and the noise it makes<br><br>";
            }//If nothing is input, this message is displayed to prompt the user

?>

</body>
</html>
