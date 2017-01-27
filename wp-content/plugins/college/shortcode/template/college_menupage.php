<?php 
    use App\Journal;
    $is_admin = 0;
    $is_user_logged_in = is_user_logged_in();
    if($is_user_logged_in){
        $user_ID = get_current_user_id();
        $role= get_current_user_role($user_ID);
        if(in_array('administrator', $role)){
            $is_admin = 1;
        }
    }
    $journalList = Journal::all()->sortBy('id')->toArray();
?>
<?php if($is_admin) { ?>
    <li><a href="<?php echo get_buzz_url('college_journal_list') ?>">Journal</a></li>
    <li><a href="<?php echo get_buzz_url('college_volume_list') ?>">Volume</a></li>
    <li><a href="<?php echo get_buzz_url('college_issue_list') ?>">Issue</a></li>
    <li><a href="<?php echo get_buzz_url('college_editor_list') ?>">Editors</a></li>
    <li><a href="<?php echo get_buzz_url('college_slider_list') ?>">Slider</a></li>
    <li><a href="<?php echo get_buzz_url('college_call_for_paper') ?>">Call for paper</a></li>
    <li><a href="<?php echo get_buzz_url('college_journal_editor_list') ?>">Journal Editors</a></li>
    <li><a href="<?php echo get_buzz_url('college_general_settings') ?>">General Settings</a></li>
<?php } else { ?>
    <li class="current"><a href="#body">Home</a></li>
    <li><a href="<?php echo get_buzz_url('college_about_us');?>">About Us</a></li>
    <li><a href="#services">Our Publications</a></li>
    <!--<li><a href="#showcase">Manscript Submission</a></li>-->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menuscript Submission
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="#">Guidelines to Author</a></li>
            <li><a href="#">Paper Template</a></li>
            <li><a href="#">Sample Paper</a></li>
            <li><a href="#">Copyright Form</a></li>
            <li><a href="#">Online Submission</a></li>
            <li><a href="#">E-Certificate</a></li>
            <li><a href="#">Withdrawal Procedure</a></li>
            <li><a href="#">Withdrawel Form</a></li>
        </ul>
    </li>
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
    <li><a href="<?php echo get_buzz_url('college_processing_fees');?>">Processing Fee</a></li>
    <li><a href="#pricing">Advertise with Us</a></li>
    <li><a href="<?php echo get_buzz_url('college_editor');?>">Join Us</a></li>
    <li><a href="<?php echo get_buzz_url('college_contact_us');?>">Contact</a></li>
<?php } ?>
<?php if($is_user_logged_in) { ?>
    <li><a href="<?php echo wp_logout_url( site_url() ); ?>">Logout</a></li>
<?php } else { ?>
    <li><a href="<?php echo get_buzz_url('college_login') ?>">Login</a></li>
<?php } ?>
