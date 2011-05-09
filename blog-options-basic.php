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

// example usage: blog-options-basic.php?blog_name=qb
session_start();
// include config file
require_once("config.php");
// include files
require_once(INC_ROOT."/dblayer.php");
require_once(INC_ROOT."/system.php");
require_once(INC_ROOT."/users.php");
require_once(INC_ROOT."/blogs.php");
require_once(INC_ROOT."/menu.php");

// initialise db access
global $db;
$db = new MySQL();
$db->connect();
$redirect_to = WEB_ROOT.'/login.php';

$showform = false;
$err_msg = '';
$critical_err_msg = '';
$status_msg = '';

if ( !is_login() ) { // not logged in 
  header("Location: http://" . $_SERVER['HTTP_HOST'] .$redirect_to);
} else { // logged in
  
  $u = new User();
  $u = user_load('',$_SESSION['username']);
  
  if( isset($_GET['blog_name']) ) { // continue
    $blog_name = strtolower(trim($_GET['blog_name']));
    $u->set_user_type($blog_name);
    if ( $CUR_USER == BLOG_OWNER ) { // proceed
      $b = new Blog();
      $b = blog_load($blog_name);
      
      if ( isset($_POST['save']) ) { // process form
        $blog_title = $_POST['blog_title'];
        $blog_pgtitle = $_POST['blog_pgtitle'];
        $blog_desc = $_POST['blog_desc'];
        
        $num_frontpage_posts = $_POST['num_frontpage_posts'];
        $show_comments = ($_POST['show_comments']=='show')?true:false;
        $who_can_comment = $_POST['who_can_comment'];
        
        $article_footer = $_POST['article_footer'];
        $error_validation =  false;
        if ( !$error_validation ) {
          $b = $b->blog_update($blog_title, $blog_pgtitle, $blog_desc, $num_frontpage_posts, $show_comments, $who_can_comment, $article_footer);
          //print_r($b);
          $showform = false;
          $status_msg = "Blog Setting for blog <strong>$b->blog_name</strong> have been saved.";
        } else {
          $showform = true;
          $err_msg = 'Error in validation';
        }
      } else { // show form to the user
        $showform = true;
        $err_msg = '';
      }
    } else { // cant proceed you need to be a owner
      //echo $CUR_USER;
      //header("Location: http://" . $_SERVER['HTTP_HOST'] .$redirect_to);
      $critical_err_msg = "You need to be the Blog Owner to change settings";
    }
  } else { //you have come nowhere !
    $critical_err_msg = "In a hurry kya?";
  }
}

$qb_title = 'Qikblogger : Blog Settings';
include("inc/header-meta.inc");
include("inc/qb-dynamic-header.inc");
$page_name = 'blog-options-basic';
get_menus($page_name,$b);
include("inc/grey-header.inc");

if ( $showform == true ) {
  include("inc/content-blog-options.inc");
} else {
  include("inc/content-status.inc");
}

include("inc/content-footer.inc");
include("inc/grey-footer.inc");
include("inc/qb-static-footer.inc");
?>
