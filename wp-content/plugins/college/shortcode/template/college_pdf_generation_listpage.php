<div class="container volume-listpagetable">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Certificate List</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                      <a href="<?php echo get_buzz_url('college_pdf_generation');?>"><button type="button" class="btn btn-primary">Create New</button></a>
                  </div>
                </div>
              </div>
              <div class="panel-body table-responsive">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th>Issue</th>
                        <th>Author Name</th>   
                    </tr> 
                  </thead>
                  <tbody>
                    <?php foreach ($pdf_list as $key => $value) { ?>
                        <tr>
                        <td><?php echo $authorIssuePapers[$value['author_issue_paper_id']];?></td>
                        <td><?php echo $value['name'];?></td>
                        </tr>
                    <?php } ?>   
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    </div>
</div>