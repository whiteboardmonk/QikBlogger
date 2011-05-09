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
  blogs.php
  includes all the functionality related to blogs
*/

Class Blog {
  // treat all variables as read-only
  var $blog_name;
  var $blog_title;
  var $blog_pgtitle;
  var $blog_desc;
  var $blog_start_dt;
  var $blog_url;
  var $blog_owner_id; // references user_id
  var $blog_mods; // array();
  
  var $num_frontpage_posts; // int
  var $show_comments; // tinyint BOOL
  var $who_can_comment; // enum('1'=>Anyone, '2'=>registered users, '3'=>mods and owner)
  var $article_footer;
  
  // constructor
  function Blog() 
  {
  
  }
  
  // update the details of the blog
  function blog_update($blog_title, $blog_pgtitle, $blog_desc, $num_frontpage_posts, $show_comments, $who_can_comment, $article_footer)
  {
    global $db;
    
    $blog_title = mysql_real_escape_string(stripslashes(trim($blog_title)));
    $blog_pgtitle = mysql_real_escape_string(stripslashes(trim($blog_pgtitle)));
    $blog_pgtitle = mysql_real_escape_string(stripslashes(trim($blog_pgtitle)));
    $num_frontpage_posts = mysql_real_escape_string(stripslashes(trim($num_frontpage_posts)));
    $show_comments = trim($show_comments);
    $who_can_comment = mysql_real_escape_string(stripslashes(trim($who_can_comment)));
    $article_footer = mysql_real_escape_string(stripslashes(trim($article_footer)));
    
    if ( false ) { // any validation
      return set_error("blog_update(): owner_id and desc are compulsary");
    }
    
    if ( $db->query("UPDATE blogs set blog_title='$blog_title',blog_pgtitle='$blog_pgtitle',blog_desc='$blog_desc',num_frontpage_posts='$num_frontpage_posts',show_comments='$show_comments',who_can_comment='$who_can_comment',article_footer='$article_footer' WHERE blog_name='$this->blog_name';") ) {
      return blog_load($this->blog_name);
    } else {
      return set_error("blog_update():update db query eror".$db->error());
    }
  }
  
  function add_blog_mod($mod_id)
  {
    global $db;
    
    $mod_id = trim($mod_id);
    if ( !$mod_id ) {
      return set_error("add_blog_mod():Invalid mod_id");
    } else {
      if ( $db->query("INSERT INTO mods(blog_name,mod_id) VALUES($this->blog_name,$mod_id);") ) {
        return true;
      } else {
        return set_error("add_blog_mod():Error in db query".$db->error());
      }
    }
  }
  
  function get_last_update_dt()
  {
    global $db;
    
    if ( $db->query("SELECT last_edit_dt FROM posts WHERE blog_name = '$this->blog_name' ORDER BY last_edit_dt DESC LIMIT 0,1;") ) {
      if ( $db->num_rows()==1 ) {
        $row = $db->fetch_array();
        return $row['last_edit_dt'];
      } else {
        return 'Never';
      }
    } else {
      return set_error("get_last_update():db query error".$db->error());
    }
  }
  
  function get_num_of_posts()
  {
    global $db;
    
    if ( $db->query("SELECT post_id FROM posts WHERE blog_name = '$this->blog_name';") ) {
      return $db->num_rows();
    } else {
      return set_error("get_num_of_posts():db query error".$db->error());
    }
  }
  
  function blog_contains_post($post_id)
  {
    global $db;
    
    if ( $db->query("SELECT `post_id` FROM posts WHERE `post_id`='$post_id' AND `blog_name`='$this->blog_name';") ) {
      if ( $db->num_rows() == 1 ) {
        return true;
      } else {
        return false;
      }
    } else {
      return set_error("blog_contains_post():db query error".$db->error());
    }
  }
  
  // return as array list of post_id's of post that should be shown on the first page
  function get_frontpage_posts()
  {
    global $db;
    
    //SELECT post_id AS ids    FROM posts    WHERE 'blog_name' = 'qb' AND disp_dt < CURRENT_TIMESTAMP( )     ORDER BY disp_dt DESC     LIMIT 0 , 5 
    if ( $db->query("SELECT post_id AS ids FROM posts WHERE disp_dt < CURRENT_TIMESTAMP() AND blog_name = '$this->blog_name' ORDER BY disp_dt DESC LIMIT 0 , $this->num_frontpage_posts;") ) {
      return $db->get_ids();
    }
  }
  
  // return as array list of post_id's of posts of this tag and blog
  function get_tag_posts($tagname)
  {
    global $db;
    // so with this query the future posts would be shown... i guess one can change the direction of the join bt it wud degrade performance
    if ( $db->query("SELECT tags.post_id as ids FROM tags, posts WHERE tags.tagname='$tagname' AND tags.blog_name='$this->blog_name' AND tags.post_id=posts.post_id AND posts.disp_dt < CURRENT_TIMESTAMP() ORDER BY posts.disp_dt DESC ;") ) {
      return $db->get_ids();
    }
  }
  
  // returns posts of the $year and $month
  function get_archive_posts($year, $month)
  {
    global $db;
    
    if ( $db->query("SELECT post_id AS ids FROM posts WHERE disp_dt < CURRENT_TIMESTAMP() AND blog_name='$this->blog_name' AND DATE_FORMAT(disp_dt,'%Y')='$year' AND DATE_FORMAT(disp_dt,'%m')='$month' ORDER BY disp_dt DESC; ") ) {
      return $db->get_ids();
    }
  }
  
  // get archive dates as a multi array ['year']['month']
  function get_archive_dates()
  {
    global $db;
    
    $archives = array();
    
    $time = strtotime($this->blog_start_dt);
    $year = date('Y',$time);
    $month = date('m',$time);
    $start_archive_time = strtotime("$year-$month-01 00:00:00");
    
    $time = time();
    $year = date('Y',$time);
    $month = date('m',$time);
    $final_archive_time = strtotime("$year-$month-01 00:00:00");
    
    $i=1; // add one month on each iteration
    
    while ( $start_archive_time <= $final_archive_time ) {
      $year = date('Y',$start_archive_time);
      $month = date('m',$start_archive_time);
      
      if ( count($this->get_archive_posts($year, $month))>0 ) {
        $archives[]=$year;
        $archives[]=$month;
      }
      $start_archive_time = strtotime("+$i month",$start_archive_time);
      //$i;
    }
    
    return $archives;
  }
}

// accepts the blog_name and returns the Blog object if blog_name exists otherwise NULL
function blog_load($blog_name)
{
  global $db;
  
  if( !$db->dbh ) {
    return set_error("blog_load():Invalid database handle");
  }
  
  $blog_name = strtolower(trim($blog_name));
  
  if ( !$blog_name ) {
    return set_error("blog_load():Empty blog_name");
  }
  
  if ( $db->query("SELECT * FROM blogs WHERE blog_name = '$blog_name'") ) {
    if ( $db->num_rows()==1 ) {
      $row = $db->fetch_array();
      
      $b = new Blog();
      _blog_load($row, $b);
      
      if ( $db->query("SELECT * FROM mods WHERE blog_name = '$blog_name';") ) {
        for( $i=0; $i<$db->num_rows() ;$i++ ) {
          $row = $db->fetch_array();
          $b->blog_mods[] = $row['mod_id'];
        }
      }
      return $b;
    } else {
      return set_error("blog_load():blog_name doesnt exists".$db->error());
    }
  } else {
    return set_error("blog_load():Error querying db".$db->error());
  }
}

// loads the row data in the Blog object
// for internal user only bcoz obj specific
function _blog_load(&$row, &$obj)
{
  $obj->blog_name = stripslashes($row['blog_name']);
  $obj->blog_title = stripslashes($row['blog_title']);
  $obj->blog_pgtitle = stripslashes($row['blog_pgtitle']);
  $obj->blog_desc = stripslashes($row['blog_desc']);
  $obj->blog_start_dt = $row['blog_start_dt'];
  $obj->blog_url = $row['blog_url'];
  $obj->blog_owner_id = $row['blog_owner_id'];
  $obj->num_frontpage_posts = $row['num_frontpage_posts'];
  $obj->show_comments = $row['show_comments'];
  $obj->who_can_comment = $row['who_can_comment'];
  $obj->article_footer = $row['article_footer'];
}

function blog_new($blog_name, $blog_desc, $blog_owner_id)
{
  global $db;
  
  $blog_name = mysql_real_escape_string(stripslashes(trim($blog_name)));
  $blog_desc = mysql_real_escape_string(stripslashes(trim($blog_desc)));
  
  $blog_title = $blog_name;
  $blog_pgtitle = $blog_name;
  
  $blog_start_dt = date("Y-m-d H:i:s");
  
  // form a blog URL
  $blog_url = WEB_ROOT.'/blogs.php?blog_name='.$blog_name;
  // $blog_url = WEB_ROOT.'/blog/'.$blog_name;
  
  if ( !$blog_name || !$blog_desc || !$blog_owner_id) {
    return set_error("blog_new(): blog_name , owner_id and desc are compulsary");
  }
  
  if ( $db->query("INSERT INTO blogs(blog_name,blog_title,blog_pgtitle,blog_desc,blog_start_dt,blog_url,blog_owner_id) values ( '$blog_name','$blog_title','$blog_pgtitle','$blog_desc','$blog_start_dt','$blog_url','$blog_owner_id');" ) ) {
    if ( !file_exists("files/$blog_name") ) {
      mkdir("files/$blog_name");
    }
    
    if ( !file_exists("files/$blog_name/template") ) {
      mkdir("files/$blog_name/template");
    }
    
    if ( !file_exists("files/$blog_name/template/index.tpl") ) {
      copy("templates/tictac/template/index.tpl", "files/$blog_name/template/index.tpl");
    } 
    
    return blog_load($blog_name);
  } else {
    return set_error("blog_new(): Error in insert query.".$db->error());
  }
}



// chks whether a blog_name already exists
function chk_blog_name_exists($blog_name)
{
  if ( blog_load($blog_name) ) {
    return false;
  } else {
    return true;
  }
}
?>
