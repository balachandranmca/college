<?php 

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class AuthorIssuePaper extends Eloquent

{
    protected $table = 'author_issue_papers';

    protected $primaryId = 'id';

    protected $fillable = [ 'issue_id', 
                            'user_id', 
                            'paper', 
                            'copyright', 
                            'reviewer_new', 
                            'reviewer_id', 
                            'status'];

}