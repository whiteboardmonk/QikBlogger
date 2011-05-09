{mask:main}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>{BlogPageTitle}</title>

  {BlogMetaData}


  <style type="text/css">


/* 
Blogger Template Style
Name:     TicTac (Blueberry)
Author:   Dan Cederholm
URL:      www.simplebits.com
Date:     1 March 2004
*/

/* ---( page defaults )--- */

body {
  margin: 0;
  padding: 0;
  font-family: Verdana, sans-serif;
  font-size: small;
  text-align: center;
  color: #333;
  background: #e0e0e0;
  }

blockquote {
  margin: 0 0 0 30px;
  padding: 10px 0 0 20px;
  font-size: 88%;
  line-height: 1.5em;
  color: #666;
  background: url(templates/tictac/img/quotes.gif) no-repeat top left;
  }

blockquote p {
  margin-top: 0;
  }

abbr, acronym {
  cursor: help;
  font-style: normal;
  border-bottom: 1px dotted;
  }

code {
  color: #996666;
  }

hr {
  display: none;
  }

img {
  border: none;
  }

/* unordered list style */

ul {
  list-style: none;
  margin: 0 0 20px 30px;
  padding: 0;
  }

li {
  list-style: none;
  padding-left: 14px;
  margin-bottom: 3px;
  background: url(templates/tictac/img/tictac_blue.gif) no-repeat 0 6px;
  }

/* links */

a:link {
  color: #6699cc;
  }

a:visited {
  color: #666699;
  }

a:hover {
  color: #5B739C;
  }

a:active {
  color: #5B739C;
  text-decoration: none;
  }

/* ---( layout structure )---*/

#wrap {
  width: 847px;
  margin: 0 auto;
  text-align: left;
  background: url(templates/tictac/img/tile.gif) repeat-y;
  }

#content {
  margin-left: 62px; /* to avoid the BMH */
  }

#main-content {
  float: left;
  width: 460px;
  margin: 20px 0 0 0;
  padding: 0;
  line-height: 1.5em;
  }

#sidebar {
  margin: 0 41px 0 547px;
  padding: 20px 0 0 0;
  font-size: 85%;
  line-height: 1.4em;
  color: #999;
  background: url(templates/tictac/img/sidebar_bg.gif) no-repeat 0 0;
  }

/* ---( header and site name )--- */

#blog-header {
  margin: 0;
  padding: 0;
  font-family: "Lucida Grande", "Trebuchet MS";
  background: #e0e0e0 url(templates/tictac/img/top_div_blue.gif) no-repeat top left;
  }

#blog-header h1 {
  margin: 0;
  padding: 45px 60px 50px 160px;
  font-size: 200%;
  color: #fff;
  text-shadow: #4F73B6 2px 2px 2px;
  background: url(templates/tictac/img/top_h1_blue.gif) no-repeat bottom left;
  }

#blog-header h1 a {
  text-decoration: none;
  color: #fff;
  }

#blog-header h1 a:hover {
  color: #eee;
  }

/* ---( main column )--- */

h2.date-header {
  margin-top: 0;
  padding-left: 14px;
  font-size: 90%;
  color: #999999;
  background: url(templates/tictac/img/date_icon_blue.gif) no-repeat 0 50%;
  }

h3.post-title {
  margin-top: 0;
  font-family: "Lucida Grande", "Trebuchet MS";
  font-size: 130%;
  letter-spacing: -1px;
  color: #993333;
  }

.post {
  margin: 0 0 1.5em 0;
  padding: 0 0 1.5em 14px;
  border-bottom: 1px solid #ddd;
  }

.post-footer {
  margin: 0;
  padding: 0 0 0 14px;
  font-size: 88%;
  color: #999;
  background: url(templates/tictac/img/tictac_grey.gif) no-repeat 0 8px;
  }

.post img {
  padding: 6px;
  border-top: 1px solid #ddd;
  border-left: 1px solid #ddd;
  border-bottom: 1px solid #c0c0c0;
  border-right: 1px solid #c0c0c0;
  }

/* comment styles */

#comments {
  padding-top: 10px;
  font-size: 85%;
  line-height: 1.5em;
  color: #666;
  background: #eee url(templates/tictac/img/comments_curve.gif) no-repeat top left;
  }

#comments h4 {
  margin: 20px 0 15px 0;
  padding: 8px 0 0 40px;
  font-family: "Lucida Grande", "Trebuchet MS";
  font-size: 130%;
  color: #666;
  background: url(templates/tictac/img/bubbles.gif) no-repeat 10px 0;
  height: 29px !important; /* for most browsers */
  height /**/:37px; /* for IE5/Win */
  }
  
#comments ul {
  margin-left: 0;
  }

#comments li {
  background: none;
  padding-left: 0;
  }
  
.comment-body {
  padding: 0 10px 0 25px;
  background: url(templates/tictac/img/tictac_blue.gif) no-repeat 10px 5px;
  }

.comment-body p {
  margin-bottom: 0;
  }

.comment-data {
  margin: 4px 0 0 0;
  padding: 0 10px 1em 60px;
  color: #999;
  border-bottom: 1px solid #ddd;
  background: url(templates/tictac/img/comment_arrow_blue.gif) no-repeat 44px 2px;
  }

.deleted-comment {
  font-style:italic;
  color:gray;
  }

/* ---( sidebar )--- */

h2.sidebar-title {
  margin: 0 0 0 0;
  padding: 25px 0 0 50px;
  font-family: "Lucida Grande", "Trebuchet MS";
  font-size: 130%;
  color: #666;
  height: 32px;
  background: url(templates/tictac/img/sidebar_icon.gif) no-repeat 20px 15px;
  height: 32px !important; /* for most browsers */
  height /**/:57px; /* for IE5/Win */
  }

#sidebar ul, #sidebar p {
  margin: 0;
  padding: 5px 20px 1em 20px;
  border-bottom: 1px solid #ddd;
  }

#sidebar li {
  background: url(templates/tictac/img/tictac_blue.gif) no-repeat 0 5px;
  }

/* profile block */

.profile-datablock {
  margin: 0;
  padding: 5px 20px 0 20px;
  }

.profile-datablock dd {
  margin: 0;
  padding: 0;
  }

.profile-img img {
  float: left;
  margin: 0 10px 0 0;
  padding: 4px;
  border-top: 1px solid #ddd;
  border-left: 1px solid #ddd;
  border-bottom: 1px solid #c0c0c0;
  border-right: 1px solid #c0c0c0;
  background: #fff;
  }

#sidebar p.profile-link {
  padding-left: 36px;
  background: url(templates/tictac/img/profile_blue.gif) no-repeat 20px 4px;
  }

p#powered-by, #sidebar p.profile-textblock {
  margin-top: 1em;
  border: none;
  }

/* ---( footer )--- */

.clear { /* to fix IE6 padding-top issue */
  clear: both;
  height: 0;
  }

#footer {
  margin: 0;
  padding: 0 0 9px 0;
  font-size: 85%;
  color: #ddd;
  background: url(templates/tictac/img/bottom_sill.gif) no-repeat bottom left;
  }

#footer p {
  margin: 0;
  padding: 20px 320px 20px 95px;
  background: url(templates/tictac/img/bottom_sash.gif) no-repeat top left;
  }


{if: {ItemPage} == true}
/* ---- overrides for post page ---- */
.post {
  padding: 0;
  border: none;
  }
{/if}

</style>


</head>

<body>

<div id="wrap"> <!-- #wrap - for centering -->

<!-- Blog Header -->
<div id="blog-header">
  <h1>
    {if: {HomeLink} == true }<a href="{BlogURL}">{/if}
    {BlogTitle}
    {if: {HomeLink} == true }</a>{/if}
  </h1>
</div>


<div id="content"> <!-- #content wrapper -->

<!-- Begin #main-content -->
<div id="main-content">

{mask:Blogger}

  {mask:BloggerDateHeader}
    <h2 class="date-header">{BloggerDateHeaderDate}</h2>
  {/mask}
  
     
  <!-- Begin .post -->
  <div class="post"><a name="{BlogItemNumber}"></a>
     
    {mask:BlogItemTitle}
      <h3 class="post-title">
      <!-- 
      {mask:BlogItemUrl}<a href="{BlogItemUrl}" title="external link">{/mask}
      -->
       {BlogItemTitle}
      <!-- 
      {mask:BlogItemUrl}</a>{/mask}
      -->
      </h3>
    {/mask}
     
    <div class="post-body">
    
      <p>{BlogItemBody}</p>
    
    </div>
    <div class="post-footer">
      <ul>
      {mask:Tags}
        <li style="display:inline;line-height:24px;"><a href="{TagURL}">{TagName}</a></li>
      {/mask}
      </ul>
    </div>
    <p class="post-footer">posted by {BlogItemAuthorNickname} at 
      <a href="{BlogItemPermalinkUrl}" title="permanent link">{BlogItemDateTime}</a> 
      {if: {../ItemPage} == false }
        {if: {BlogItemCommentsEnabled} == true } | 
         <a class="comment-link" href="{BlogItemCommentCreate}">{BlogItemCommentCount} 
          {if: {BlogItemCommentCount} == 1 } comment {/if}
          {if: {BlogItemCommentCount} != 1 } comments {/if}
         </a>
        {/if}
      {/if}
      {BlogItemControl}
    </p>
  
  </div>
  <!-- End .post -->
  
  
   <!-- Begin #comments -->
 {if: {../ItemPage} == true }

  <div id="comments"> 

	{if: {BlogItemCommentsEnabled} == true }
  
  <a name="comments"></a>
    
    <h4>{BlogItemCommentCount} 
    {if: {BlogItemCommentCount} == 1 } Comment {/if}
    {if: {BlogItemCommentCount} != 1 } Comments {/if}
    :</h4>
    
    <ul>
      {mask:BlogItemComments}
        <li><a name="{BlogCommentNumber}"></a>
          <div class="comment-body">
           <p>{BlogCommentBody}</p>
          </div>
        <p class="comment-data">By {BlogCommentAuthor}, at <a href="#{BlogCommentNumber}" title="comment permalink">{BlogCommentDateTime}</a>
        {BlogCommentDeleteIcon}</p>
        </li>
      {/mask}
    </ul>
	
    <p class="comment-data">
      <a href="{BlogItemCommentCreate}">Post a comment</a> <!--{BlogItemCreate}-->
    <br /><br />

	{/if}

	<a href="{../BlogURL}">&lt;&lt; Home</a>
    </p>
    </div>
  
  {/if}
  <!-- End #comments -->

{/mask}

  <hr />
</div><!-- End #main-content -->
</div><!-- End #content -->



<!-- Begin #sidebar -->
<div id="sidebar">

  <h2 class="sidebar-title">About</h2>
  
  <p>{BlogDescription}</p>
  
   <!-- Begin #profile-container -->
   
   {BlogMemberProfile}
   
  <!-- End #profile -->
  <!--
  {if: {MainOrArchivePage} == true }
  <h2 class="sidebar-title">Friends who visit my Blog</h2>
  <blockquote style=" font-size:9px;"> [ Do leave ur comments to let me know ]</blockquote>  

  <ul>
    	<li><a target="_blank" href="http://spaces.msn.com/members/barkha">Barkha</a></li>
    	<li><a href="#">ManAsi</a></li>
         <li><a target="_blank" href="http://www.pascal_nunes.blogspot.com/">Pascal</a></li>
    	<li><a href="#">Patrick</a></li>
    	<li><a href="#">Priya</a></li>
    	<li><a target="_blank" href="http://spaces.msn.com/members/snehpriya">Priya (snehpriya)</a></li>
    	<li><a href="#">Rohit</a></li>
    	<li><a href="#">Sampada</a></li>
    	<li><a href="http://sandesh247.blogspot.com/">Sandy</a></li>
    	<li><a target="_blank" href="http://www.livejournal.com/~vinodpillai">Vinod</a></li>
  </ul>
  {/if}
  -->
<!--
  <h2 class="sidebar-title">Previous</h2>
  
  <ul id="recently">
    <BloggerPreviousItems>
        <li><a href="<$BlogItemPermalinkURL$>"><$BlogPreviousItemTitle$></a></li>
     </BloggerPreviousItems>
  </ul>
  -->
  
  {if: {MainOrArchivePage} == true }
  <h2 class="sidebar-title">Archives</h2>
  
  <ul class="archive-list">
   	  {mask:BloggerArchives}
    	<li><a href="{BlogArchiveURL}">{BlogArchiveName}</a></li>
      {/mask}
      <!--<ArchivePage><li><a href="<$BlogURL$>">Current Posts</a></li></ArchivePage> -->
  </ul>
  {/if}
  
  
  <!--<h2 class="sidebar-title">New</h2>
  
  <p>This is a paragraph of text in the sidebar.</p>
  -->
  
  <!-- <p id="powered-by"><a href="http://www.blogger.com"><img src="http://buttons.blogger.com/bloggerbutton1.gif" alt="Powered by Blogger" /></a></p> -->
		<p id="powered-by"><a href="rss.php?blog_name={BlogTitle}"><img src="img/rssfeed.png" alt="RSS Feed" /></a></p>
		<p id="powered-by"><a href="atom.php?blog_name={BlogTitle}"><img src="img/atomfeed.png" alt="Atom Feed" /></a></p>

</div>
<!-- End #sidebar -->

<div class="clear">&nbsp;</div>

<div id="footer">
   <p><!-- If you'd like, you could place footer information here. -->&nbsp;</p>
</div>

</div> <!-- end #wrap -->

<!-- c(~) -->
</body>
</html>
{/mask}
