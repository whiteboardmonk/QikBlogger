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

session_start();
// include config file
require_once("config.php");
// include files
require_once(INC_ROOT."/dblayer.php");
require_once(INC_ROOT."/system.php");
require_once(INC_ROOT."/users.php");
require_once(INC_ROOT."/blogs.php");

// initialise db access
global $db;
$db = new MySQL();
$db->connect();
$redirect_to = WEB_ROOT.'/login.php';

$showform = false;
$err_msg = '';
    
if ( !is_login() ) { // not logged in 
  header("Location: http://" . $_SERVER['HTTP_HOST'] .$redirect_to);
} else { // logged in
  
  $u = new User();
  $u = user_load('',$_SESSION['username']);
  
  if ( isset($_POST['create']) ) { // process form
    $blog_name = $_POST['blog_name'];
    $blog_desc = $_POST['blog_desc'];
    
    $blog_name = strtolower(trim($blog_name));
    $blog_desc = mysql_real_escape_string(trim($blog_desc));
    
    if ( !$blog_name || !$blog_desc ) {
      $showform = true;
      $err_msg = 'Blog name and description are compulsary.';
    } else {
      
      $blog_name = str_replace(' ','-',$blog_name); // converting inbetween spaces to '-'
      
      if ( ereg("\w*|(\w+\-\w+)",$blog_name) ) {  
        
        // TODO: make a blog_name validate function()
        
        $b = new Blog();
        if ( $b = blog_load($blog_name) ) { // blog with blog_name exists
          $showform = true;
          $err_msg = 'A blog with the same name exists.Please choose another name.';
        } else { // blog with blog_name doesnt exists > create the blog
          $showform = false;
          $b = blog_new($blog_name, $blog_desc, $u->user_id);
          header("Location: http://" . $_SERVER['HTTP_HOST'] .WEB_ROOT.'/home.php');
        }
      } else {    
        $showform = true;
        $err_msg = 'Please choose another name. Do not use special characters';
      }
    }
  } else {
    $showform = true;
    $err_msg = '';
  }
}

if ( $showform == true ) {

  $qb_title = 'Qikblogger : Create your Blog';
  include("inc/header-meta.inc");
  include("inc/qb-dynamic-header.inc");
  include("inc/grey-header.inc");
  include("inc/content-create-blog.inc");
  include("inc/content-footer.inc");
  include("inc/grey-footer.inc");
  include("inc/qb-static-footer.inc");
}
?>
