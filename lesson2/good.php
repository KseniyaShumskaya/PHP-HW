<?php

$get = $_GET;
$id = $get['id'];
var_dump($id);

$goods = [
    [
        'id' => 1,
        'title' => 'Piano',
        'price' => 3152,
    ],
    [
        'id' => 2,
        'title' => 'Guitar',
        'price' => 3152,
    ],
    [
        'id' => 3,
        'title' => 'Drum',
        'price' => 3152,
    ],
];


$get = $_GET;
$id = $get['id']; // получаем id товара
//получить товар из массива $goods по id, сохранить в переменную $good
$good = $goods[$id-1];
$isAuth = true; // авторизован пользователь или нет
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<!--информация о товаре-->
<h6><?php echo $good['title']?></h6>
<p><?php echo $good['price']?></p>
</section>
<!--если пользователь авторизован - отобразить блок для добавления комментариев, если нет, сообщить, что ему нужно авторизоваться-->
<div>
    <?php if ($isAuth == true):?>
        <p><textarea rows="10" cols="45" placeholder="Ваш комментарий"></textarea></p>
    <?php else: ?>
        <p>Необходимо зарегистрироваться</p>
    <?php endif; ?>
</div>

</body>
</html>

