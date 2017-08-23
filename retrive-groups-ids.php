<?php
$ids = [];
for ($i=1; $i < 16; $i++) {
  $string = file_get_contents("./group-page-{$i}.json");
  $data = json_decode($string, true);
  foreach ($data['results'] as $group) {
    $ids[] = $group['id'];
  }
}
die('("'.implode('" "', $ids).'")');