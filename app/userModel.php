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
        $found = 0;
        $result = $this::all();
        foreach ($result as $key => $value) {
            $found++;
        }
        return $found;
    }
}
