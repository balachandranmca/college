<input type="hidden" id="journal_color" value="<?php echo $journal['color'];?>">
<section class="journal-viewpage-header">
    <div class="container">
        <div class="header">
            <div class="header-img">
                <img src="<?php echo site_url();?>/wp-content/themes/twentyfourteen/img/header-logo.png"/>
            </div>
            <div class="title">
                <p>Deepam Publication's</p>
                <h2>International Jounernal of Research in Engineering,</br>
                Science and Technologies (IJRESTs)</h2>
            </div>
            <div class="issn-no">
                <p><?php echo $journal['issn_no']?> (Online)</p>
                <h1><?php echo $journal['name']?></h1>
            </div>
        </div>
    </div> 
</section>

<section class="container newsticker">
    <div class="row">
        <div class="col-md-10" id="outer">
            <div id ="tick">
                <li><a href="#">Inviting Proposals to have Tie up with Organizations /Institutions to organize Conference /Seminar /Symposiums.</a></li>
            </div>
            <div id="tick2"></div>
        </div>
    </div>
</section>

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
            <?php foreach ($issue as $key => $value) { ?>
                <div class="col-md-3 col-sm-4 col-xs-6 wow fadeInUp box" data-wow-duration="500ms">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="Current-Issues">
                                <div class="service-icon">
                                    <!--<i class="fa fa-flask"></i>-->
                                    <p><?php echo $volume[$value['volume_id']]?></p>
                                    <p><?php echo $value['issue_no'];?></p>
                                    <p><?php echo $value['start_date'];?></p>
                                </div>
                                <div class="Current-Issues-btn text-center">
                                    <a href="<?php echo get_buzz_url('college_jounal_issues_pages').'?issue_id='.$value['id'];?>"><input type="button" class="text-center btn btn-success btn-lg" value="View" name="" id=""/></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>