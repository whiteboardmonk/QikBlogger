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

// example usage: view.php?blog_name=qb&year=2005&month=09&permalink=just-adding-another-article
session_start();
// include config file
require_once("config.php");
// include files
require_once(INC_ROOT."/dblayer.php");
require_once(INC_ROOT."/system.php");
require_once(INC_ROOT."/users.php");
require_once(INC_ROOT."/blogs.php");
require_once(INC_ROOT."/posts.php");
require_once(INC_ROOT."/comments.php");
require_once(INC_ROOT."/ets.php");

// initialise db access
global $db;
$db = new MySQL();
$db->connect();

$showform = false;
$err_msg = '';

if ( isset($_GET['blog_name']) && isset($_GET['year']) && isset($_GET['month']) && isset($_GET['permalink']) ) {
  $blog_name = trim($_GET['blog_name']);
  $year = trim($_GET['year']);
  $month = trim($_GET['month']);
  $permalink = trim($_GET['permalink']);
  
  if ( $b = blog_load($blog_name) ) {
    
    $page->ItemPage = true; // for URL at the top
    // setting info related to the Blog
    $page->BlogPageTitle = $b->blog_pgtitle;
    $page->BlogTitle = $b->blog_pgtitle;
    $page->BlogURL = $b->blog_url;
    $page->MainOrArchivePage = false;
    $page->HomeLink = true; // for a link to the homepage
    
    $p = new Post();
    
    if ( $p = post_load_permalink($b->blog_name, $year, $month, $permalink) ) {
      
      $author = new User();
      $author = user_load($p->post_user_id);
      
            
      // used to form urls
      $month = $p->get_month();
      $year = $p->get_year();
      $permalink = $p->permalink;

      $page->Blogger[0]->BloggerDateHeader->BloggerDateHeaderDate = $p->get_date_header_date();//'Saturday, September 10, 2005';//
      $page->Blogger[0]->BlogItemTitle->BlogItemTitle = $p->title; //' FiReFLy@home'
      
      // doesnt come out well
      //$page->Blogger[0]->BlogItemTitle->BlogItemUrl->BlogItemUrl = "http://" . $_SERVER['HTTP_HOST'] . WEB_ROOT . "/view.php?blog_name=$p->blog_name&year=$year&month=$month&permalink=$permalink";
      $page->Blogger[0]->BlogItemBody = $p->content; //'Its been raining heavily for the last 2 days especially during nights.<br />I do have a welcome visitor at home though.<br /><blockquote>Its a reflection... no Its an illusion... no no ... Its a firefly !</blockquote><br />Yup its a firefly. Looks awesome ! A small greenish-yellow bulb moving and flying around. Coudnt stop staring at it. I have see fireflies when I have been to treks (everywhere on trees at night in Peth and on railways tracks when I had been to Mahuli).<br /><br />I have also seen <span style="font-style: italic;">jugnoos </span>at Juhu Beach long long back. I still remember dat site of a boundary formed at the edge of the beach in the evening after sunset.(Can anybody confirm whether <span style="font-style: italic;">Jugnoos  </span>and fireflies are the same creatures?) I remember me and my brother collecting a few of them in a bottle, bringing them home and waiting dedicatedly for them to glow which they never did.'
      $page->Blogger[0]->BlogItemAuthorNickname = $author->nickname; //'Akky';
      $page->Blogger[0]->BlogItemDateTime = $p->get_time(); //'11:44 PM';

      $page->Blogger[0]->BlogItemPermalinkUrl = "http://" . $_SERVER['HTTP_HOST'] . WEB_ROOT . "/view.php?blog_name=$p->blog_name&year=$year&month=$month&permalink=$permalink";
      
      if ( $p->allow_comments == 1 ) {
        $page->Blogger[0]->BlogItemCommentsEnabled = true;
      } else {
        $page->Blogger[0]->BlogItemCommentsEnabled = false;
      }
      
      $page->Blogger[0]->BlogItemCommentCreate = 'http://'.$_SERVER['HTTP_HOST'].WEB_ROOT.'/comment.php?blog_name='.$b->blog_name.'&post_id='.$p->post_id ; // http://ak47surve.blogspot.com/2005/09/create.html';
      $page->Blogger[0]->BlogItemCommentCount = $p->get_num_comments(); //5;
      
      // work with comments
      $comment_ids = $p->get_comment_ids();
      $c = new Comment();
      
      for ( $i=0; $i<count($comment_ids) ; $i++ ) {
        $c = comment_load($comment_ids[$i]);
        
        $page->Blogger[0]->BlogItemComments[$i]->BlogCommentNumber = $c->comment_id; //'123456';
        $page->Blogger[0]->BlogItemComments[$i]->BlogCommentBody = $c->comment; //'hmm. so u really care for and miss other people. Now i know us din college kyun late aaya.';
        $page->Blogger[0]->BlogItemComments[$i]->BlogCommentAuthor = $c->name; //'Rohit';
        $page->Blogger[0]->BlogItemComments[$i]->BlogCommentDateTime = $c->get_time();
      }
      
      // form tag_names
      $t = $p->get_tag_names();
      
      for ( $j=0;$j<count($t); $j++ ) {
        $page->Blogger[$i]->Tags[$j]->TagName = $t[$j];
        $page->Blogger[$i]->Tags[$j]->TagURL = "http://".$_SERVER['HTTP_HOST'].WEB_ROOT."/tag.php?blog_name=".$b->blog_name."&tagname=".$t[$j];
      }
      
      // sidebar archives
      $archives = $b->get_archive_dates();
      
      for ( $i=0 ; $i<count($archives)/2 ; $i++ ) {
        $page->BloggerArchives[$i]->BlogArchiveURL = "http://".$_SERVER['HTTP_HOST'].WEB_ROOT."/archives.php?blog_name=".$b->blog_name."&year=".$archives[$i*2]."&month=".$archives[$i*2+1];
        $page->BloggerArchives[$i]->BlogArchiveName = date('F Y',strtotime($archives[$i*2]."-".$archives[$i*2+1]."-01"));
      }
    
    
      //printt($page, 'http://'.$_SERVER['HTTP_HOST'].WEB_ROOT."/files/".$b->blog_name."/template"."/index.tpl");
      //printt($page,'files/qb/template/index.tpl');
      if ( file_exists("files/$b->blog_name/template/index.tpl") ) {
        printt($page,"files/$b->blog_name/template/index.tpl");
      } else {
        printt($page,'templates/tictac/template/index.tpl');
      }
    }
  } else { // incorrect blog_name
    $err_msg = "Blog with ".$_GET['blog_name']. "doesnt exists.";
  }
} else { // trying to come directly
  $err_msg = "Trying to come here directly";
}
?>
