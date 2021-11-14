<?php
$data = [
    ['img' => './img/kelapa/2.jpeg', 'url' => '/coconut', 'title' => 'Coconut', 'slug' => 'coconut'],
    ['img' => './img/kelapa/11.jpeg', 'url' => '/trucking', 'title' => 'Trucking', 'slug' => 'trucking'],
    ['img' => './img/kelapa/kopi-1.jpeg', 'url' => '/robusta-green-been-coffe', 'title' => 'Robusta Green Been Coffe', 'slug' => 'coffe'],
    ['img' => './img/kelapa/palm(3).jpeg', 'url' => '/coconut-palm-sugar', 'title' => 'Coconut Palm Sugar', 'slug' => 'palm'],
    ['img' => './img/kelapa/egg(2).jpeg', 'url' => '/chicken-egg', 'title' => 'Chicken Egg', 'slug' => 'egg'],
    ['img' => './img/kelapa/9.jpeg', 'url' => '/export-import-clearance', 'title' => 'Export and Import Clearance', 'slug' => 'export'],
    ['img' => './img/kelapa/8.jpeg', 'url' => '/dessicated-coconut', 'title' => 'Dessicated Coconut', 'slug' => 'dc'],
    ['img' => './img/kelapa/10.jpeg', 'url' => '/dragon-fruit', 'title' => 'Dragon Fruit', 'slug' => 'dragon'],
    ['img' => './img/kelapa/betel-nut(1).jpeg', 'url' => '/betel-nut', 'title' => 'Betel Nut', 'slug' => 'nut'],
];
foreach ($data as $item) {
    if ($hideItem == 'all' || $hideItem != $item['slug']) {
        echo '
        <div class="card anim" data-animation="flipInX">
        <a href="' . $item['url'] . '"><img style="width: 100%" src="' . $item['img'] . '" />
            <p style="color: #fff; padding-bottom: 5px">' . $item['title'] . '</p>
        </a>
        </div>';
    };
}
