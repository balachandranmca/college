<?php
/*
*  contains global functions Usage--can be called site wide
*/

/*
*  buzz_url Fn
* Usage : Site wide dynamically we can get exact url for pages
@param (aliasname) ($aliasname)
@return Exact Page link
*/

function get_buzz_url($aliasname) {
    $buzz_page_alias = get_option("buzz_page_alias");
    return get_page_link($buzz_page_alias[$aliasname]);
}

/*
*  buzz_page_id Fn
* Usage : Site wide dynamically we can get exact id for pages
@param (aliasname) ($aliasname)
@return Exact Page id
*/

function get_buzz_id($aliasname) {
    $buzz_page_alias = get_option("buzz_page_alias");
    return $buzz_page_alias[$aliasname];
}

/*
*  buzz_url Fn
* Usage : we can render files by even passing params to file.
@param (filepath) ($file)
@param (array) ($vars)
@return file content
syntax $text = renderPhpToString('hello.php', array('foo'=>'World'));
*/
function renderPhpToString($file, $vars = null) {
    if (is_array($vars) && !empty($vars)) {
        extract($vars);
    }
    ob_start();
    include $file;
    $template_content = ob_get_contents();
    ob_end_clean();
    return $template_content;
}

/*
*  buzz_redirect private users Fn
* Usage : redirects non registered user to login page when job_listing is post type
@return Redirect to login page
*/
function post_redirect(){
    global $wp_query;
    
    
    /** HOOK FOR THE DISPLAY NAME **/
    $user_ID = get_current_user_id();
    
    $reguseronly = array(
        get_buzz_id('college_journal'),
        get_buzz_id('college_slider'),
        get_buzz_id('college_slider_list'),
        get_buzz_id('college_editor_list'),
        get_buzz_id('college_journal_editor'),
        get_buzz_id('college_journal_editor_list'),
    );
    
    $is_user_logged_in = is_user_logged_in();
    
    if (empty($is_user_logged_in) && in_array($wp_query->queried_object_id, $reguseronly)){
        $query = get_buzz_url('college_login');
        $protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
        $new_query = add_query_arg( array(
        'aft_login' => urlencode($protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])
        ), $query );
        wp_redirect( $new_query );
        exit();
    }else{
        echo
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header('Content-Type: text/html');
    }
    $nonreguseronly = array(
        get_buzz_id('college_login'),
    );
    if ($is_user_logged_in && in_array($wp_query->queried_object_id, $nonreguseronly) ) {
        wp_redirect( get_site_url() );
        exit;
    }
    
    
    
    $role= get_current_user_role($user_ID);
    
    /* For admin only page */
    
    $admin_only = array(
        get_buzz_id('college_journal'),
        get_buzz_id('college_editor_list'),
        get_buzz_id('college_journal_editor'),
        get_buzz_id('college_journal_editor_list'),
    );
    
    if ( ( in_array('journal', $role) || in_array('editor', $role) ) && (in_array($wp_query->queried_object_id, $admin_only))) {
        wp_redirect( site_url() );
        exit();
    }
}
add_action( 'template_redirect', 'post_redirect' );

/* to get current user role*/
function get_current_user_role($user_id) {
    $user = new WP_User( $user_id );
    if ( !empty( $user->roles ) && is_array( $user->roles ) ) {
        return $user->roles;
    }
    
    return ;
}

/**
* Count display method
*/
function count_display($val){
    if ($val > 1000000) {return round(($val/1000000),2)."M "; }
    elseif ($val > 1000) {return round(($val/1000),2)."K "; }
    elseif($val){ return $val; }
    else{ return '0';  }
}

function replace_unicode_escape_sequence($match) {
    return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');
}
function unicode_decodes($str) {
    return preg_replace_callback('/u([0-9a-f]{4})/i', 'replace_unicode_escape_sequence', $str);
}

/**
* Get Particular Column value in User_Statistic Table
*/

function format_URL($urlStr){
    $parsed = parse_url($urlStr);
    if (empty($parsed['scheme'])) {
        $urlStr = 'http://' . ltrim($urlStr, '/');
    }
    return $urlStr;
}