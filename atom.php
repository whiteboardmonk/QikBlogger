<?php header("Content-Type: text/xml; charset=utf-8");
echo "<?xml version=\"1.0\" ?>\n";
echo "<?xml-stylesheet href=\"css/atom.css\" type=\"text/css\"?>\n";

// include config file
require_once("config.php");
// include files
require_once(INC_ROOT."/dblayer.php");
require_once(INC_ROOT."/system.php");
require_once(INC_ROOT."/users.php");
require_once(INC_ROOT."/blogs.php");
require_once(INC_ROOT."/posts.php");
require_once(INC_ROOT."/comments.php");

// initialise db access
global $db;
$db = new MySQL();
$db->connect();

if ( isset($_GET['blog_name']) ) {
  $blog_name = trim($_GET['blog_name']);
  
  if ( $b=blog_load($blog_name) ) {
?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:lang="en-US">

  <link rel="self" type="application/atom+xml" title="<?=$b->blog_title?>" href="<?=strtolower(strtok($_SERVER['SERVER_PROTOCOL'], '/')).'://'.$_SERVER['HTTP_HOST'].'atom.php'?>" />
  <link rel='alternate' type='text/html' title="<?=$b->blog_title?>" href="<?=$b->blog_url?>" />
  <title mode="escaped" type="text/html"><?=htmlentities($b->blog_title)?></title>
  <tagline mode="escaped" type="text/html"><?=htmlentities($b->blog_desc)?></tagline>
  <updated><?=date('Y-m-d\TH:i:sZ')?></updated>
  <id><?=$b->blog_url?></id>
  <generator url="<?=strtolower(strtok($_SERVER['SERVER_PROTOCOL'], '/')).'://'.$_SERVER['HTTP_HOST']?>">Qikblogger</generator>
  <icon><?=strtolower(strtok($_SERVER['SERVER_PROTOCOL'], '/')).'://'.$_SERVER['HTTP_HOST'].'/qb/img/logo_ico.gif'?></icon>
  <info mode="xml" type="text/html">
    <div xmlns="http://www.w3.org/1999/xhtml">This is an Atom formatted XML site feed. It is intended to be viewed in a Newsreader or syndicated to another site.</div>
  </info>


<?
  
  $post_ids = $b->get_frontpage_posts();
    
    for ( $i=0; $i<count($post_ids) ; $i++ ) { // for posts on the page
      
      $p = new Post();
      $p = post_load($post_ids[$i]);
            
      $author = new User();
      $author = user_load($p->post_user_id);
      
      // used to form urls
      // TODO: permalinks makes sure of a unique link considering the present month and year bt sud mak sure unque considering all
      $month = $p->get_month();
      $year = $p->get_year();
      $permalink = $p->permalink;
      $link = "http://" . $_SERVER['HTTP_HOST'] . WEB_ROOT . "/view.php?blog_name=$p->blog_name&year=$year&month=$month&permalink=$permalink";
    ?>
    
    <entry>
      <author>
        <name><?=$author->name?></name>
      </author>
      <published><?$p->get_disp_dt_atom()?></published>
      <updated><?$p->get_last_edit_dt_atom()?></updated>
      <link href="<?=htmlentities($link)?>" rel="alternate" title="<?=$p->title?>" type="text/html"/>
      <id><?=htmlentities($link)?></id>
      <title mode="escaped" type="text/html"><?=htmlentities($p->title)?></title>
      <content mode="escaped" type="text/html" xml:base="<?=$b->blog_url?>"><?=htmlentities($p->content)?></content>
    </entry>
    
    <?
    }
    ?>

</feed>
<?
  }
}
?>
