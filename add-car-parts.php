<?php
    /**
     * @author MD Mosleh Uddin
     * @Copyright 2013
     */
    include ('connect.php');
    include ('link.php');
    
    $submit = isset($_POST['submit']) ? $_POST['submit']: '';
    
    if ($submit) {
        $manufacturer = $_POST['manufacturer'];
        $parts_name = $_POST['parts_name'];
        $parts_price = $_POST['parts_price'];
        
        if ($parts_name && $parts_price) {
            $query = "INSERT INTO parts (manufacturer, parts_name, parts_price) VALUES ('$manufacturer','$parts_name', '$parts_price')";
            
            mysql_query($query);
            
            echo "
            <script>
            alert('Car Parts Successfully Added!');
            </script>
            ";
        }
    }
    
    echo "
    <div id='add'>
    <form action='add-car-parts.php' method='POST'>
    <table>
    <tr>
    <td><b>Add a Car Parts</b></td>
    </tr>
    <tr>
    <td>Manufacturer:</td>
    <td><input type='text' name='manufacturer' size='50'></td>
    </tr>
    <tr>
    <td>Part Name:</td>
    <td><input type='text' name='parts_name' size='50'></td>
    </tr>
    <tr>
    <td>Part Price:</td>
    <td><input type='text' name='parts_price' size='50'></td>
    </tr>
    <tr>
    <td><input type='submit' name='submit' value='Add a Part' class='submit'></td>
    </tr>
    </table>
    </form>
    </div>
    ";
    ?>

