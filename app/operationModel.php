<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operationModel extends Model
{
    /**
     * tabulka spojena s modelem
     */
    protected $table = 'OperaceNaUzemi';
    protected $primaryKey = 'id';
}