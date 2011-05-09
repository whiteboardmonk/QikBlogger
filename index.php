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
require_once(INC_ROOT."/users.php");

if ( is_login() ) { // logged in 
  $redirect_to = WEB_ROOT.'/home.php';
  header("Location: http://" . $_SERVER['HTTP_HOST'] .$redirect_to);
} else { // not yet logged in
  $qb_title = 'Qikblogger : Create your Blog NOW -- FREE';
  include("inc/header-meta.inc");
  include("inc/qb-static-header.inc");
  include("inc/grey-header.inc");
  include("inc/content-index.inc");
  include("inc/content-footer.inc");
  include("inc/grey-footer.inc");
  include("inc/qb-static-footer.inc");
}
?>
