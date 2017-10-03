<?php
$inventory = array(

   array("type"=>"fruit", "price"=>3.50),
   array("type"=>"milk", "price"=>2.90),
   array("type"=>"pork", "price"=>5.43),

);

function invenDescSort($item1,$item2)
{
    if ($item1['price'] == $item2['price']) return 0;
    return ($item1['price'] < $item2['price']) ? 1 : -1;
}
usort($inventory,'invenDescSort');
print_r($inventory);
?>
<br><hr><br>
<?php 
$salsa = array(
	array('id' => '1', 'name' => 'margherita', 'amount' => 1000),
	array('id' => '2', 'name' => 'Funghi', 'amount' => 10),
	array('id' => '2', 'name' => 'Funghi', 'amount' => 10),
	array('id' => '3', 'name' => 'Capricosa', 'amount' => 1),
	
);

function posortujRosnaca($item1,$item2)
{
    if ($item1['amount'] == $item2['amount']) return 0;
    return ($item1['amount'] > $item2['amount']) ? 1 : -1;
}
usort($salsa, 'posortujRosnaca');
echo '<pre>';
print_r($salsa);
echo '</pre>';