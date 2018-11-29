<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    /**
     * tabulka spojena s modelem
     */
    protected $table = 'users';

    public function findUser($id, $pwd){
        
    }
}
