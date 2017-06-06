<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Journal extends Eloquent

{
    protected $table = 'journals';

    protected $primaryId = 'id';

    protected $fillable = ['name', 'issn_no', 'color', 'des', 'images', 'impact_no', 'header_img', 'referrer_no'];

}