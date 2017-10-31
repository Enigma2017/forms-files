<?php
 
session_start();
 
$string = "";
 
for ($i = 0; $i < 3; $i++) // Здесь задается количество символов на картинке
 
$string .= chr(rand(97, 122)); // вывод случайных символов от a до z, по html коду
 
$_SESSION['rand_code'] = $string; // создаем сессию, в которой будут храниться отображаемые символы
 
$dir = "fonts/"; // подключаем папку со шрифтом
 
$image = imagecreatetruecolor(170, 60); // размер создаваемой картинки
 
$black = imagecolorallocate($image, 10, 110, 0); // выделение цвета для изображения
 
$color = imagecolorallocate($image, 200, 180, 90); // Цвет символов на картинке
 
$bg = imagecolorallocate($image, 255, 255, 0); // фоновое изображение картинки
 
imagefilledrectangle($image,0,0,399,99,$bg); // рисует заполненный прямоугольник
 
imagettftext ($image, 30, 0, 10, 40, $color, $dir."verdana.ttf", $_SESSION['rand_code']); // добавляем текст на изображение с использованием шрифтов TrueType, а так же сохраняем символы в данной сессии
 
header("Content-type: image/png"); // объявляем тип страницы
 
imagepng($image);
 
?>