<?
$tmp = Array
(
    100 => Array('NAME' => 'Бажибина Елена Борисовна', 'PROPS' => Array('weight' => Array('VALUE' => 1.5, 'v' => 1.5))),

    10303 => Array('NAME' => 'Бояринов Сергей Андреевич',	'PROPS' => Array('weight' => Array('VALUE' => 1.7, 'v' => 1.7)))
);

$temp =  Array (
    0 => Array ( 0 => 723, 'PROPS' => Array('weight' => Array('num' => 1442008738))),
    1 => Array ( 0 => 721, 'PROPS' => Array('weight' => Array('num' => 1386802800))),
    2 => Array ( 0 => 718, 'PROPS' => Array('weight' => Array('num' => 1356994800))),

);
function date_compare($a, $b)
{
    $t1 = $a['PROPS']['weight']['num'];

    $t2 = $b['PROPS']['weight']['num'];
    return $t1 - $t2;
}
usort($temp, 'date_compare');

print_r($temp);

