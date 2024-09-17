<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <h1>ЗАДАНИЕ 1</h1>
    <?

    $array = ['Кокоулин', 'Сидоров', 'Рогин', 'Макаров', 'Бахмет', 'Садыков', 'Елистратов', 'Хусаинова', 'Емельянов', 'Голубин'];
    $expelled = array_pop($array);
    echo "<ul>";
    echo "<li>$expelled</li>";
    ?><br><?
    echo count($array);
    ?><br><?
    if (in_array('Сидоров', $array)) {
        echo "<li>'yes'</li>";
    } else{
        echo 'no';
    }
    echo "</ul>"
    ?>

    <h1>ЗАДАНИЕ 2</h1>

    <?

    $clubs = [
        "Спортивный" => "Сидоров",
        "Художественный" => "Емелина",
        "Музыкальный" => "Иванова",
        "Литературный" => "Петров",
        "Биологический" => "Антонова"
    ];
    
    asort($clubs);
    
    echo "<ul>";
    foreach ($clubs as $club => $surname) {
        echo "<li>$club - $surname</li>";
    }
    echo "</ul>";
    ?>

    <h1>ЗАДАНИЕ 3</h1>

    <?
    
    $student = [
        'Name' => 'Шурик',
        'Surname' => 'Кокоулин',
        'group' => '325',
        'hobby' => ['Фотографирование', 'и другие творческие позывы'],
        'socialMedia' => ['Telegram' => 'KodakPrism', 'instagram' => 'KodakPrism']
    ];
    function printArray($array) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    printArray($student);
    ?>
</body>
</html>