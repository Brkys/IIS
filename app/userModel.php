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
     * @param Builder $query - nutne jako prvni parametr - predava se automaticky
     * @param string $name
     * @param string $pwd
     * @return boolean $found
     */
    public function scopeFindUser($query, $name, $pwd){
        $found = false;
        $result = $this::all();
        foreach ($result as $key => $value) {
            if($value->name == $name && $value->password == $pwd){
                $found = true;
            }
        }
        return $found;
    }
}
