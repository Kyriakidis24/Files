<html>
<?php
$rows = array(
0 =>array(
     'key' => 'Tires', 
     'value' => '100', ),
1 => array(
  'key'=>'oil',
  'value'=>'10',
),
2 => array(
  'key'=>'Spark Plugs',
  'value'=>'4',
),
);
echo "<table border=1>
      <tr><td>
            key 
          </td>
          <td>
            value
          </td>
          
      </tr>";
foreach ($rows as $row)
{
 echo "<tr>";
 echo "<td>" . $row['key'] . "</td>";
 echo "<td>" . $row['value'] . "</td>";
 echo "</tr>";
}
?>
  </html>
