<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Volume extends Eloquent

{
    protected $table = 'volumes';

    protected $primaryId = 'id';

    protected $fillable = ['name'];

}