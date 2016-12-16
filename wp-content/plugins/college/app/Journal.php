<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Journal extends Eloquent

{
    protected $table = 'journals';

    protected $primaryId = 'id';

}