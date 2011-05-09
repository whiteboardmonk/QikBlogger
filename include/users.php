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
  users.php 
  All user related functionality
*/

require_once("system.php");

Class User {
  
  //treat as read-only variables
  //identity
  var $user_id;
  var $username;
  var $name;
  var $nickname;
  var $email;
  
  /* not needed i gues it can be wrkd out frm outside
  function set_user_type($blog_name) {
    global $db;
    global $CUR_USER;
    
    $blog_name = trim($blog_name);
    
    $db->query("SELECT blog_name from blogs WHERE blog_name='$blog_name' AND blog_owner_id='$this->user_id';";
    if ( db->num_rows() == 1 )
    
    
  }
  */
  
  function get_blogs_user_owns()
  {
    global $db;
    
    if ( $db->query("SELECT blog_name FROM blogs WHERE blog_owner_id = '$this->user_id';") ) {
      $blogs_user_owns = array();
      for ( $i=0 ; $i < $db->num_rows() ; $i++ ) {
        $row = $db->fetch_array();
        $blogs_user_owns[] = $row['blog_name'];
      }
      return $blogs_user_owns;
    } else {
      return set_error("get_blogs_u_owns(): db query".$db->error());
    }
  }
  
  function get_blogs_user_mods()
  {
    global $db;
    
    
    if ( $db->query("SELECT blog_name FROM mods WHERE mod_id = '$this->user_id' ;") ) {
      $blogs_user_mods = array();
      for ( $i=0 ; $i<$db->num_rows() ; $i++ ) {
        $row = $db->fetch_array();
        $blogs_user_mods[] = $row['blog_name'];
      }
      return $blogs_user_mods;
    } else {
        return set_error("get_blogs_u_mods(): db query".$db->error());
    }
  }
  
  function set_user_type($blog_name)
  {
    global $CUR_USER;
    
    $blogs_user_owns = array();
    $blogs_user_owns = $this->get_blogs_user_owns();
    
    $blogs_user_mods = array();
    $blogs_user_mods = $this->get_blogs_user_mods();
    
    if ( in_array($blog_name,$blogs_user_owns) ) {
      $CUR_USER = BLOG_OWNER;
    } else if ( in_array($blog_name,$blogs_user_mods) ) {
      $CUR_USER = BLOG_MOD;
    } else {
      $CUR_USER = BLOG_GUEST;
    }
    //echo $CUR_USER;
    return true;
  }
}

// user signsup for the service
function user_signup($username, $password, $email, $name='', $nickname='')
{
  global $db;
  
  $username = strtolower(trim($username));
  $email = strtolower(trim($email));
  $password = md5($password); // not modifying the password at all... so clever of me ;-)
  
  /* Username can be  
  if ( $name = '' ) {
    $name = $username;
  }
  */
  if ( $nickname = '' ) {
    $nickname = $username;
  }
  if ( $name = '' ) {
    $name = $username;
  }
  
  if ( !$username || !$email ) {
    return set_error("user_signup(): invalid username or email");
  } else {
    if ( !$db->dbh ) {
      return set_error("user_signup():Invalid db handle".$db->error());
    } else {
      if( user_load('',$username) ) {
        return set_error("user_signup():User exists");
      } else {
        // if ( $db->query("INSERT INTO users(username,name,nickname,email) values('$username','$name','$nickname','$email')") ) {
        if ( $db->query("INSERT INTO users(username,password,name,nickname,email) values('$username','$password','$name','$nickname','$email')") ) {
          return true;
        } else {
          return set_error("user_signup(): error in insert query".$db->error());
        }
      }
    }
  }
}

// authenticates a user, returns TRUE on sucessful authentication
function user_authenticate($username,$password)
{
  global $db;
  /*
  if ( $username == $password ) {
    return true;
  }
  */
  
  $password = md5($password);
  
  if ( !$db->dbh ) {
    return set_error("user_authenticate():Invalid db handle".$db->error());
  } else {
    if ( $db->query("SELECT username FROM users WHERE username='$username' AND password ='$password'") ) {
      if ( $db->num_rows() == 1 ) {
        return true;
      } else {
        return false;
      }
    } else {
      return set_error("user_signup(): error in insert query".$db->error());
    }
  }
  
  return false;
}

// logs in the user and sets CUR_USER global var appropriately admin for admin and username for mods
function user_login($username,$password)
{
  $username = strtolower($username);
  
  if ( user_authenticate($username,$password) ) {
    $_SESSION['username'] = $username;
    return true;
  } else {
    return set_error("Invalid username or password");
  }
}

//loads the user with username $username and returns an object of type User
function user_load($user_id='', $username='')
{
  global $db;
  
  if ( !$db->dbh ) 
    return set_error("user_load():Invalid database handle");
  
  $username = trim($username);
  $user_id = trim($user_id);
  if ( !$username && !$user_id )
    return set_error("user_load():user_id OR username is required to load.");
  
  if ( $user_id != '' ) {
    if ($db->query("SELECT * FROM users WHERE user_id = '$user_id';")) {
      if ( $db->num_rows() == 1 ) {
        $row = $db->fetch_array();
        
        $u = new User();
        _user_load($row,$u);
        
        return $u;
      } else {
        set_error("user_load():userid doesnt exists".$db->error());
      }//i guess i can remove the else part
    } else {
      //print db->error();
      return set_error("user_load():".$db->error());
    }
  } else {
    if ($db->query("SELECT * FROM users WHERE username = '$username';")) {
      
      if ( $db->num_rows() == 1 ) {
        $row = $db->fetch_array();
        
        $u = new User();
        _user_load($row,$u);
        
        return $u;
      } else {
        set_error("user_load():username doesnt exists".$db->error());
      }//i guess i can remove the else part
    } else {
      //print db->error();
      return set_error("user_load():".$db->error());
    }
  }
}

//loads the row data in the user object
//for internal user only bcoz obj specific
//limited data of the user used most of the time
function _user_load(&$row, &$obj) 
{
  //identity
  $obj->user_id = $row['user_id'];
  $obj->username = $row['username'];
  $obj->name = $row['name'];
  $obj->nickname = $row['nickname'];
  $obj->email = $row['email'];
}

function is_login() {
  if ( isset($_SESSION['username']) ) {
    return true;
  } else {
    return false;
  }
}
?>
