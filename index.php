<?php 

?> 
<!DOCTYPE html> 
<html> 
<head> 
<title>Онлайн решение квадратных уравнений</title> 
</head> 
<body> 

<h1>Решение квадратных уравнений</h1> 

</body> 
</html> 

<form method="POST"> 
Введите коэффиценты:<br> 
<input name="a" value="" >&middot; X<sup>2</sup> + 
<input name="b" value="" >&middot; X + 
<input name="c" value="" > = 0 <br> 
<br> 
<input type="submit" value="Решить это"> 
</form> 

<p>Ответ:</p> 


<?php { 

$a = ($_POST['a']); 
$b = ($_POST['b']); 
$c = ($_POST['c']); 

echo 'A=' . $a . '<br>'; 
echo 'B=' . $b . '<br>'; 
echo 'C=' . $c . '<br>'; 
echo '<br>';

echo 'D=' . $d=$b*$b-4*$a*$c . '<br>'; 

switch ($d) { 
case ($d>0): 
echo 'Имеет два решения' . '<br>'; 
echo 'X<sub>1</sub>=' . $x=(-$b+sqrt($d))/(2*$a) . '<br>'; 
echo 'X<sub>2</sub>=' . $y=(-$b-sqrt($d))/(2*$a) . '<br>'; 
break; 
case ($d==0): 
echo 'Одно решение' . '<br>'; 
echo 'X=' . $r=(-$b)/(2*$a) ; 
break; 
case ($d<0): 
echo 'Корней нет'; 
break; 
}


?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
Решение квадратных уравнений от 
<a href="https://vk.com/komkovich228" target="_blank">Кирилла</a>:)))<br>
Скинуть на лечение 5132 2304 3351 6963 или QIWI 8-708-522-86-06
<?