

<table class="table-fill" border="3px">
<thead>
<tr>
<th class="text-left">From</th>
<th class="text-left">Message</th>
<th class="text-left">Time</th>

</tr>
</thead>
<?php

include_once "db.php";
{
    $Fromusername=$r['Fromusername'];
    $Message=$r['Message'];
    $time=$r['time'];
    echo '<tr>
        
        <td>'.$Fromusername.'</td>
        <td>'.$Message.'</td>
        <td>'.$time.'</td>
        </tr>';

 } 

?>
</table>
  

