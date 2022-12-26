<?php
/* ДОМАШНЕЕ ЗАДАНИЕ №2
3. Вывести дату и время до нового года 2023 (сколько осталось)
4. Сгенерируйте число от 10 до 100, это будет кол-во дней, прибавьте сгенерированное кол-во дней к текущей дате и выведите дату
5. Выведите возраст человека по его дате рождения. Допустим 06 декабря 1986 дата рождения, сегодня 25 ноября 2022, возраст 35.
 */
/*1. Вывести две даты (+ время ) в Лондоне и Париже*/
/*
date_default_timezone_set('Asia/Almaty');
echo 'Asia/Almaty: ' . date('H:i:s d.m.Y', time()).'<br>';
date_default_timezone_set('Europe/London');
echo 'London: ' . date('H:i:s d.m.Y', time()).'<br>';
date_default_timezone_set('Europe/Paris');
echo 'Paris: ' . date('H:i:s d.m.Y', time()).'<br>';
*/
/*
2. Вывести дату вашего рождения и кол-во дней до вашего дня рождения от текущего времени
 */
$birthdate = strtotime('1985-10-28');
echo date('d.m.Y', $birthdate) . '<br>';
$mktime = mktime(date('m'), (int)date('d'), date('Y'));
echo date('d.m.Y', $mktime) . '<br>';
$time = ($mktime - $birthdate);
echo date('Y',($time / 365));
