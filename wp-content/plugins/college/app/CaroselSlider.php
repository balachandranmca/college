<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class CaroselSlider extends Eloquent

{
    protected $table = 'carosel_sliders';

    protected $primaryId = 'id';

    protected $fillable = ['image'];

}