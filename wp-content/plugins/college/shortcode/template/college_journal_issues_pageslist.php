<input type="hidden" id="journal_color" value="<?php echo $journal['color'];?>">
<!--<section class="journal-viewpage-header">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 header" style="background: #<?php echo $journal['color'];?>;">
            <div class="col-xs-12 col-sm-2 col-md-2 header-img">
                <img src="<?php echo site_url();?>/wp-content/themes/twentyfourteen/img/header-logo.png"/>
            </div>
            <div class="col-xs-12 col-sm-7 col-md-7 title">
                <p>Deepam Publication's</p>
                <h2>International Jounernal of Research in Engineering,</br>
                Science and Technologies (IJRESTs)</h2>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 issn-no">
                <p style="color: #<?php echo $journal['color'];?>;"><?php echo $journal['issn_no']?> (Online)</p>
                <h1 style="color: #<?php echo $journal['color'];?>;"><?php echo $journal['name']?></h1>
            </div>
        </div>
    </div> 
</section>-->

<section class="journal-issuespages">
    <div class="container">
        <div class="row">
            <?php foreach ($journal_issue_publish as $key => $value) { ?>
                <div class="col-xs-12 col-sm-4 col-md-3 issues-details">
                    <div class="panel panel-primary">
                        <div class="cnrflash">
                            <div class="cnrflash-inner">
                                <span class="cnrflash-label">ISSUE</br>
                                    DETAILS</span>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                CURRENT ISSUES</h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h4>PAPER TITLE</h4>
                            </div>
                            <table class="table">
                                <tr>
                                    <td>
                                        <?php echo $value['paper_title'];?>
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        <h4>AUTHOR</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $value['author'];?>
                                    </td>
                                </tr>
                                <tr class="active">
                                <td>
                                        <h4>PAGE NUMBER</h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo $value['page_no'];?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <?php $pdf_file = json_decode($value['pdf_file'],true);
                        
                        ?>
                        <div class="panel-footer">
                            <a href="<?php echo $pdf_file['url'];?>" class="btn btn-danger" download><i class="fa fa-file-pdf-o" aria-hidden="true"></i> &nbsp;FULL PDF</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>