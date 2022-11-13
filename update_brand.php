<?php
require('../core.php');
require('../brand_controller.php');

$brand= select_allbrand();

function display_all_brand_fxn(){

    //run the controller
    $run_item =select_allbrand();


   echo
   "
<h3> Database Information </h3>
<table class='table table-dark table-striped table-bordered'>

<thead>
    <tr>
        <th> Brand id  </th>
        <th> Brand name</th>
        <th> Phone number</th>
        <th> Actions  </th>

    </tr>
<thead>";


foreach($run_item as $row)
{
    echo 
    "
    <tbody>
    <tr>
    <td>".$row['brand_id']."</td>
    <td> ".$row['brand_name']."  </td>
    <td>
    <a href = '../Updatebrand.php?id=".$row['brand_id']."'>Update</a>
    </td>
    ";


}

echo 
" </tbody> </table>";

}


display_all_brand_fxn();

?>
