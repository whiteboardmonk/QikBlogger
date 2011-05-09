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

/*
  comments.php 
  All comments related functionality
*/

Class Comment {
  
  // treat as read-only variables
  var $comment_id;
  var $comment;
  var $name;
  var $profile_link;
  var $comment_dt;
  var $ip_addr;
  
  // refers to 
  var $post_id;
  
  function get_time()
  {
    $time = strtotime($this->comment_dt);
    
    return date('g:i A',$time);
  }
}

// loads the comment with $comment_id and returns an object of type Comment
function comment_load($comment_id)
{
  global $db;
  
  $comment_id = trim($comment_id);
  
  if ( $db->query("SELECT * FROM comments WHERE comment_id = $comment_id;") ) {
    if ( $db->num_rows() == 1 ) {
      $row = $db->fetch_array();
      
      $c = new Comment();
      _comment_load($row,$c);
      
      return $c;
    } else {
      return set_error("comment_load():Error with comment id");
    }
  } else {
    return set_error("comment_load():".$db->error());
  }
}

// loads the row data in the comment object
// for internal user only bcoz obj specific
function _comment_load(&$row,&$obj)
{
  $obj->post_id = $row['post_id'];
  
  $obj->comment_id = $row['comment_id'];
  $obj->comment = stripslashes($row['comment']);
  $obj->name = $row['name'];
  $obj->profile_link = $row['profile_link'];
  $obj->comment_dt = $row['comment_dt'];
  $obj->ip_addr = $row['ip_addr'];
}

// adds a new comment to the database associated with the post_id
function comment_new($post_id, $comment, $name, $profile_link)
{
  global $db;
  
  // jst escape_string everything blindly for safety
  $post_id = mysql_real_escape_string(stripslashes(trim($post_id)));
  $comment = mysql_real_escape_string(stripslashes(trim($comment)));
  $name = mysql_real_escape_string(stripslashes(trim($name)));
  $profile_link = mysql_real_escape_string(stripslashes(trim($profile_link)));
  // autogenerate
  $comment_dt = date("Y-m-d H:i:s");
  $ip_addr = '203.115.86.4';
  
    
  if ( $db->query("INSERT INTO comments(post_id,comment,name,profile_link,comment_dt,ip_addr) values('$post_id','$comment','$name','$profile_link','$comment_dt','$ip_addr');" ) ) {
    // comment_id of the newwest comment
    $comment_id = $db->insert_id();
    
    return comment_load($comment_id); 
  } else {
    set_error("comment_new():".$db->error());
  }
}
?>
