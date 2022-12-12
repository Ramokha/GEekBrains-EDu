<?php

//Задание 1
//Ввод данных
$name = readline("Как вас зовут? \n");
$age = readline("Сколько вам лет? \n");
//Вывод данных
echo (string)"Вас зовут $name, вам $age лет \n";

//Задание 2
//Ввод данных
$question1 = readline("Какая задача стоит перед вами сегодня?" . PHP_EOL);
$$question1 = readline("Сколько примерно времени эта задача займет?" . PHP_EOL);

$question2 = readline("Какая задача стоит перед вами сегодня?" . PHP_EOL);
$$question2 = readline("Сколько примерно времени эта задача займет?" . PHP_EOL);

$question3 = readline("Какая задача стоит перед вами сегодня?" . PHP_EOL);
$$question3 = readline("Сколько примерно времени эта задача займет?" . PHP_EOL);
//Логика
$totalTime = ${$question1} + ${$question2} + ${$question3};
//Вывод данных
echo <<< HERE
$name, сегодня у вас запланировано 3 приоритетных задачи на день:
- $question1 (${$question1}ч)
- $question2 (${$question2}ч)
- $question3 (${$question3}ч)
Примерное время выполнения плана = {$totalTime}ч
HERE;