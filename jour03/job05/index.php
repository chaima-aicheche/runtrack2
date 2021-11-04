<?php
$str= "On n est pas le meilleur quand on le croit mais quand on le sait";
$dic['consonnes']=[];
$dic['voyelles']=[];
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'I', 'E', 'I', 'O', 'U', 'Y'];

foreach (str_split($str) as $value)
{
    if (in_array($value,$voyelles ))
    {
        $dic['voyelles'][] =$value;
    }
    elseif($value!=" ")
    {
        $dic['consonnes'][]=$value;
    }
}

?>

<table>
<thead>
<tr>
<th>
    voyelles
    
</th>
    <th>
    consonnes
    </th>
</tr>


</thead>
<tbody>
    
    <tr>
    <td>
        <?php
        echo count($dic['voyelles'])
        
        ?>
    </td>
    <td>
        <?php
        echo count($dic['consonnes'])
        
        ?>
    <td> 
        

    </td>
    </tr>
</tbody>
</table>

