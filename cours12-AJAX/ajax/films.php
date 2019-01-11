<?php

$movies =
[
    ["image" => 'images/bon-dieu.jpg', "legend" => 'Bon_dieu'],
    ["image" => 'images/budapest-hotel.jpg', "legend" => 'Budapest_Hotel'],
    ["image" => 'images/captain-america-2.jpg', "legend" => 'Captain_America_2'],
    ["image" => 'images/grace.jpg', "legend" => 'Grace_de_Monaco'],
    ["image" => 'images/rio-2.jpg', "legend" => 'Rio2'],
    ["image" => 'images/spiderman.jpg', "legend" => 'Spiderman'],
    ["image" => 'images/xmen.jpg', "legend" => 'XMen'],
    ["image" => 'images/yeux-jaunes.jpg', "legend" => 'Yeux_Jaunes']
];

//echo json_encode($movies);

?>

<section id="images">
    <ul>
        <?php foreach($movies as $movie): ?>
            <li>
                <img src="<?=$movie["image"]?>"/>
                <p><?=$movie["legend"]?></p>
            </li>
        <?php endforeach;?>
    </ul>
</section>
