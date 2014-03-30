<?php
    /**
     * @author MD Mosleh Uddin
     * @Copyright 2013
     */
    include ('connect.php');
    include ('link.php');
    
    $submit = isset($_POST['submit']) ? $_POST['submit']: '';
    
    if ($submit) {
        $car_id = $_POST['car_id'];
        $parts_id = $_POST['parts_id'];
        
        if(mysql_num_rows(mysql_query("SELECT * FROM car_parts WHERE car_id = '$car_id' AND parts_id='$parts_id'"))) {
            echo "
            <script>
            alert('This Part is already Added to the Car');
            </script>
            ";
        }
        else {
            if ($car_id && $parts_id) {
                $getquery = "INSERT INTO car_parts (car_id, parts_id) VALUES ('$car_id', '$parts_id')";
                
                mysql_query($getquery);
                
                echo "
                <script>
                alert('Car Parts Successfully Added to the Car');
                </script>
                ";
            }
        }
    }
    
    $query = mysql_query("SELECT * FROM cars");
    $queryget = mysql_query("SELECT * FROM parts");
    
    echo "
    <div id='add'>
    <b>Add a Parts to Car</b><br><br>
    <form action='add-parts-to-car.php' method='POST'>
    <select name='car_id' class='cb_mnu_01'>
    ";
    
    while ($row = mysql_fetch_assoc($query)) {
        $id = $row['id'];
        $manufacturer = $row['manufacturer'];
        $model = $row['model'];
        
        echo "
        <option value='$id'>$model</option>
        ";
    }
    echo "
    </select>
    <select name='parts_id' class='cb_mnu_01'>
    ";
    
    while ($row = mysql_fetch_assoc($queryget)) {
        $id = $row['id'];
        $manufacturer = $row['manufacturer'];
        $parts_name = $row['parts_name'];
        $parts_price = $row['parts_price'];
        
        echo "
        <option value='$id'>$parts_name</option>
        ";
    }
    
    echo "
    </select><br><br>
    <input type='submit' name='submit' value='Add Part to this Car' class='submit'>
    </form>
    </div>
    ";
    ?>
