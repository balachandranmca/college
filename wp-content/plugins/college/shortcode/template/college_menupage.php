<?php 
    $withdraw = get_option('withdraw');
    if($withdraw){
        $with_draw = json_decode($withdraw, 1); 
    }
    $samplepaper = get_option('samplepaper');
    if($samplepaper){
        $sample_paper = json_decode($samplepaper, 1);
    }
    $papertemplates = get_option('papertemplates');
    if($papertemplates){
        $paper_templates = json_decode($papertemplates, 1);
    }
    $copyright = get_option('copyright');
    if($copyright){
        $copy_right = json_decode($copyright, 1);
    }
    use App\Journal;
    $is_user = $is_author = $is_admin = $is_reviewer = 0;
    $is_user_logged_in = is_user_logged_in();
    if($is_user_logged_in){
        $user_ID = get_current_user_id();
        $role= get_current_user_role($user_ID);
        if(in_array('administrator', $role)){
            $is_admin = 1;
        }
        elseif (in_array('user', $role)) {
            $is_user = 1;
        }
        elseif (in_array('author', $role)) {
            $is_author = 1;
        }
        elseif (in_array('reviewer', $role)) {
            $is_reviewer = 1;
        }
        
    }
    $journalList = Journal::all()->sortBy('id')->toArray();
?>
<?php $page_id = get_the_ID(); ?>
<?php if($is_admin) { ?>
    <li<?php if($page_id == get_buzz_id('college_admin_dashboard')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_admin_dashboard') ?>">Dashboard</a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Journals
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li<?php if($page_id == get_buzz_id('college_journal_list') || $page_id == get_buzz_id('college_journal')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_journal_list') ?>">Journal</a></li>
            <li<?php if($page_id == get_buzz_id('college_volume_list') || $page_id == get_buzz_id('college_volume')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_volume_list') ?>">Volume</a></li>
            <li<?php if($page_id == get_buzz_id('college_issue_list') || $page_id == get_buzz_id('college_issue')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_issue_list') ?>">Issue</a></li>
            <li<?php if($page_id == get_buzz_id('college_call_for_paper')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_call_for_paper') ?>">Call for paper</a></li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sliders
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li<?php if($page_id == get_buzz_id('college_slider_list') || $page_id == get_buzz_id('college_slider')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_slider_list') ?>">Slider</a></li>
            <li<?php if($page_id == get_buzz_id('college_carosel_slider_list') || $page_id == get_buzz_id('college_carosel_slider')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_carosel_slider_list') ?>">Portfolio Slider</a></li>
        </ul>
    </li>
    <li<?php if($page_id == get_buzz_id('college_author_paper_list') || $page_id == get_buzz_id('college_author_paper')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_author_paper_list');?>">Author Paper</a></li>
    <li<?php if($page_id == get_buzz_id('college_editor_list')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_editor_list') ?>">Editors</a></li>
    <li<?php if($page_id == get_buzz_id('college_journal_editor_list') || $page_id == get_buzz_id('college_journal_editor')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_journal_editor_list') ?>">Journal Editors</a></li>
    <li<?php if($page_id == get_buzz_id('college_reviewer')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_reviewer') ?>">Reviewer</a></li>
    <li<?php if($page_id == get_buzz_id('college_user_list')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_user_list') ?>">User List</a></li>
    <li<?php if($page_id == get_buzz_id('college_general_settings')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_general_settings') ?>">General Settings</a></li>
    <li<?php if($page_id == get_buzz_id('college_document')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_document') ?>">Docs</a></li>
<?php } else { ?>
    <?php if(!is_user_logged_in()){ ?>
    <li><a href="<?php echo site_url();?>">Home</a></li>
    <?php } ?>
    <?php if($is_reviewer) { ?>
        <li<?php if($page_id == get_buzz_id('college_reviewer_dashboard')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_reviewer_dashboard');?>">Dashboard</a></li>
    <?php } ?>
    <li<?php if($page_id == get_buzz_id('college_about_us')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_about_us');?>">About Us</a></li>
    <?php if($is_reviewer) { ?>
        <li<?php if($page_id == get_buzz_id('college_author_paper_list') || $page_id == get_buzz_id('college_author_paper')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_author_paper_list');?>">Author Paper</a></li>
    <?php } ?>
    <!--<li><a href="#services">Our Publications</a></li>-->
    <!--<li><a href="#showcase">Manscript Submission</a></li>-->
    <?php if($is_author) { ?>
        <li<?php if($page_id == get_buzz_id('college_author_paper_list')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_author_paper_list');?>">My Paper</a></li>
        <li<?php if($page_id == get_buzz_id('college_author_issue_paper')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_author_issue_paper');?>">Paper Upload</a></li>
    <?php } ?>
    <?php if(! $is_author) { ?>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Manscript Submission
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo get_buzz_url('college_guidelines_author') ?>">Guidelines to Author</a></li>
            <li><a href="<?php echo $paper_templates['url'];?>" download>Paper Template</a></li>
            <li><a href="<?php echo $sample_paper['url'];?>" download>Sample Paper</a></li>
            <li><a href="<?php echo $copy_right['url'];?>" download>Copyright Form</a></li>
            <?php if(!is_user_logged_in()){ ?> 
                <li><a href="<?php echo get_buzz_url('college_login') ?>">Online Submission</a></li>
            <?php } ?>
            <li><a href="<?php echo get_buzz_url('college_withdrawal_procedure') ?>">Withdrawal Procedure</a></li>
            <li><a href="<?php echo $copy_right['url'];?>" download>Withdrawel Form</a></li>
        </ul>
    </li>
    <?php } ?>
    
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Journals
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <?php foreach ($journalList as $key => $value) { ?>
                <li><a href="<?php echo get_buzz_url('college_journal_view').'?id='.$value['id'];?>"><?php echo $value['name'];?></a></li>
            <?php } ?>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Journals Editors
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <?php foreach ($journalList as $key => $value) { ?>
                <li><a href="<?php echo get_buzz_url('college_editor_board').'?id='.$value['id'];?>"><?php echo $value['name'];?></a></li>
            <?php } ?>
        </ul>
    </li>
    <li<?php if($page_id == get_buzz_id('college_processing_fees')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_processing_fees');?>">Processing Fee</a></li>
    <!--<li><a href="#pricing">Advertise with Us</a></li>-->
    <?php if(!is_user_logged_in()){ ?>
        <li><a href="<?php echo get_buzz_url('college_editor');?>">Join Us</a></li>
    <?php } ?>
    <li<?php if($page_id == get_buzz_id('college_contact_us')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_contact_us');?>">Contact</a></li>
<?php } ?>
   <?php if($is_admin) { ?>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">More<span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li<?php if($page_id == get_buzz_id('college_feedback') || $page_id == get_buzz_id('college_feedback_list')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_feedback_list') ?>">Feedback</a></li>
           <li<?php if($page_id == get_buzz_id('college_conference_list') || $page_id == get_buzz_id('college_conference')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_conference_list') ?>">Conference</a></li>
           <li<?php if($page_id == get_buzz_id('college_publish_download')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_publish_download') ?>">User Paper Downloader List</a></li>
           <li<?php if($page_id == get_buzz_id('college_certificate')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_certificate') ?>">Certificate</a></li>
           <li<?php if($page_id == get_buzz_id('college_mail')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_mail') ?>">Mail</a></li>
           <li<?php if($page_id == get_buzz_id('college_admin_report')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_admin_report') ?>">Report</a></li>
           <li<?php if($page_id == get_buzz_id('college_pdf_generation_list')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_pdf_generation_list') ?>"> Certificate List</a></li>
            <li<?php if($page_id == get_buzz_id('college_profile_page')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_profile_page') ?>">My Profile</a></li>
        </ul>
    </li>
   <?php } ?>
   <?php if(!$is_admin) { ?>
       <li<?php if($page_id == get_buzz_id('college_feedback')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_feedback') ?>">Feedback</a></li>
   <?php } ?>
<?php if($is_user_logged_in) { ?>
    <?php if(!$is_admin) { ?>
       <li<?php if($page_id == get_buzz_id('college_profile_page')) { echo ' class="active"';}?>><a href="<?php echo get_buzz_url('college_profile_page') ?>">My Profile</a></li>
    <?php } ?>
    <li><a href="<?php echo wp_logout_url( site_url() ); ?>">Logout</a></li>
<?php } else { ?>
    <li><a href="<?php echo get_buzz_url('college_login') ?>">Login</a></li>
<?php } ?>
