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

require_once(dirname(__FILE__).'/../config.php');

define('BLOG_OWNER','owner');
define('BLOG_MOD','moderator');
define('BLOG_GUEST','guest');
define('BLOG_UNKNOWN','unknown');

$CUR_USER = BLOG_UNKNOWN;
$ERRORS = array();


function set_error($err,$err_code=0)
{
  global $ERRORS;
  
  $ERRORS[$err_code] = $err;
  //print_r($ERRORS);
  //echo "_FILE_";
  return false;
}
?>
