<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class PdfGeneration extends Eloquent

{
    protected $table = 'pdf_generation';

    protected $primaryId = 'id';

    protected $fillable = ['author_issue_paper_id', 'name'];

}