<?php
$menus = [
    ['title' => 'Home', 'url' => '/', 'name' => 'home'],
    [
        'title' => 'Supplier and Exportir',
        'url' => '#',
        'name' => 'se',
        'child' => [
            ['title' => 'Semi Husked Coconut', 'url' => '/coconut', 'name' => 'coconut',],
            ['title' => 'Dessicated Coconut', 'url' => '/dessicated-coconut', 'name' => 'dc',],
            ['title' => 'Coconut Palm Sugar', 'url' => '/coconut-palm-sugar', 'name' => 'palm',],
        ]
    ],
    ['title' => 'Trucking', 'url' => '/trucking', 'name' => 'trucking',],
    ['title' => 'Export and Import Clearance', 'url' => '/export-import-clearance', 'name' => 'export',],
    [
        'title' => 'Other Product',
        'url' => '#',
        'name' => 'op',
        'child' => [
            ['title' => 'Dragon Fruit', 'url' => '/dragon-fruit', 'name' => 'dragon'],
            ['title' => 'Robusta Coffe', 'url' => '/robusta-green-been-coffe', 'name' => 'coffe'],
            ['title' => 'Chicken Egg', 'url' => '/chicken-egg', 'name' => 'egg'],
            ['title' => 'Betel Nut', 'url' => '/betel-nut', 'name' => 'nut'],
            // ['title' => 'Pinang', 'url' => '/pinang', 'name' => 'pinang'],
        ]
    ],
];

$item = '';
foreach ($menus as  $menu) {

    if (!array_key_exists('child', $menu)) {
        $item .=  $active[0] == $menu['name'] ? '<li class="list-my-menu"> <a class="my-active" href="' . $menu['url'] . '">' : '<li class="list-my-menu">  <a  href="' . $menu['url'] . '">';
        $item .=  $menu['title'] . '</a>
    </li>';
    } else {
        $item .=  $active[0] == $menu['name'] ? '<li class="list-my-menu has-dropdown"><a class="my-active" href="' . $menu['url'] . '">' : '<li class="list-my-menu has-dropdown"><a href="' . $menu['url'] . '">';
        $item .=  $menu['title'] . '</a>
 
        <ul class="my-menu-dropdown">
        ';
        foreach ($menu['child'] as $child) {
            if ((count($active) - 1) > 0) {

                $item .= $active[1] == $child['name'] ? '<li class="list-my-menu-dropdown"><a class="my-active" href="' . $child['url'] . '">' . $child['title'] . '</a></li>' : '<li class="list-my-menu-dropdown"><a href="' . $child['url'] . '">' . $child['title'] . '</a></li>';
            } else {

                $item .=  '<li class="list-my-menu-dropdown"><a href="' . $child['url'] . '">' . $child['title'] . '</a></li>';
            }
        }

        $item .= '</ul>
            </li>';
    }
}
echo $item;
