<?php

function subMenu($data,$id)
{
    foreach ($data as $item)
    {
        if($item['parent_id'] == $id)
        {
            echo '<li><a href="store/">'.$item['name'].'</a>';
            subMenu($data,$item['id']);
            echo '</li>';
        }
    }
}
?>
