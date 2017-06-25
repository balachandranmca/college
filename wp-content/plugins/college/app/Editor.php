<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Editor extends Eloquent

{
    protected $table = 'editors';

    protected $primaryId = 'id';

    protected $fillable = ['name', 'phone_no', 'email_id', 'files', 'photo', 'specialization'];

}