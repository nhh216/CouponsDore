<?php
define("YOURCOUPON_CORE", realpath(__DIR__)."/");
define("YOURCOUPON_PATH", realpath(YOURCOUPON_CORE."../yourcoupon")."/");

define("FRONTEND_PATH", YOURCOUPON_PATH."Frontend/");

if (!function_exists('subMenu')) {
    function subMenu($data,$id)
    {
        $baseURl = asset('/');
        foreach ($data as $item)
        {
            if($item['parent_id'] == $id)
            {
                echo '<li  class="dropdown-menu-2" ><a href=';
                echo $baseURl.$item['slug'].'>'.$item['name'].'</a>';
                subMenu($data,$item['id']);
                echo '</li>';
            }
        }
    }
}