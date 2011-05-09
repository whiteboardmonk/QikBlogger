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
  var $post_ids; // complex data post_id seperated by ':'
  
  // appends a post_id for the particular tagname
  function add_post_id($post_id)
  {
    global $db;
    
    $post_id = trim($post_id);
    if ( $this->post_ids == '' ) {
      $this->post_ids = $post_id;
    } else {
      $this->post_ids = $this->post_ids.':'.$post_id; // append the post_id to the tag store
    }
    //echo $this->post_ids;
    
    if ( $db->query("UPDATE `tags` SET `post_ids` = '$this->post_ids' WHERE `tagname` = '$this->tagname' AND blog_name = '$this->blog_name' LIMIT 1 ;") ) {
      return true;
    } else {
      set_error("add_post_id():Error in query".$db->error());
    }
  }
  
  // deletes a post_id for the particular tagname
  function delete_post_id($post_id)
  {
    global $db;
    
    $post_id = trim($post_id);
    
    $post_ids = array();
    $post_ids =  explode(':',$this->post_ids);
    
    for ( $i=0 ; $i<count($post_ids) ; $i++ ) {
      if ( $post_ids[$i] == $post_id ) {
        unset($post_ids[$i]);
      }
    }
    
    $this->post_ids = implode(':',$post_ids);
    
    if ( $db->query("UPDATE `tags` SET `post_ids` = '$this->post_ids' WHERE `tagname` = '$this->tagname' AND blog_name = '$this->blog_name' LIMIT 1 ;") ) {
      return true;
    } else {
      set_error("delete_post_id():Error in query".$db->error());
    }
  }
  
  // return as array list of post_id's of post that should be included for the particular tag
  function get_posts()
  {
    global $db;
    
    //SELECT post_id AS ids    FROM posts    WHERE 'blog_name' = 'qb' AND disp_dt < CURRENT_TIMESTAMP( )     ORDER BY disp_dt DESC     LIMIT 0 , 5 
    //if ( $db->query("SELECT post_ids as ids FROM tags WHERE blog_name = '$this->blog_name' AND tagname  = '$this->tagname';") ) {
    $ids = $this->post_ids;
    
     
  }
}

// loads the tag with tagname $tagname and blog_name and then returns an object of type Tag
function tag_load($tagname,$blog_name)
{
  global $db;
  
  $tagname = strtolower(trim($tagname));
  $blog_name = strtolower(trim($blog_name));
  
  if ( $db->query("SELECT * FROM tags WHERE tagname = '$tagname' AND blog_name = '$blog_name';") ) {
    if ( $db->num_rows() == 1 ) {
      $row = $db->fetch_array();
      
      $t = new Tag();
      _tag_load($row,$t);
      
      return $t;
    } else {
      return set_error("tag_load():Error with tagname");
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
  $obj->post_ids = $row['post_ids'];
  $obj->blog_name = $row['blog_name'];
}

// adds a new tag to the database with tagname
function tag_new($tagname, $post_id, $blog_name)
{
  global $db;
  
  $tagname = strtolower(trim($tagname));
  $blog_name = strtolower(trim($blog_name));
  
  if ( !$tagname ) {
    return set_error("tag_new():tagname cannot be blank");
  } else {
    if ( !$db->dbh ) {
      return set_error("tag_new(): Invalid database handle");
    } else {
      if ( $db->query("INSERT INTO tags(tagname,post_ids,blog_name) values ('$tagname','$post_id','$blog_name');") ) {
        print_r($tagname,$blog_name);
        return tag_load($tagname,$blog_name);
      } else {
        return set_error("tag_new():".$db->error());
      }
    }
  }  
}
?>
