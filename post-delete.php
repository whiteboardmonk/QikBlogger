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

// example usage: post-delete.php?blog_name=qb&post_id=22
session_start();
// include config file
require_once("config.php");
// include files
require_once(INC_ROOT."/dblayer.php");
require_once(INC_ROOT."/system.php");
require_once(INC_ROOT."/users.php");
require_once(INC_ROOT."/blogs.php");
require_once(INC_ROOT."/posts.php");

// initialise db access
global $db;
$db = new MySQL();
$db->connect();
//$redirect_to = WEB_ROOT.'/login.php';

$showform = false;
$err_msg = '';
$critical_err_msg = '';
$status_msg = '';
    
if ( !is_login() ) { // not logged in 
  header("Location: http://" . $_SERVER['HTTP_HOST'] .$redirect_to);
} else { // logged in
  $qb_title = 'Qikblogger : Edit Posts';
  include("inc/header-meta.inc");
  
  $u = new User();
  $u = user_load('',$_SESSION['username']);
  
  if( isset($_GET['blog_name']) && isset($_GET['post_id']) ) { // continue
    $blog_name = strtolower(trim($_GET['blog_name']));
    $post_id = trim($_GET['post_id']);
    
    $u->set_user_type($blog_name);
    
    if ( $CUR_USER == BLOG_OWNER || $CUR_USER == BLOG_MOD ) { // proceed
      $b = new Blog();
      $b = blog_load($blog_name);
      if ( $b->blog_contains_post($post_id) ) {
        $p = new Post();
        $p = post_load($post_id);
        $title = $p->title;
        if ( $p->delete() ) {
            $status_msg ="Post <strong>$title</strong> has been sucessfully deleted.";
        } else {
          set_error("Error while deleting");
        }
      } else { // post doesnt belong to blog
        $critical_err_msg ="In a hurry kya? Blog $b->blog_name doesnt not include the post";
      }
    } else { // cant proceed you need to be a owner or mod
      //echo $CUR_USER;
      $critical_err_msg ="You need to be a Blog Owner or Blog Moderator";
      //header("Location: http://" . $_SERVER['HTTP_HOST'] .$redirect_to);
    }
  } else { //you have come nowhere !
    $critical_err_msg ="In a hurry kya?";
  }
}

if ( $status_msg !='' || $critical_err_msg !='' ) {
  include("inc/qb-dynamic-header.inc");
  include("inc/grey-header.inc");
  include("inc/content-status.inc");
  include("inc/content-footer.inc");
  include("inc/grey-footer.inc");
}
?>
