<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class familiaActionsModel extends Model
{
    /**
     * tabulka spojena s modelem
     */
    protected $table = 'CinnostFamilii';
    protected $primaryKey = 'id';
}