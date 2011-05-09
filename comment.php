<?php
/* 
    Qikblogger is a multi-user multi-blog engine (PHP + MySQL/PostgreSQL/SQLite) 
    with support for permalinks, tags, RSS and customised themes.
    
    This file is part of Qikblogger.
    
    Copyright (c) 2006 Akshay Surve
    
    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.
    
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
    
    Contact:  ak47surve@yahoo.com
    Website:  http://qikblogger.sourceforge.net
    Blog:     http://qikblogger.blogspot.com
*/

// example usage: comment.php?blog_name=qb&post_id=22
session_start();
// include config file
require_once("config.php");
// include files
require_once(INC_ROOT."/dblayer.php");
require_once(INC_ROOT."/system.php");
require_once(INC_ROOT."/users.php");
require_once(INC_ROOT."/blogs.php");
require_once(INC_ROOT."/posts.php");
require_once(INC_ROOT."/comments.php");

// initialise db access
global $db;
$db = new MySQL();
$db->connect();

$showform = false;
$autofill_form = false; // to show text field or label field
$err_msg = '';
$critical_err_msg = '';
$status_msg = '';

if( isset($_GET['blog_name']) && isset($_GET['post_id']) ) { // continue
    
    $blog_name = strtolower(trim($_GET['blog_name']));
    $post_id = trim($_GET['post_id']);
    
    if ( !is_login() ) { // not logged in 
      $CUR_USER = BLOG_UNKNOWN;
    } else { // logged in
      $u = new User();
      $u = user_load('',$_SESSION['username']);
      
      $u->set_user_type($blog_name);
      
      // $CUR_USER will be initialised either as GUEST or MOD or OWNER
      
    }
    $b = new Blog();
    $b = blog_load($blog_name);
    
    if ( $b->blog_contains_post($post_id) ) {
      $p = new Post();
      $p = post_load($post_id);
      
      if ( isset($_POST['comment']) ) {
        $name = mysql_real_escape_string(trim($_POST['name']));
        if ( $name == '' ) {
          $name = 'Anonymous';
        }
        $profile_link = mysql_real_escape_string(trim($_POST['profile_link']));
        $comment = mysql_real_escape_string(trim($_POST['user_comment']));
        
        if ( !$comment ) { // can perform some validations
          $showform = true;
          $err_msg = 'Please do not leave the comment field blank.';
        } else {
          if ( comment_new($p->post_id, $comment, $name, $profile_link) ) {
            $showform = false;
            $month = $p->get_month(); 
            $year = $p->get_year();
            $permalink = $p->permalink;
            //echo "Location: http://" . $_SERVER['HTTP_HOST'] . WEB_ROOT . "/blog_name=$p->blog_name&year=$year&month=$month";
            header("Location: http://" . $_SERVER['HTTP_HOST'] . WEB_ROOT . "/view.php?blog_name=$p->blog_name&year=$year&month=$month&permalink=$permalink");
          } else {
            $showform = false;
            set_error("While calling comment_new()");
          }
        }
      }
      
      if ( $p->allow_comments ) { // now chk the type of user
      // 1- everyone 2-registered user 3-mod or owner
        if ( $b->who_can_comment == 1 ) { // show form for comments 
          $showform = true;
          $autofill_form = false;
        } else if ($b->who_can_comment == 2 ) {
          if ( $CUR_USER == BLOG_GUEST || $CUR_USER == BLOG_MOD || $CUR_USER == BLOG_OWNER ) { // show form for comments
            $showform = true;
            $autofill_form = true;
          } else {
            $showform = false;
            $critical_err_msg = "You should be a registered user to comment on <a class=\"content-links links\" href=\"".WEB_ROOT."/blogs.php?blog_name=$b->blog_name\" title=\"Go back to the blog\">$b->blog_name</a> blog.";
            $tempurl = urlencode(strtolower(strtok($_SERVER['SERVER_PROTOCOL'], '/')).'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']).urlencode("?blog_name=".$b->blog_name."&post_id=".$p->post_id);
            $status_msg = "If you are a QikBlogger user, please <a href=\"".WEB_ROOT."/login.php?done=$tempurl\" class=\"links content-links\">login</a> here. You can also <a href=\"".WEB_ROOT."/signup.php\" class=\"links content-links\">signup</a> for a account.";
          }
        } else {
          if ( $CUR_USER == BLOG_MOD || $CUR_USER == BLOG_OWNER ) { // show form for comments
            $showform = true;
            $autofill_form = true;
          } else {
            $showform = false;
            $critical_err_msg = "You should be a moderator or owner to comment on <a class=\"content-links links\" href=\"".WEB_ROOT."/blogs.php?blog_name=$b->blog_name\" title=\"Go back to the blog\">$b->blog_name</a> blog.";
            $tempurl = urlencode(strtolower(strtok($_SERVER['SERVER_PROTOCOL'], '/')).'://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']).urlencode("?blog_name=".$b->blog_name."&post_id=".$p->post_id);
            $status_msg = "If you are a QikBlogger user, please <a href=\"".WEB_ROOT."/login.php?done=$tempurl\" class=\"links content-links\">login</a> here. You can also <a href=\"".WEB_ROOT."/signup.php\" class=\"links content-links\">signup</a> for a account.";
          }
        }
      } else { // comments not allowed for post, prompt user
        $showform = false;
        $year = $p->get_year();
        $month = $p->get_month();
        
        $critical_err_msg = "Comments disabled for post <a class=\"content-links links\" href=\"".WEB_ROOT."/view.php?blog_name=$b->blog_name&year=$year&month=$month&permalink=$p->permalink\">$p->title</a> in <a class=\"content-links links\" href=\"".WEB_ROOT."/blogs.php?blog_name=$b->blog_name\" title=\"Go back to the blog\">$b->blog_name</a> blog.";
      }
    } else { // post doesnt belong to blog
      $critical_err_msg = "In a hurry kya? Blog $b->blog_name doesnt not include the post";
    }
} else { //you have come nowhere !
  $critical_err_msg = "In a hurry kya ?";
}

$qb_title = 'Qikblogger : Post Comments';
include("inc/header-meta.inc");
if ( is_login() ) {
  include("inc/qb-dynamic-header.inc");
} else {
  include("inc/qb-static-header.inc");
}
include("inc/grey-header.inc");
if ( $showform ) {
  include("inc/content-comment.inc");
} else if ( $status_msg || $critical_err_msg ) {
  include("inc/content-status.inc");
}
include("inc/content-footer.inc");
include("inc/grey-footer.inc");
include("inc/qb-static-footer.inc");
?>
