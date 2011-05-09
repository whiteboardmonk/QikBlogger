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

if ( !is_login() ) { // not logged in 
  $showform = true;
  $err_msg='';
  $qb_title = 'Qikblogger : Sign In';
} else { // logged in
  $showform = false;
  $qb_title = 'Qikblogger : Dashboard';
  $u = new User();
  $u = user_load('',$_SESSION['username']);
}

include("inc/header-meta.inc");
if ( $showform == true ) {
  include("inc/qb-static-header.inc");
  include("inc/grey-header.inc");
  include("inc/content-login.inc");
} else {
  include("inc/qb-dynamic-header.inc");
  include("inc/grey-header.inc");
  include("inc/content-home-user.inc");
}
include("inc/content-footer.inc");
include("inc/grey-footer.inc");
include("inc/qb-static-footer.inc");
?>
