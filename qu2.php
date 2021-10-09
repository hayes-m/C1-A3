<!DOCTYPE html>
<html>
<head>
    <title>QUESTION 2</title>
</head>
<body>

<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
<!--Allows for easier viewing on mobile-->

<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <!--Submits form to same location as found-->

        Number: <input type="number" name="num">
        Creature: <input type="text" name="creature">
        <input type="Submit" name="Submit" value="Submit">
</form><!--Displays input area-->

<?php
//Opens php coding area

    if (isset($_GET["Submit"])) {
        //Ensures text boxes are filled before taking any action

    $num = $_GET["num"];
    $creature = $single = $_GET["creature"];
    //Declares variables and links values to user input in HTML form

                if ($num > 1)  {
                $creature = $creature . "s";
                        }//Adds an "s" onto the end of the creature input, ensuring plural semantics for more than one creature

                echo "<br>$num little $creature went swimming one day <br>";
                //First line of the rhyme

                for($num-=1; $num>0; --$num) {
                //Loop to reduce number of creatures until there is only one left

                        echo "Over the hill and far away <br> 
                        Mother $single said ";

                        if ($single == "duck" or $single == "Duck"){
                            echo "<i>quack, quack, quack</i><br>";
                            //If the input is "duck" the creature will say "quack"
                                }else{
                        echo "<i>*indecipherable mumbling*</i><br>";}
                        //Otherwise it doesn't make sense for the animal to "quack"

                        echo "But only $num little ";

                 if ($num > 1){
                         echo "$creature came back.<br><br>
                         $num little $creature went swimming one day <br>";
                         //The beginning of the rhyme again with the decreased number of animals
                                 }else{
                         echo rtrim ($creature,"s");
                         //Trimming the creature's "s" in the case of a singular creature
                         echo " came back.<br><br>";
                                 }
                            }
                }else{
            echo "<br>Please input a number and a creature<br><br>";
        }//If nothing is input, this message is displayed to prompt the user
?>

</body>
</html>
				