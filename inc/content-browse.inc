<?
// example usage: archives.php?blog_name=qb&year=2005&month=09
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
?>

<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" background="img/body_bg.gif" > 
        <tr> 
          <td class="pads-left-right pads-top-bottom"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td class="white content-box"> 
                  
                <p class="heading">Available Blogs</p> 
<ul class="content">

                  
<?
if ( $db->query("SELECT blog_name,blog_desc FROM blogs") ) {
  
  $max = $db->num_rows();
  $i=0;
  
  for ( $i=0; $i<$max; $i++ ) {
    $row = $db->fetch_array();  
    $blogs[]=array("blog_name"=>$row['blog_name'],"blog_desc"=>$row['blog_desc']);
  }
  
  sort($blogs);

  foreach($blogs as $blog) {
?>
<li> 
<?
   echo "<a href=\"blogs.php?blog_name=".
   $blog['blog_name'].
   "\" class=\"content-links\">". 
   $blog['blog_name']."</a> - ". 
   stripslashes($blog['blog_desc']); 
?>
</li>
<?
    //echo $blog['blog_name']." == " .$blog['blog_title'];
  }
} else {
  echo "<p class=\"content\"> Please try later.</p>";
}
?>
</ul>



                <p class="content">&nbsp;</p>
                
                
                
                
                
                </td> 
              </tr> 
            </table></td> 
        </tr> 
      </table>

