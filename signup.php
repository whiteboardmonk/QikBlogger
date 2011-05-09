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

// initialise db access
global $db;
$db = new MySQL();
$db->connect();

$showform = false;
$err_msg = '';
$redirect_to = WEB_ROOT.'/home.php';

if ( isset($_POST['signup']) ) { // form was submitted and try to signup user
  $username = $_POST['username'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $email = $_POST['email'];
    
  if ( $password == $password2 ) {
    if ( !user_load('',$username) ) {
      if ( user_signup($username, $password, $email) ) {
        $showform = false;
        user_login($username, $password); // chg this for different authentication method
        $u = user_load($username);
        // print_r($u);
        header("Location: http://" . $_SERVER['HTTP_HOST'] .$redirect_to);
      } else {
        echo "Error in signup procedure";
      }
    } else {
      $showform = true;
      $err_msg = 'Username already exists. Please choose another username';
    }
  } else {
    $showform = true;
    $err_msg = 'Both passwords should be identical.';
  }
} else { // no form was submitted
  $showform = true;
}

if ( $showform ) {
  
  if ( is_login() ) { // logged in 
    header("Location: http://" . $_SERVER['HTTP_HOST'] .$redirect_to);
  } else { // not yet logged in
    $qb_title = 'Qikblogger : Sign Up for Qikblogger account';
    include("inc/header-meta.inc");
    include("inc/qb-static-header.inc");
    include("inc/grey-header.inc");
    include("inc/content-signup.inc");
    include("inc/content-footer.inc");
    include("inc/grey-footer.inc");
    include("inc/qb-static-footer.inc");
  }
}
?>
