<!DOCTYPE html>
<html>
<head>
    <title>QUESTION 4</title>
</head>
<body>

<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<!--Allows for easier viewing on mobile-->

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <!--Submits form to same location as found-->

    <select name="Note">

        <option value="Semibreve">Semibrieve</option>
        <option value="Minim">Minim</option>
        <option value="Crotchet">Crotchet</option>
        <option value="Quaver">Quaver</option>
        <option value="Semiquaver">Semiquaver</option>

        <input name="Submit" type="Submit" value="Submit">

    </select>
</form><!--A dropdown menu from which a user can select a note-->

<?php

        $notes = array(
            array("Semibreve", 4, 119133),
            array("Minim", 2, 119134),
            array("Crotchet", 1, 119135),
            array("Quaver", 0.5, 119136),
            array("Semiquaver", 0.25, 119137)
        );//A multidimensional array which holds the note names, beats, and html symbol ID integers

        if (isset($_GET["Submit"])) {
        //Ensures a selection is made before taking any action

            $grab = $_GET["Note"];
            if ($grab == "Semibreve")
                $human = $notes[0];
            elseif ($grab == "Minim")
                $human = $notes[1];
            elseif ($grab == "Crotchet")
                $human = $notes[2];
            elseif ($grab == "Quaver")
                $human = $notes[3];
            elseif ($grab == "Semiquaver")
                $human = $notes[4];
            //Assigns input to php variables

            $computer = $notes[array_rand($notes)];
            //Assigns a random note to a variable i.e. the computer's choice

            function diff($human, $computer)
            {
                if ($human[1] > $computer[1]) {
                    return ($human[1] - $computer[1]);
                } elseif ($human[1] < $computer[1]) {
                    return ($computer[1] - $human[1]);
                }
            }//A function to deterimine the difference in beats between the notes chosen by the user and computer

            if ($human == $computer) {
                echo "<br>Your selection of a <font color = green><b><i>" . $human[0] . "</i></b></font> matches the computer's selection of a <font color = green><b><i>" . $computer[0] . "</i></b></font><br>A " ?>
                &#<?php echo $human[2] . " has ";

                    if ($human[1] != 1) {
                        echo $human[1] . " beats<br><br><br>";
                    }else{
                        echo $human[1] . " beat<br><br><br>";
                    }
                //String displayed if user and computer notes match - "beat if value is 1, "beats" if otherwise
            } else {
                echo "<br>Your selection of a <font color = red><b><i>" . $human[0] . "</i></b></font> DOES NOT MATCH the computer's selection of a <font color = red><b><i>" . $computer[0] . "</i></b></font> .<br> A " ?>
                &#<?php echo $human[2] . " is " . ($human[1] > $computer[1] ? "greater " : "less ");
            }   //String displayed if user and computer notes do not match - includes "greater" or "less" depending on which note has a greater number of beats



            if ($human !== $computer) {
                echo "than a " ?>&#<?php echo $computer[2] . " by " .
                    diff($human, $computer);
                if (diff($human, $computer) != 1) {
                    echo " beats.";
                }else{
                    echo " beat.";
                }
            }//Calls the "difference" function and prints the result - "beat" if the value is 1, "beats" if otherwise
        }else{
            echo "<br>Select a note above to compare it to the computer's choice.";
        }//If nothing is input, this message is displayed to prompt the user

?>

</body>
</html>