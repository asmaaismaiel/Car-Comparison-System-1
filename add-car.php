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
        $model = $_POST['model'];
        
        if ($model) {
            $query = "INSERT INTO cars (manufacturer, model) VALUES ('$manufacturer','$model')";
            
            mysql_query($query);
            
            echo "
            <script>
            alert('Car Successfully Created!');
            </script>
            ";
        }
    }
    
    echo "
    <div id='add'>
    <form action='add-car.php' method='POST'>
    <table>
    <tr>
    <td><b>Create a Car</b></td>
    </tr>
    <tr>
    <td>Manufacturer:</td>
    <td><input type='text' name='manufacturer' size='50'></td>
    </tr>
    <tr>
    <td>Model Name:</td>
    <td><input type='text' name='model' size='50'></td>
    </tr>
    <tr>
    <td><input type='submit' name='submit' value='Create a Car' class='submit'></td>
    </tr>
    </table>
    </form>
    </div>
    ";
?>

