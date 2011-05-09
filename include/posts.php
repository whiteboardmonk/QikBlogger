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
  posts.php 
  All posts related functionality
*/

require_once("system.php");
require_once("tags.php");

Class Post {
  
  // basic attribs
  var $post_id;
  var $title;
  var $content;
  
  //  refers to
  var $blog_name;
  
  // additional attribs
  var $disp_dt;
  var $post_dt;
  var $permalink;
  var $post_user_id;
  
  var $last_edit_dt;
  var $post_last_edit_user_id;
  var $tags; // complex data tags seperated by ':'
  
  // extended attribs
  var $allow_comments; // boolean
  
  // delete the current post
  function delete()
  {
    global $db;
    
    if ( !$db->dbh ) {
      return set_error("delete():Invalid handle");
    } else {
      if ( $db->query("DELETE FROM posts WHERE post_id = '$this->post_id' LIMIT 1;") ) {
        // delete associated tags
        $tag = explode(':', $this->tags);
        for ( $i=0;$i<count($tag);$i++) {
          if ( $t = tag_load($tag[$i],$this->blog_name,$this->post_id) ) { //  true if tag exists
            if ( !$t->delete() ) {
              return set_error("post->delete():Error while deleting tags of post");
            }
          }
        }
        return true;
      } else {
        return set_error("delete():Error in query");
      }
    }
  }
  
  // blog_name post_id post_dt post_user_id wud remain same
  function update($title, $content, $disp_dt, $post_last_edit_user_id, $tags, $allow_comments)
  {
    global $db;
    
    // spl treatment for tags
    $old_tags = $this->tags;
    
    // jst escape_string everything blindly for safety
    $title = mysql_real_escape_string(stripslashes(trim($title)));
    $content = mysql_real_escape_string(stripslashes(trim($content)));
    $disp_dt = mysql_real_escape_string(stripslashes(trim($disp_dt)));
    $post_last_edit_user_id = mysql_real_escape_string(stripslashes(trim($post_last_edit_user_id)));
    $tags = mysql_real_escape_string(strtolower(stripslashes(trim($tags)))); // converting to lower case
    $allow_comments = mysql_real_escape_string(stripslashes(trim($allow_comments)));
    
    // autogenerate last_edit_dt
    $last_edit_dt=date("Y-m-d H:i:s");
    
    // not to update permalink
        
    if ( $db->query("UPDATE posts SET title='$title',content='$content',disp_dt='$disp_dt',post_last_edit_user_id='$post_last_edit_user_id',tags='$tags',allow_comments='$allow_comments',last_edit_dt='$last_edit_dt' WHERE post_id = '$this->post_id';") ) {
      // only if tags have been changed
      if ( $old_tags != $tags ) {
        // delete previous tags
        $tag = explode(':', $old_tags);
        for ( $i=0;$i<count($tag);$i++) {
          if ( $t = tag_load($tag[$i],$this->blog_name,$this->post_id) ) { //  true if tag exists
            $t->delete();
          }
        }
        // add new ones
        $tag = explode(':', $tags);
        for ( $i=0;$i<count($tag);$i++) {
          if ( !($t = tag_load($tag[$i],$this->blog_name,$this->post_id)) ) { //  false if tag doesnt exists, so create a new one
            $t = tag_new($tag[$i],$this->blog_name,$this->post_id);
          }
        }
      }
      
      return post_load($this->post_id);
    } else {
      set_error("post->update():".$db->error());
    }
  }
  
  
  // generate a list tag_ids with tag_name
  function get_tag_names() {
    global $db;
    
    if ( $db->query("SELECT DISTINCT tagname as ids FROM tags WHERE post_id='$this->post_id' AND blog_name='$this->blog_name'") ) {
      return $db->get_ids();
    }
  }
  
  
  function get_date()
  {
    $time = strtotime($this->disp_dt);
    
    return date('F j, Y',$time);
  }
  
  function get_date_header_date()
  {
    $time = strtotime($this->disp_dt);
    
    return date('l, F j, Y',$time);
  }
  
  function get_time()
  {
    $time = strtotime($this->disp_dt);
    
    return date('g:i A',$time);
  }
  
  function get_disp_dt_rss()
  {
    $time = strtotime($this->disp_dt);
    
    return strftime("%a, %d %b %Y %T %z",$time);
  }
  
  function get_disp_dt_atom()
  {
    $time = strtotime($this->disp_dt);
    
    return date('Y-m-d\TH:i:sZ',$time);
  }
  
  function get_last_edit_dt_atom()
  {
    $time = strtotime($this->last_edit_dt);
    
    return date('Y-m-d\TH:i:sZ',$time);
  }
  
  function get_num_comments()
  {
    global $db;
    
    if ( $db->query("SELECT comment_id FROM comments WHERE post_id='$this->post_id'") ) {
      return $db->num_rows();
    }
  }
  
  function get_comment_ids()
  {
    global $db;
    
    if ( $db->query("SELECT comment_id AS ids FROM comments WHERE post_id = '$this->post_id' ORDER BY comment_dt ASC ;") ) {
      return $db->get_ids();
    }
  }
    
  function get_year()
  {
    return date('Y',strtotime($this->disp_dt));
  }
  
  function get_month()
  {
    return date('m',strtotime($this->disp_dt));
  }
  
}

// adds a new post to the database with the post attributes and returns a post object
function post_new($blog_name, $title, $content, $disp_dt, $post_user_id, $tags, $allow_comments) 
{
  global $db;
  
  $temp_title = stripslashes(strtolower($title)); // used for permalnks
  
  // jst escape_string everything blindly for safety
  $title = mysql_real_escape_string(stripslashes(trim($title)));
  $content = mysql_real_escape_string(stripslashes(trim($content)));
  $disp_dt = mysql_real_escape_string(stripslashes(trim($disp_dt)));
  $post_user_id = mysql_real_escape_string(stripslashes(trim($post_user_id)));
  $tags = mysql_real_escape_string(strtolower(stripslashes(trim($tags)))); // converting to lowercase
  $allow_comments = mysql_real_escape_string(stripslashes(trim($allow_comments)));
  
  // autogenerate post_dt
  $post_dt=date("Y-m-d H:i:s");
  // since this is a new post last_edit would be same
  $last_edit_dt = $post_dt;
  $post_last_edit_user_id = $post_user_id;
  
  // generate permalink by using combination of title and disp_dt
  // also if user changes the disp date then the link would also chng 
  // thoguh it sudnt wrk this way
  
  $spl_chars = array('~','!','@','#','$','%','^','&','*','(',')','{','}','|','[',']',':',';','<','>','?',',','.','\"','\'','/','\\',' ');
  $replaced_chars = array('','','','','','','','','','','','','','','','','','','','','','','','','','','','-');
  
  //$permalink = str_replace('/','',str_replace(' ','-',$temp_title)); // replace '/' wid '' and ' ' wid '-'
  $permalink = str_replace($spl_chars,$replaced_chars,$temp_title);
  
  $time = strtotime($disp_dt);
  $year = date('Y',$time);
  $month = date('m',$time);
  
  $i = 1;
  
  while ( !unique_permalink($blog_name, $year, $month, $permalink) ) {
    if ($i==999 || $i==1) {
      $i=1;
      $permalink = $permalink . '-';
    }
    $i++;
    $permalink = $permalink.$i;
  }
  
  
  if ( $db->query("INSERT INTO posts(blog_name,title,content,disp_dt,post_dt,permalink,post_user_id,last_edit_dt,post_last_edit_user_id,tags,allow_comments) values('$blog_name','$title','$content','$disp_dt','$post_dt','$permalink','$post_user_id','$last_edit_dt','$post_last_edit_user_id','$tags','$allow_comments');") ) {
    // post_id of the last post
    //$post_id = 2;
    $post_id = $db->insert_id();
    //  take care of the tags
    $tag = explode(':', $tags);
    //print_r($tag);
    for ( $i=0;$i<count($tag);$i++) {
      if ( !($t = tag_load($tag[$i],$blog_name,$post_id)) ) { //  false if tag exists, if no then create it
        $t = tag_new($tag[$i],$blog_name,$post_id);
      }
    }
    return post_load($post_id); 
  } else {
    set_error("post_new():".$db->error());
  }
}

// loads a post with post_id $post_id and returns an object of type Post
//  TODO : to load post by permalink
function post_load($post_id)
{
  global $db;
  
  $post_id = trim($post_id);
  
  if ( !$post_id ) {
    return set_error("post_load():Invalid post_id");
  } else {
    if ( !$db->dbh ) {
      return set_error("post_load():Invalid database handle");
    } else {
      if ( $db->query("SELECT * FROM posts WHERE post_id = $post_id;") ) {
        if ( $db->num_rows() == 1 ) {
          $row = $db->fetch_array();
          
          $p = new Post();
          _post_load($row,$p);
          
          return $p;
        } else {
          return set_error("tag_load():Error with tagname");
        }
      } else {
        return set_error("tag_load():".$db->error());
      }
    }
  }
}

function post_load_permalink($blog_name, $year, $month, $permalink)
{
  global $db;
  
  if ( $db->query("SELECT * FROM posts WHERE blog_name='$blog_name' AND DATE_FORMAT(disp_dt,'%Y')='$year' AND DATE_FORMAT(disp_dt,'%m')='$month' AND permalink='$permalink' ; ") ) {
    if ( $db->num_rows() == 1 ) {
      $row = $db->fetch_array();
          
      $p = new Post();
      _post_load($row,$p);
      
      return $p;
    } else {
          return set_error("post_load():Error with constraints");
    }
  } else {
    return set_error("post_load(): Error in query");
  }
}
  

// loads the row data in the post object
// for internal user only bcoz obj specific
function _post_load(&$row,&$obj)
{ 
  $obj->post_id = $row['post_id'];
  $obj->title = stripslashes($row['title']);
  $obj->content = stripslashes($row['content']);
  
  // refers to 
  $obj->blog_name = stripslashes($row['blog_name']);
  // additional attribs
  $obj->disp_dt = $row['disp_dt'];
  $obj->post_dt = $row['post_dt'];
  $obj->permalink = $row['permalink'];
  $obj->post_user_id = $row['post_user_id'];
  
  $obj->last_edit_dt = $row['last_edit_dt'];
  $obj->post_last_edit_user_id = $row['post_last_edit_user_id'];
  $obj->tags = $row['tags']; // complex data tags seperated by ':'
  
  // extended attribs
  $obj->allow_comments = $row['allow_comments']; // boolean
}

// returns true if the permalink is unique
function unique_permalink($blog_name, $year, $month, $permalink)
{
  global $db;
  
  if ( $db->query("SELECT post_id FROM posts WHERE blog_name='$blog_name' AND DATE_FORMAT(disp_dt,'%Y')='$year' AND DATE_FORMAT(disp_dt,'%m')='$month' AND permalink='$permalink' ; ") ) {
    if ( $db->num_rows() != 0 ) {
      return false;
    }
  } else {
    set_error("unique_perma(): Error in query");
  }
  
  return true;
}
?>
