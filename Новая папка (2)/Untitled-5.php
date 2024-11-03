<html> 
<head>
    <meta charset="UTF-8">
    <title>Дни недели</title>
</head>
<body>

<?php

function Week($day) {
    $days = [
        'Понедельник' => 'Понедельник',
        'Вторник' => 'Вторник',
        'Среда' => 'Среда',
        'Четверг' => 'Четверг',
        'Пятница' => 'Пятница',
        'Суббота' => 'Суббота',
        'Воскресенье' => 'Воскресенье'
    ];

    return isset($days[$day]) ? $days[$day] : '';
}


if (isset($_POST['day'])) {
    $selectedDay = $_POST['day'];
    echo "<h2>Сегодня: " . Week($selectedDay) . "</h2>";
}
?>

<form method="post">
    <button type="submit" name="day" value="Понедельник">Понедельник</button>
    <button type="submit" name="day" value="Вторник">Вторник</button>
    <button type="submit" name="day" value="Среда">Среда</button>
    <button type="submit" name="day" value="Четверг">Четверг</button>
    <button type="submit" name="day" value="Пятница">Пятница</button>
    <button type="submit" name="day" value="Суббота">Суббота</button>
    <button type="submit" name="day" value="Воскресенье">Воскресенье</button>
</form>

</body>
</html>