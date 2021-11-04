<?php
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'I', 'E', 'I', 'O', 'U', 'Y'];

foreach (str_split($str) as  $voy )
{
    if (in_array($voy, $voyelles))
    {
        echo  "$voy";

    }
}
    ?>