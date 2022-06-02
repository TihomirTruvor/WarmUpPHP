<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">
    <?php 
        /*$myVariable = "Hello!";
        $product = [1, 'Iphone', 'Описание', '2000р']; //индексированный массив
        $product2 = ['id' => 1, // ассоциативный массив
                    'name' => 'Iphone2',
                    'desc' => 'Описание2',
                    'price' => '2000'];
        echo $myVariable . '<br>';
        //var_dump($myVariable);
        //var_dump($product);
        echo $product2['name'] . '<br>';

        $product2['count'] = 152; // добавление записи в массив
        $product2[] = []; //добавление массива в массив
        var_dump($product2);*/

        $goods = [
            [
            'id' => 1,
            'name' => 'Iphone3',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vitae quaerat nam labore vel voluptas omnis saepe ipsum esse. Ipsa architecto quasi voluptate, vel totam voluptates vero nemo vitae molestias.',
            'price' => '2000'
            ],
            [
            'id' => 2,
            'name' => 'Iphone4',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vitae quaerat nam labore vel voluptas omnis saepe ipsum esse. Ipsa architecto quasi voluptate, vel totam voluptates vero nemo vitae molestias.',
            'price' => '2500'
            ],
            [
            'id' => 3,
            'name' => 'Iphone5',
            'desc' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vitae quaerat nam labore vel voluptas omnis saepe ipsum esse. Ipsa architecto quasi voluptate, vel totam voluptates vero nemo vitae molestias.',
            'price' => '3000'
            ]
        ];
        /*echo $goods[1]['name'] . '<br>'; //вывод поля вложенного массива

        foreach ($goods as $key => $good) { // перебор массива
            echo 'Индекс массива: ' . $key . '<br>';
            echo $good['id'] . '<br>';
            echo $good['name'] . '<br>';
            echo $good['desc'] . '<br>';
            echo $good['price'] . '<br>';
            echo '<hr>';
        };*/

        $page = $_GET['page']; // запись в переменную $page параметра page из суперглобального массива _GET

        if (!isset($page)) { //если нет переменной $page
            require('templates/main.php'); //подключение контента главной
        } elseif ($page == 'shop') {
            require('templates/shop.php'); // подключение контента магазина
        } elseif ($page == 'product'){
            $id = $_GET['id'];
            $good = [];
            foreach ($goods as $product) {
                if ($product['id'] == $id) {
                    $good = $product;
                    break;
                }
            }
            require('templates/openedProduct.php');
        }
    ?>
</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, пр-т Ленина, д. 1 офис 304
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brandshop</div>
    </div>
</footer>
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
</body>
</html>