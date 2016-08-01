<?php

$bakery = array("Kek","Kuih","Roti");

echo "I like ".$bakery[0].", ".$bakery[1]." and " .$bakery[2]. " ." . "<br/>";

echo "I like ".$bakery[1].", ".$bakery[2]." and " .$bakery[0]. " .". "<br/>";



?>



<table border="1">

<tr><td><?php echo $bakery[0];?>
</td>
<td><?php echo $bakery[0];?>
</td>

</tr>

<tr><td><?php echo $bakery[1];?>
</td>
<td><?php echo $bakery[2];?>
</td></tr>

<tr><td><?php echo $bakery[2];?>
</td>
<td><?php echo $bakery[1];?>
</td></tr>

</table> 