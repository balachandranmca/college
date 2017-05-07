<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class PublishPaperDownload extends Eloquent

{
    protected $table = 'publish_paper_downloads';

    protected $primaryId = 'id';

    protected $fillable = ['user_id', 'paper_id'];

}