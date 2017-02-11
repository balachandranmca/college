<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class JournalIssuePublish extends Eloquent

{
    protected $table = 'journal_issue_publishes';

    protected $primaryId = 'id';

    protected $fillable = ['issue_id', 'paper_title', 'author', 'page_no', 'pdf_file', 'sno'];

}