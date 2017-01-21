<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Issue extends Eloquent

{
    protected $table = 'issues';

    protected $primaryId = 'id';

    protected $fillable = ['issue_no', 'name', 'start_date', 'volume_id', 'journal_id'];

}