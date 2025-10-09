<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method = "POST">
        <input type = "Checkbox" name = "items[]" id="" value= "50"> Notebook (P50.00)<br>
        <input type = "Checkbox" name = "items[]" id="" value= "30"> Pencil (P30.00)<br>
        <input type = "Checkbox" name = "items[]" id="" value= "100"> Bag (P100.00)<br>
        <input type = "Checkbox" name = "items[]" id="" value= "75"> Shoes (P75.00)<br>
        <input type = "Checkbox" name = "items[]" id="" value= "25"> Eraser (P25.00)<br>
        <input type = "Submit"  value= "Submit" name = "Submit"> 
    </form>
    <?php
        if(isset ($_POST['Submit'])){
            if(!empty ($_POST['items'])){
                $total = 0; 
                echo "<h3> You selected: </h3>";

            foreach ($_POST['items'] as $subjects){
                echo "P$price <br>";
                $total += $price;

            }
            echo "Total: P$total";
        }
    }else {
            echo "<p> Please Select at Least one Product. </p>";
        }
    ?>
</body>
</html>