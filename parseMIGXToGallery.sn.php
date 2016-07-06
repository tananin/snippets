<?php
$input = $modx->fromJSON($input);
$output = array();
if (!$input || empty($tpl)) return 'no stuff';
foreach ($input as $row) {
    if (isset($set) && !empty($set) && ($set != $row['set'])) continue;
    $output[] = $modx->getChunk($tpl, $row);
}
return implode("\n", $output);