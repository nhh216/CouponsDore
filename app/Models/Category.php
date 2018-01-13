<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public static function getData(){
        return self::select()->where()->limit()->get();
    }

    public static  function subMenu($data,$id)
    {
        echo "ul";
        foreach ($data as $item)
        {
            if($item['parent_id']==$id)
            {
                echo '<li><a href="" ';
                subMenu($data,$item['id']);
                echo '</li>';
            }
        }
        echo "</ul>";
    }
}