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
  tags.php 
  All tag related functionality
*/

Class Tag {
  
  var $tagname;
  var $blog_name;
  var $post_id; 

  // delete the current tag
  function delete() 
  {
    global $db;
    
    if ( !$db->dbh ) {
      return set_error("tag->delete():Invalid handle");
    } else {
      if ( $db->query("DELETE FROM tags WHERE tagname='$this->tagname' AND blog_name='$this->blog_name' AND post_id = '$this->post_id' LIMIT 1;") ) {
        return true;
      } else {
        return set_error("tag->delete():Error in query");
      }
    }
  }  
}

// loads the tag with tagname $tagname and blog_name and then returns an object of type Tag
function tag_load($tagname,$blog_name,$post_id)
{
  global $db;
  
  $tagname = strtolower(trim($tagname));
  $blog_name = strtolower(trim($blog_name));
  
  if ( $db->query("SELECT * FROM tags WHERE tagname = '$tagname' AND blog_name = '$blog_name' AND post_id = '$post_id';") ) {
    if ( $db->num_rows() == 1 ) {
      $row = $db->fetch_array();
      
      $t = new Tag();
      _tag_load($row,$t);
      
      return $t;
    } else {
      return set_error("tag_load():Error with tagname, blog_name or post_id");
    }
  } else {
    return set_error("tag_load():".$db->error());
  }
}

// loads the row data in the tag object
// for internal user only bcoz obj specific
function _tag_load(&$row,&$obj)
{
  $obj->tagname = $row['tagname'];
  $obj->blog_name = $row['blog_name'];
  $obj->post_ids = $row['post_id'];
}

// adds a new tag to the database with specified tagname, blog_name and post_id
function tag_new($tagname,$blog_name,$post_id)
{
  global $db;
  
  $tagname = strtolower(trim($tagname));
  $blog_name = strtolower(trim($blog_name));
  $blog_name = trim($blog_name);
  
  if ( !$tagname || !$blog_name || !$post_id ) {
    return set_error("tag_new():tagname or blog_name or post_id cannot be blank");
  } else {
    if ( !$db->dbh ) {
      return set_error("tag_new(): Invalid database handle");
    } else {
      if ( $db->query("INSERT INTO tags(tagname,blog_name,post_id) values ('$tagname','$blog_name','$post_id');") ) {
        //print_r($tagname,$blog_name);
        return tag_load($tagname,$blog_name,$post_id);
      } else {
        return set_error("tag_new():".$db->error());
      }
    }
  }  
}
?>
