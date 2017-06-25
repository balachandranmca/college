<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class JournalEditor extends Eloquent

{
    protected $table = 'journal_editors';

    protected $primaryId = 'id';

    protected $fillable = [
                            'image',
                            'type',
                            'name',
                            'qualification',
                            'job_nature',
                            'experience',
                            'department',
                            'specialization',
                            'place',
                            'city_country',
                            'emailid',
                            'mobile_no',
                            'journal_id',
                            'fb_url',
                            'tw_url',
                            'gp_url',
                            'ln_url'
                          ];

}