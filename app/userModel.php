<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userModel extends Model
{
    /**
     * tabulka spojena s modelem
     */
    protected $table = 'users';

    /**
     * @param string $name
     * @param string $pwd
     * @return boolean $found
     */
    public function scopeFindUser($name, $pwd){
        $found = false;
        $result = userModel::all();
        foreach ($result as $key => $value) {
            if($value->name == $name && $value->password == $pwd){
                $found = true;
                break;
            }
        }
        return $found;
    }
}
