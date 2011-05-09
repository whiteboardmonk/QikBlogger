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

function get_menus($page_name,&$b) {
  global $CUR_USER;
  ?>
  <table width="780" height="100%" border="0" align="center" cellpadding="0" cellspacing="0" background="img/body_bg.gif" > 
        <tr> 
          <td height="1100%" class="pads-left-right-menu">
  <?
	if ( $CUR_USER == BLOG_OWNER ) {
		if ( $page_name == 'posts' ) {
			include("inc/menu-posts-owner.inc");
		} else if ( $page_name == 'post-create' ) {
			include("inc/menu-post-create-owner.inc");
		} else if ( $page_name == 'post-edit' ) {
			include("inc/menu-post-edit-owner.inc");
		} else if ( $page_name == 'blog-options-basic' ) {
			include("inc/menu-blog-options-owner.inc");
		} else if ( $page_name == 'template-edit' ) {
			include("inc/menu-template-owner.inc");
		} else if ( $page_name == 'template-choose' ) {
			include("inc/menu-template-choose-owner.inc");
		}
	} else if ( $CUR_USER == BLOG_MOD ) {
		if ( $page_name == 'posts' ) {
			include("inc/menu-posts-mod.inc");
		} else if ( $page_name == 'post-create' ) {
			include("inc/menu-post-create-mod.inc");
		} else if ( $page_name == 'post-edit' ) {
			include("inc/menu-post-edit-mod.inc");
		} 
	}
  
  ?>
          </td> 
        </tr> 
      </table> 
  <?
}
?>
