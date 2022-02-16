<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Пример веб-страницы</title>
</head>

<body>
    <?php
    //Тема 23 №1
    //Не запуская код....

    //Тема 23 №3
    //Не запуская код....

    //Тема 23 №5
    //Не запуская код....

    //Тема 23 №7
    //Не запуская код....

    //Тема 23 №9
    //Не запуская код....

    //Тема 25 №1
    if ( !($num1 >= 0 or $num2 <= 10)) {
        echo '+';
    } else {
        echo '-';
    }

    //Тема 27 №1
    //Не запуская код....

    //Тема 27 №3
    //Не запуская код....

    //Тема 27 №5
    //Не запуская код....

    //Тема 27 №7
    //Не запуская код....

    //Тема 29 №1
    $test = 10;
	
	if ($test == 10) {
		echo 'Верно';
	} else {
	}

    //Тема 29 №3
    if ($test == 0)  echo 'верно';

    //Тема 31 №1
    $min = 10;
	
	if ($min >= 0 and $min <= 19) {
		echo '1 треть';
	}
	if ($min >= 20 and $min <= 39) {
		echo '2 треть';
	}
	if ($min >= 40 and $min <= 59) {
		echo '3 треть';
	}
    
	//Тема 31 №3
    $a = 10;
	
	if ($a % 2 ==0 ) {
		echo 'Число четное';
	} else {
		echo 'Число нечетное';
	}

    //Тема 33 №1
    $num = 2;
    switch ($num) {
		case '1':
			echo 'Зима';
		break;
		case '2':
			echo 'Весна';
		break;
		case '3':
			echo 'Лето';
		break;
        case '4':
			echo 'Осень';
		break;
		default:
			echo 'Ошибка';
		break;
	}

    // Тема 35 №1
    $user = ['name' => 'john', 'age' => 30];
	
		$name = $user['name'] ?? 'unknown';

    // Тема 37 №1
    $i = 1; 
	while ($i <= 100) {
		echo $i; 
		$i++;   
	}

    // Тема 37 №3
    $i = 0; 
	while ($i <= 100) {
		echo $i; 
		$i+=2;   
	}

    // Тема 37 №5
    $i = 30; 
	while ($i >= 0) {
		echo $i; 
		$i--;   
	}

    // Тема 39 №1
    for ($i = 1; $i <= 100; $i++) {
		echo $i; 
	}

    // Тема 39 №3
    for ($q = 0; $q<=100; $q+=2) {
		echo $q;
    }

     // Тема 39 №5
     for ($q = 100; $q>=0; $q--) {
		echo $q;
    }

    // Тема 41 №1
    $arr = ['a', 'b', 'c', 'd', 'e'];
	
	foreach ($arr as $elem) {
		echo $elem . '<br>';
	}

    // Тема 41 №3
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    $res = 0;
	foreach ($arr as $elem) {
		$res += $elem / 2;
	}
	echo $res;

    // Тема 43 №1
    $arr = [1, 2, 3, 4, 5];
    foreach ($arr as $elem) {
		if ($elem % 2 !== 0) {
			echo $elem;
		}
	}
  
    // Тема 43 №3
    $arr = [2, 5, 9, -4, -5];
    $sum = 0;
    foreach ($arr as $elem) {
        
		if ($elem > 0) {
            $sum +=$elem;
			echo $sum;
        }
	}
 
    // Тема 43 №5
    $arr = [1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 7=>'Воскресенье'];
	foreach ($arr as $key=>$val) {
		if ($key == 6 or $key == 7){
			echo '<strong>'.$val.'</strong>'.'<br>';
		} else{
			echo $val.'<br>';
		}
	}

    // Тема 43 
    // Нет заданий

    // Тема 45
    // Нет заданий

    // Тема 49 №1
    $num = 51;
	
	$flag = true;
	for ($i = 2; $i < $num; $i++) {
		if ($num % $i === 0) {
			$flag = false;
			break; // выйдем из цикла
		}
	}
	
	var_dump($flag);

    // Тема 51 №1
    $str = '';
	for ($i = 0; $i < 5; $i++) {
		$str .= '0';
	}
	echo $str;

    // Тема 51 №3
    $str = '';
	for ($i = 9; $i >= 1; $i--) {
		$str = $str . $i;
	}
	echo $str;

    // Тема 53 №1
	$arr = [];
	for ($i = 0; $i <= 9; $i++) {
		$arr[] = $i + 1;
	}
	var_dump($arr);

    // Тема 53 №3
    $arr = [];
	for ($i = 0; $i <= 99; $i++) {
		$arr[] = $i + 1;
	}
	var_dump($arr);

    // Тема 55 №1
    $arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	for ($i = 0; $i < $length; $i++) {
		$arr[$i] *= $arr[$i];
	}
	var_dump($arr);

    // Тема 55 №3
    $arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	for ($i = 0; $i < $length; $i++) {
		$arr[$i] += 10;
	}
	var_dump($arr);

    // Тема 57 №1
    $arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 0; $i < $length; $i++) {
		echo $arr[$i + 1];
	}

    // Тема 57 №3
    $arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	
	for ($i = 1; $i < $length; $i++) {
		echo $arr[$i - 2];
	}

    // Тема 57 №5
    $arr = [1, 2, 3, 4, 5];
	$length = count($arr);
	for ($i = 1; $i < $length; $i++) {
		echo $arr[$i - 1] + $arr[$i] + $arr[$i];
	}

    // Тема 59 №1
    $str = '';
	for ($i = 0; $i < 5; $i++) {
		$str .= 'xx';
		echo $str . '<br>';
	}

    // Тема 59 №3
    for ($i = 5; $i >= 1; $i--) {
		$str = '';
		for ($j = 0; $j < $i; $j++) {
			$str .= 'xx';
		}
		echo $str . '<br>';
	}

    // Тема 61 №1
    for ($i = 1; $i <= 100; $i++) {
		echo $i . '<br>';
	}

    // Тема 61 №3
    for ($i = 0; $i <= 100; $i += 2) {
		echo $i . '<br>';
	}

    // Тема 61 №5
    $arr = [];
	for ($i = 1; $i <= 10; $i++) {
		$arr[] = $i;
	}
	var_dump($arr);

    // Тема 61 №7
    $arr = [-1,2,-2,4,5,8,5,11,5];
    $flag = false;
    foreach ($arr as $flag) {
        if($flag ==5){
            $flag=true;
            break;
        }
    }
    if($flag===true){
        echo 'there is';
    } else{
        echo 'no';
    }

    // Тема 61 №9
    $arr = [1, 2, 3, 4, 6, 9, 11];
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += $elem * $elem;
	}
	echo $sum;

    // Тема 61 №11
    $n = 5;
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    echo $factorial;

    // Тема 63 №1
    $arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
    $sum = 0;
    foreach ($arr as $sub) {
		foreach ($sub as $elem) {
			 $sum+=$elem;
		}
        echo $sum;
	}
    ?>
</body>

</html>