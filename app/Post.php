<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $sameProperty = 'skdlksdlk';

    function myFunc()
    {
        $text = 'my text';
        return $text;
    }

}
