<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Feedback extends Eloquent

{
    protected $table = 'feedbacks';

    protected $primaryId = 'id';

    protected $fillable = ['name', 'email', 'comments'];

}