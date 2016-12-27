<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Slider extends Eloquent

{
    protected $table = 'sliders';

    protected $primaryId = 'id';

    protected $fillable = ['image', 'slidername', 'description'];

}