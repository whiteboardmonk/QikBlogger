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


Class MySQL {
  // connection details
  var $host;
  var $username;
  var $password;
  var $database;
  // result details
  var $dbh;
  var $result;
  var $error;
  
  
  function MySQL()
  {
    // global $DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DBNAME;
    
    $this->host = DB_HOST;
    $this->username = DB_USERNAME;
    $this->password = DB_PASSWORD;
    $this->database = DB_DBNAME;
  }
  
   
  // connect to the MySQL and select database
  function connect() {
    if ( $this->dbh = mysql_pconnect($this->host, $this->username, $this->password) ) {
      if ( mysql_select_db("$this->database",$this->dbh) ) {
        return true;
      } else {
        set_error("connect():error in selecting db");
        return false;
      }
    } else {
      set_error("connect():error in connectin to mysql server");
      return false;
    }
  }
  
  // closes the connection with the mysql server
  function close()
  {
    return mysql_close($this->dbh);
  }
  
  // queries the MySQL db
  function query( $query )
  {
    //echo $query;
     
    if ( $this->dbh ) {
      
      $this->result = mysql_query($query, $this->dbh);
      
      if ( $this->result ) {
        return true;
      } else {
        set_error("query():Error in query");
        return false;
      }
    } else {
      set_error("query(): Invalid db handle");
      return false;
    }
  }
  
  // returns the no of rows in the result set
  function num_rows() {
    if ( $this->dbh ) {
      if ( $this->result ) {
        return mysql_num_rows($this->result);
      } else {
          set_error("num_rows(): Invalid resultset handle");
          return false;
      }
    } else {
      set_error("query(): Invalid db handle");
      return false;
    }
  }
  
  // fetches a result row and returns an array 
  function fetch_array() {
    if ( $this->dbh ) {
      if ( $this->result ) {
        return mysql_fetch_array($this->result);
      } else {
          set_error("fetch_array(): Invalid db handle");
          return false;
      }
    } else {
      set_error("fetch_array(): Invalid db handle");
      return false;
    }
  }
  
  // get last insert id
  function insert_id()
  {
    if ( $this->dbh ) {
      if ( $this->result ) {
        return mysql_insert_id($this->dbh);
      } else {
          set_error("insert_id(): Invalid db handle");
          return false;
      }
    } else {
      set_error("fetch_array(): Invalid db handle");
      return false;
    }
  }
  
  // get all values in column ids as an array
  function get_ids()
  {
    $ids = array();
    for( $i=0 ; $i<$this->num_rows() ; $i++ ) {
      $row = $this->fetch_array();
      $ids[] = $row['ids'];
    }
    
    return $ids;
  }
  
  
  function error()
  {
    
  }
  
}

?>
