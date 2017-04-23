<input type="hidden" id="journal_color" value="<?php echo $journal['color'];?>">
<section class="journal-viewpage-header">
    <div class="container">
        <div class="row">
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
            <p data-toggle="modal" data-target="#issue_no_modal" id="" class="issueno btn btn-primary pull-right">Impact No - <span><?php echo $journal['impact_no'];?></span></p>
            <div class="modal fade" id="issue_no_modal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Impact Details</h4>
                        </div>
                        <div class="modal-body">
                         <img width="100%" src="<?php echo $journal['images']['url']?>"/>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</section>

<!--<section class="container newsticker">
    <div class="row">
        <div class="col-md-10" id="outer">
            <div id ="tick">
                <li><a href="#">Inviting Proposals to have Tie up with Organizations /Institutions to organize Conference /Seminar /Symposiums.</a></li>
            </div>
            <div id="tick2"></div>
        </div>
    </div>
</section>-->

<section class="container viewpage-content">
    <div class="row">
        <div class="col-md-12">
            <div>
                <?php echo $journal['des'];?>
            </div>
            <div id="tick2"></div>
        </div>
    </div>
</section>

<section class="journal-view-table">
    <div class="container">
        <div class="row">
            <!--<div class="col-md-10 table-content">            
                <table class="table table-bordered">
                    <tbody>
                        <th>Journal</th>
                        <th>Journal Name</th>
                        <th>ISSN Number</th>
                        <th>Current Issue</th>
                        <tr>
                            <td rowspan="3"><img src=""/></td>
                            <td rowspan="3">IJRESTs - Civil Engineering</td>
                            <td rowspan="3">ISSN 2395-6453</td>
                            <td>Volume 2, Number 5 (July 2016)</td>
                        </tr>
                        <tr>
                            <td>Volume 2, Number 5 (July 2016)</td>
                        </tr>
                        <tr>
                            <td>Volume 2, Number 5 (July 2016)</td>
                        </tr>
                    </tbody>
                </table>
            </div>-->
            <?php $i=1; ?>
            <?php foreach ($issue as $key => $value) { ?>
                <div class="col-md-3 col-sm-4 col-xs-6 wow fadeInUp box" data-wow-duration="500ms">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="Current-Issues">
                                <div class="service-icon">
                                    <!--<i class="fa fa-flask"></i>-->
                                    <p><?php echo $volume[$value['volume_id']]?></p>
                                    <?php 
                                    $volumeids[$i] = $value['volume_id'];
                                    $volumeIssues[$value['volume_id']][$i]['issue_no'] = $value['issue_no'];
                                    $volumeIssues[$value['volume_id']][$i]['start_date'] = $value['start_date'];
                                    $volumeIssues[$value['volume_id']][$i]['url'] = get_buzz_url('college_jounal_issues_pages').'?issue_id='.$value['id'];
                                    ?>
                                </div>
                                <div class="Current-Issues-btn text-center">
                                    <!--<a href="<?php echo get_buzz_url('college_jounal_issues_pages').'?issue_id='.$value['id'];?>"></a>-->
                                    <input type="button" class="text-center btn btn-success btn-lg" data-toggle="modal" data-target="#issuemodal<?php echo $value['volume_id'];?>" value="View" name="" id=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
                <!-- Modal -->          
                <?php foreach ($volumeIssues as $key => $issues) { ?>
                    <div class="modal fade" id="issuemodal<?php echo $key;?>" role="dialog">

                        <div class="modal-dialog">
                        
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Issues List</h4>
                            </div>
                            <div class="modal-body">
                            <?php foreach ($issues as $key) { ?>
                                <div class="row list-block">
                                    <div class="col-xs-1 col-sm-1 col-md-3"><?php echo $key['issue_no'];?></div>
                                    <div class="col-xs-1 col-sm-1 col-md-3"><?php echo $key['start_date'];?></div>
                                    <div class="col-xs-1 col-sm-1 col-md-6"><a href="<?php echo $key['url'];?>" class="btn btn-primary btn-large">Go To Issue</a></div>
                                </div>
                            <?php } ?>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                <?php } ?>
        </div>
    </div>
</section>