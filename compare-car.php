<?php
    /**
     * @author MD Mosleh Uddin
     * @Copyright 2013
     */
    include ('connect.php');
    include ('link.php');
    
    $query1 = mysql_query("SELECT * FROM cars");
    $query5 = mysql_query("SELECT * FROM cars");
    
    echo "
    <div id='add'>
    <b>Compare Two Car</b><br><br>
    <form action='compare-car.php' method='POST'>
    <select name='car_id1' class='cb_mnu_01'>
    ";
    
    while ($row1 = mysql_fetch_assoc($query1)) {
        $id = $row1['id'];
        $manufacturer = $row1['manufacturer'];
        $model = $row1['model'];
        
        echo "
        <option value='$id'>$model</option>
        ";
    }
    
    echo "
    </select>
    <select name='car_id2' class='cb_mnu_01'>
    ";
    
    while ($row5 = mysql_fetch_assoc($query5)) {
        $id = $row5['id'];
        $manufacturer = $row5['manufacturer'];
        $model = $row5['model'];
        
        echo "
        <option value='$id'>$model</option>
        ";
    }

    echo "
    </select>
    <br><br>
    <input type='submit' name='submit' value='Compare' class='submit'>
    </form>
    ";
    
    $submit = isset($_POST['submit']) ? $_POST['submit']: '';
    $car_id1 = $_POST['car_id1'];
    $query2 = mysql_query("SELECT * FROM cars WHERE id='$car_id1'");
    $query3 = mysql_query("SELECT * FROM car_parts WHERE car_id='$car_id1'");
    
    $car_id2 = $_POST['car_id2'];
    $query6 = mysql_query("SELECT * FROM cars WHERE id='$car_id2'");
    $query7 = mysql_query("SELECT * FROM car_parts WHERE car_id='$car_id2'");
    
    if ($submit) {
        echo "
        <br>
        <table bgcolor='#ffffff' width='800px'>
        <font>
        <tr><td width='400px'>
        ";
        while ($row2 = mysql_fetch_assoc($query2)) {
            $id = $row2['id'];
            $manufacturer = $row2['manufacturer'];
            $model = $row2['model'];

            echo "
            <b>$model</b><br><hr>
            ";
        }
        
        echo "
        <table>
        ";
        
        while ($row3 = mysql_fetch_assoc($query3)) {
            $car_id = $row3['car_id'];
            $parts_id = $row3['parts_id'];
            
            $query4 = mysql_query("SELECT * FROM parts WHERE id='$parts_id'");
            
            while ($row4 = mysql_fetch_assoc($query4)) {
                $id = $row4['id'];
                $parts_name = $row4['parts_name'];
                $parts_price = $row4['parts_price'];
                $sum += $parts_price;
                
                echo "
                <tr>
                <td width='200px'>
                $parts_name
                </td>
                <td align='right'>
                $parts_price
                </td>
                </tr>
                ";
            }
        }
        
        echo "
        <tr>
        <td>
        <hr>
        Total:
        </td>
        <td>
        <hr>
        <b>$sum</b>
        </td>
        </tr>
        </table>
        ";
        
        echo "
        </td><td>
        <table>
        ";
        
        while ($row6 = mysql_fetch_assoc($query6)) {
            $id = $row6['id'];
            $manufacturer = $row6['manufacturer'];
            $model1 = $row6['model'];
            
            echo "
            <b>$model1</b><br><hr>
            ";
        }
        
        while ($row7 = mysql_fetch_assoc($query7)) {
            $car_id = $row7['car_id'];
            $parts_id = $row7['parts_id'];
            
            $query8 = mysql_query("SELECT * FROM parts WHERE id='$parts_id'");
            
            while ($row8 = mysql_fetch_assoc($query8)) {
                $id = $row8['id'];
                $parts_name = $row8['parts_name'];
                $parts_price = $row8['parts_price'];
                $sum2 += $parts_price;
                
                echo "
                <tr>
                <td width='200px'>
                $parts_name
                </td>
                <td align='right'>
                $parts_price
                </td>
                </tr>
                ";
            }
        }
        
        echo "
        <tr>
        <td>
        <hr>
        Total:
        </td>
        <td>
        <hr>
        <b>$sum2</b>
        </td>
        </tr>
        </table>
        ";
        
        echo "
        </td></tr>
        <tr>
        <td>
        ";
        
        if ($sum > $sum2) {
            $diff = $sum - $sum2;
            echo "
            <hr>
            <b>$model</b> is expensive than <b>$model1</b><br><br>
            Difference : <b>$diff</b>
            <hr>
            ";
        }
        else {
            $diff = $sum2 - $sum;
            echo "
            <hr>
            <b>$model1</b> is expensive than <b>$model</b><br><br>
            Difference : <b>$diff</b>
            <hr>
            ";
        }
        
        echo "
        </td>
        </tr>
        <tr>
        <td>
        <button onClick='window.print()' class='button'>Print This Page</button>
        </td>
        </tr>
        </table>
        ";
    }

?>