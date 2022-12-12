<?php
$title = "Главная страница - страница обо мне";
$year = 2018;
$head = "Информация обо мне";

$searches = array("{{ title }}", "{{ year }}", "{{ head }}");
$replacement = array($title, $year, $head);

$content = file_get_contents("index3.html");
$content = str_replace($searches, $replacement, $content);

echo $content; 
