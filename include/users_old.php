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
  
  // TODO: user_id
  
  //treat as read-only variables
  //identity
  var $username;
  var $name;
  var $nickname;
  var $email;
  
  //privacy
  var $show_name;
  var $show_email;
  
  //photograph
  var $photo;
  
  //general
  var $gender;
  var $homepage;
  var $aim_username;
  var $yahoo_username;
  var $msn_username;
  var $icq_username;
  
  //location
  var $city_town;
  var $region_state;
  var $country;
  
  //work
  var $industry;
  var $occupation;
  
  //extended info
  var $interests;
  var $aboutme;
  var $fav_movies;
  var $fav_music;
  var $fav_books;
  
}

//authenticates a user, returns TRUE on sucessful authentication
function user_authenticate($username,$password)
{
  
  if ( $username == 'admin' && $password == 'admin' ) 
    return true;
  
  if ( $username == 'mod' && $password == 'mod' )
    return true;
    
  return false;
}

//logs in the user and sets CUR_USER global var appropriately admin for admin and username for mods
function user_login($username,$password)
{
  global $CUR_USER;
  
  $username = strtolower($username);
  
  if ( user_authenticate($username,$password) ) {
    $CUR_USER = $username;
    return true;
  } else {
    return set_error("Invalid username or password");
  }
}

// logs out the user by resetting the CUR_USER
function user_logout()
{
  global $CUR_USER;
  
  $CUR_USER = GUEST_USER;
  return true;
}

//loads the user with username $username and returns an object of type User
function user_load($username, $extended=false)
{
  global $db;
  
  if ( !$db->dbh ) 
    return set_error("user_load():Invalid database handle");
  
  $username = trim($username);
  if ( !$username ) 
    return set_error("user_load():Invalid username");
    
  if ($db->query("SELECT * FROM users WHERE username = '$useranme';")) {
    if ( db->num_rows() == 1 ) {
      $row = $db->fetch_array();
      
      $u = new User();
      if ( $extended == true ) {
        _user_load_extended($row,$u);
      } else {
        _user_load($row,$u);
      }
      
      return $u;
    } else {
      set_error("user_load():username doesnt exists".db->error());
    }//i guess i can remove the else part
  } else {
    //print db->error();
    set_error($db->error())
  }
}

//loads the row data in the user object
//for internal user only bcoz obj specific
//limited data of the user used mostly
function _user_load(&$row, &$obj) 
{
  //identity
  $obj->username = $row['username'];
  $obj->name = $row['name'];
  $obj->nickname = $row['nickname'];
  $obj->email = $row['email'];
}

//loads the row data in the user object
//for internal user only bcoz obj specific
//extended data of the user used rarely, mostly for user profile
function _user_load_extended(&$row, &$obj)
{
  $obj->username = $row['username'];
  $obj->name = $row['name'];
  $obj->nickname = $row['nickname'];
  $obj->email = $row['email'];
    
  //privacy
  $obj->show_name = $row['show_name'];
  $obj->show_email = $row['show_email'];
  
  //photograph
  $obj->photo = $row['photo'];
  
  //general
  $obj->gender = $row['gender'];
  $obj->homepage = $row['homapage'];
  $obj->aim_username = $row['aim_username'];
  $obj->yahoo_username = $row['yahoo_username'];
  $obj->msn_username = $row['msn_username'];
  $obj->icq_username = $row['icq_username'];
  
  //location
  $obj->city_town = $row['city_town'];
  $obj->region_state = $row['region_state'];
  $obj->country = $row['country'];
  
  //work
  $obj->industry = $row['industry'];
  $obj->occupation = $row['occupation'];
  
  //extended info
  $obj->interests = $row['interests'];
  $obj->aboutme = $row['aboutme'];
  $obj->fav_movies = $row['fav_movies'];
  $obj->fav_music = $row['fav_music'];
  $obj->fav_books = $row['fav_books'];
}

//adds a new moderator to the database with useranme,email and random password
function user_new($username, $email)
{
  if ( !sys_req_user(ADMIN_USER) ) {
    return set_error("user_new():Only administrator can add a moderator");
  } else {
    $username = trim($username);
    $email = trim($email);
    
    if ( !$username || !$email ) {
      return set_error("user_new():username or email cannot be blank");
    } else {
      //generate random password
      $password = 'axdzsc';
      //insert user in the database
      if ( !$db->dbh ) {
        return set_error("user_new(): Invalid database handle");
      } else {
        if ( $db->query("INSERT INTO users(username,email,password) values ('$username','$email',MD5($password));") ) {
          //send the user an email
          //mail($email,"QikBlogger Password","$password");
          
          return user_load($username);
        } else {
          return set_error("user_new():".$db->error());
        } 
      }
    }
  }
}
?>
