<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class JournalEditor extends Eloquent

{
    protected $table = 'journal_editors';

    protected $primaryId = 'id';

    protected $fillable = ['image', 'type', 'personal_details', 'journal_id'];

}