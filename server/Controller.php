<?php
/**
 * Created by PhpStorm.
 * User: Marejean
 * Date: 7/14/16
 * Time: 10:49 PM
 */

include_once "DatabaseConnector.php";


class Controller extends DatabaseConnector {

    function displayProducts() {
        $this->openConnection();

        $query = $this->dbHolder->prepare("SELECT * FROM products;");
        $query->execute();

        $this->closeConnection();

        $output = "<tr>";
        $counter = 1;
        while($data = $query->fetch()) {
            if($counter%3==0)
                $output .= "<td onclick='addToCart(".$data[0].")' id='".$data[0]."'><span>Voodoo VOOD".$data[0]."<br />Php ".$data[2]."<br />available</span><br /><img src='../images/voodoo/".$data[1]."' /></td></tr><tr>";
            else
                $output .= "<td onclick='addToCart(".$data[0].")' id='".$data[0]."'><span>Voodoo VOOD".$data[0]."<br />Php ".$data[2]."<br />available</span><br /><img src='../images/voodoo/".$data[1]."' /></td>";
            $counter++;
        }
        echo $output;

        $this->closeConnection();
    }

} 