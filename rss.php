<?php header("Content-Type: text/xml; charset=utf-8");
echo "<?xml version=\"1.0\" ?>\n";?>
<rss version="2.0">
<?
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
    <channel>
    <title><?=$b->blog_title?></title>
    <link><?=$b->blog_url?></link>
    <description>
      <?=$b->blog_desc?>
    </description>
    <pubDate><?=strftime("%a, %d %b %Y %T %z")?></pubDate>
    <generator><?=strtolower(strtok($_SERVER['SERVER_PROTOCOL'], '/')).'://'.$_SERVER['HTTP_HOST']?></generator>
    <language>en</language>
    <docs>http://blogs.law.harvard.edu/tech/rss</docs>
    <image><?=strtolower(strtok($_SERVER['SERVER_PROTOCOL'], '/')).'://'.$_SERVER['HTTP_HOST'].'img/logo_ico.gif'?></image>
    <?
    
    $post_ids = $b->get_frontpage_posts();
    
    for ( $i=0; $i<count($post_ids) ; $i++ ) { // for posts on the page
      
      $p = new Post();
      $p = post_load($post_ids[$i]);
      
      // used to form urls
      // TODO: permalinks makes sure of a unique link considering the present month and year bt sud mak sure unque considering all
      $month = $p->get_month();
      $year = $p->get_year();
      $permalink = $p->permalink;
      $link = "http://" . $_SERVER['HTTP_HOST'] . WEB_ROOT . "/view.php?blog_name=$p->blog_name&year=$year&month=$month&permalink=$permalink";
      
      ?>
      <item>
        <title><?=$p->title?></title>
        <link>
          <?=htmlentities($link)?>
        </link>
        <comments>
          <?=htmlentities($link.'#comments')?>
        </comments>
        <description>
          <?=htmlentities($p->content)?>
        </description>
        <pubDate><?=$p->get_disp_dt_rss()?></pubDate>
        <guid  isPermaLink="false">
          <?=htmlentities($link)?>
        </guid>
      </item>
      <?
      
    }
    ?>
    </channel>
    <?
  }
}
?>
</rss>
