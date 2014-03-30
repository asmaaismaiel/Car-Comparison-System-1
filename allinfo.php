<?php
    include ('connect.php');
    include ('link.php');
    
    $query1 = mysql_query("SELECT * FROM cars");
    $query2 = mysql_query("SELECT * FROM parts");
    
    echo "
    <div id='add'>
    <b>Car List</b><br>
    ";
    while ($row1 = mysql_fetch_assoc($query1)) {
        $id = $row1['id'];
        $manufacturer = $row1['id'];
        $model = $row1['model'];
        
        echo "
        <table bgcolor='#ffffff'>
        <tr>
        <td width='200px'>
        $model
        <td>
        <a href='deletecar.php?car_id=$id'>Delete</a>
        </td>
        <hr>
        </td>
        </tr>
        </table>
        ";
        
    }
    
    echo "
    </div>
    ";
    
    echo "
    <div id='add1'>
    <b>Parts List</b><br>
    ";
    while ($row1 = mysql_fetch_assoc($query2)) {
        $id = $row1['id'];
        $manufacturer = $row1['id'];
        $parts_name = $row1['parts_name'];
        
        echo "
        <table bgcolor='#ffffff'>
        <tr>
        <td width='200px'>
        $parts_name
        <td>
        <a href='deletepart.php?part_id=$id'>Delete</a>
        </td>
        <hr>
        </td>
        </tr>
        </table>
        ";
        
    }
    
    echo "
    </div>
    ";

?>