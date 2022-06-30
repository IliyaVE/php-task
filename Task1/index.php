<?php

$text = "До1ро2гие д23рузья, повышение уровня гражданского с4ознания влечет за собой процесс внедре3ния и модернизации направлений пр3огрессивного развития! Таким образ4ом, постоянное информаци5онно-техническое обеспечение нашей деят6ельности иг8рает важную роль в формировании соот85ветствующих условий активизации! Сообр0ажения высшего поря9дка, а так9же сло0жив56шаяся структура организации треб0ует о5т на5с ана567лиза экономической целесообра8зности прини5678маемых реше7ний!";

$textReplaced = preg_replace('(\W{1,})', ' ', $text);

$arr = explode(' ', $textReplaced);

#1

$start1 = microtime(true);
$result[0]['result'] = array_reduce($arr, function ($x, $item) {
    return $x += (int) $item;
});
$finish1 = microtime(true);

#2

$start2 = microtime(true);
$x = 0;
foreach ($arr as $item) {
    $x += (int) $item;
}
$result[1]['result'] = $x;
$finish2 = microtime(true);

#3

$start3 = microtime(true);
$result[2]['result'] = array_sum($arr);
$finish3 = microtime(true);

$result[0]['time'] = round($finish1-$start1, 11);
$result[1]['time'] = round($finish2-$start2, 11);
$result[2]['time'] = round($finish3-$start3, 11);

print_r($result);

