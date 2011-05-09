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

// example usage: post-create.php?blog_name=qb
session_start();
// include config file
require_once("config.php");
// include files
require_once(INC_ROOT."/dblayer.php");
require_once(INC_ROOT."/system.php");
require_once(INC_ROOT."/users.php");
require_once(INC_ROOT."/blogs.php");
require_once(INC_ROOT."/posts.php");
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
  $qb_title = 'Qikblogger : Create a Post';
  include("inc/header-meta.inc");
  
  $u = new User();
  $u = user_load('',$_SESSION['username']);
  
  if( isset($_GET['blog_name']) ) { // continue
    $blog_name = html_entity_decode(strtolower(trim($_GET['blog_name'])));
    $u->set_user_type($blog_name);
    if ( $CUR_USER == BLOG_OWNER || $CUR_USER == BLOG_MOD ) { // proceed
      $b = new Blog();
      $b = blog_load($blog_name);
      
      if ( isset($_POST['publish']) ) { //process form
        
        $title = mysql_real_escape_string(trim($_POST['title']));
        $content = $_POST['content'];
        // process content \r\n and \n
        $content = str_replace("\r\n","<br />",$content); // for windows systems
        $content = str_replace("\n","<br />",$content); // for other systems
        $content = mysql_real_escape_string(trim($content));
        
        $allow_comments = $_POST['allow_comments'];
        if ( $allow_comments == 'Yes' ) {
          $allow_comments = true;
        } else {
          $allow_comments = false;
        }
        
        $postHour = mysql_real_escape_string(trim($_POST['postHour']));
        $postMinute = mysql_real_escape_string(trim($_POST['postMinute']));
        $postSecond = mysql_real_escape_string(trim($_POST['postSecond']));
        $postMonth = mysql_real_escape_string(trim($_POST['postMonth']));
        $postDay = mysql_real_escape_string(trim($_POST['postDay']));
        $postYear = mysql_real_escape_string(trim($_POST['postYear']));
        
        $tags = mysql_real_escape_string(trim($_POST['tags']));
        
        $disp_dt = $postYear."-".$postMonth."-".$postDay." ".$postHour.":".$postMinute.":".$postSecond;
        
        $p = new Post();
        
        if ( !$title || !$content ) { // validation
          $showform = true;
          $err_msg = 'Title and Content is compulsary';
        } else {
          $p = post_new($b->blog_name, $title, $content, $disp_dt, $u->user_id, $tags, $allow_comments);
          $showform = false;
          $status_msg = "Your post titled <strong>$p->title</strong> has been sucessfully published.";
        }        
      } else { // show form
        $showform = true;
      }
    } else { // cant proceed you need to be a owner or mod
      //echo $CUR_USER;
      $critical_err_msg='You should be a Blog Moderator';//header("Location: http://" . $_SERVER['HTTP_HOST'] .$redirect_to);
    }
  } else { //you have come nowhere !
    $critical_err_msg = 'In a hurry kya? ';
  }
}

if ( $showform == true ) {
  include("inc/qb-dynamic-header.inc");
  $page_name = 'post-create';
  get_menus($page_name,$b);
  include("inc/grey-header.inc");
  include("inc/content-post-create.inc");
  include("inc/content-footer.inc");
  include("inc/grey-footer.inc");
  include("inc/qb-static-footer.inc");
} else {
  include("inc/qb-dynamic-header.inc");
  $page_name = 'post-create';
  get_menus($page_name,$b);
  include("inc/grey-header.inc");
  include("inc/content-status.inc");
  include("inc/content-footer.inc");
  include("inc/grey-footer.inc");
  include("inc/qb-static-footer.inc");
}
?>
