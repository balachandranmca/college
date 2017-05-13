<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Conference extends Eloquent

{
    protected $table = 'conferences';

    protected $primaryId = 'id';

    protected $fillable = ['image', 'description'];

}