<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class AuthorIssuePaperReviewer extends Eloquent

{
    protected $table = 'author_issue_paper_reviewers';

    protected $primaryId = 'id';

    protected $fillable = [ 'author_issue_paper_id', 
                            'user_id', 
                          ];

}