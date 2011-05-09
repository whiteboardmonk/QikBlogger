{mask:main}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title>{BlogPageTitle}</title>

  {BlogMetaData}

  <style type="text/css">
/*
-----------------------------------------------
Blogger Template Style
Name:     Ms. Moto (Pinky Lee variation)
Designer: Jeffrey Zeldman
URL:      www.zeldman.com
Date:     23 Feb 2004
----------------------------------------------- */


	/* Primary layout */

body	{
	margin: 0;
	padding: 0;
	border: 0;
	text-align: center;
	color: #555;
	background: #d7b url(http://www.blogblog.com/moto_ms/outerwrap.gif) top center repeat-y;
	font: small tahoma, "Bitstream Vera Sans", "Trebuchet MS", "Lucida Grande", lucida, helvetica, sans-serif;
	}

img		{
	border: 0;
	display: block;
	}


	/* Wrapper */

@media all {
  #wrapper {
    margin: 0 auto;
    padding: 0;
    border: 0;
    width: 690px;
    text-align: left;
    background: #fff url(http://www.blogblog.com/moto_ms/innerwrap.gif) top right repeat-y;
    font-size:90%;
    }
  }
@media handheld {
  #wrapper {
    width: 90%;
    }
  }

        /* Header */

#blog-header	{
	color: #fef;
	background: #e8b url(http://www.blogblog.com/moto_ms/headbotborder.gif) bottom left repeat-x;
	margin: 0 auto;
	padding: 0 0 15px 0;
	border: 0;
	}

#blog-header h1	{
	font-size: 24px;
	text-align: left;
	padding: 15px 20px 0 20px;
	margin: 0;
	background-image: url(http://www.blogblog.com/moto_ms/topper.gif);
	background-repeat: repeat-x;
	background-position: top left;
	}
	
#blog-header p	{
	font-size: 110%;
	text-align: left;
	padding: 3px 20px 10px 20px;
	margin: 0;
	line-height:140%;
	}

	
	/* Inner layout */

#content	{
	padding: 0 20px;
	}

@media all {
  #main	{
    width: 400px;
    float: left;
    }

  #sidebar {
    width: 226px;
    float: right;
    }
  }
@media handheld {
  #main	{
    width: 100%;
    float: none;
    }

  #sidebar {
    width: 100%;
    float: none;
    }
  }

        /* Bottom layout */


#footer	{
	clear: left;
	margin: 0;
	padding: 0 20px;
	border: 0;
	text-align: left;
	border-top: 1px solid #f9f9f9;
	background-color: #fdfdfd;
	}
	
#footer p	{
	text-align: left;
	margin: 0;
	padding: 10px 0;
	font-size: x-small;
	background-color: transparent;
	color: #999;
	}


	/* Default links 	*/

a:link, a:visited {
	font-weight : bold; 
	text-decoration : none;
	color: #c28;
	background: transparent; 
	}

a:hover {
	font-weight : bold; 
	text-decoration : underline;
	color: #e8b;
	background: transparent; 
	}

a:active {
	font-weight : bold; 
	text-decoration : none;
	color: #c28;
	background: transparent;  
	}

	
	/* Typography */
	
#main p, #sidebar p {
	line-height: 140%;
	margin-top: 5px;
	margin-bottom: 1em;
	}
  
.post-body {
  line-height: 140%;
  } 

h2, h3, h4, h5	{
	margin: 25px 0 0 0;
	padding: 0;
	}

h2	{
	font-size: large;
	}

h3.post-title {
	margin-top: 5px;
	font-size: medium;
	}

ul	{
	margin: 0 0 25px 0;
	}


li	{
	line-height: 160%;
	}

#sidebar ul 	{
	padding-left: 10px;
	padding-top: 3px;
	}

#sidebar ul li {
	list-style: disc url(http://www.blogblog.com/moto_ms/diamond.gif) inside;
	vertical-align: top;
	padding: 0;
	margin: 0;
	}
	
dl.profile-datablock	{
	margin: 3px 0 5px 0;
	}
dl.profile-datablock dd {
  line-height: 140%;
  }
	
.profile-img {display:inline;}

.profile-img img {
	float:left;
	margin:0 10px 5px 0;
	border:4px solid #e8b;
	}
		
#comments	{
	border: 0;
	border-top: 1px dashed #eed;
	margin: 10px 0 0 0;
	padding: 0;
	}

#comments h3	{
	margin-top: 10px;
	margin-bottom: -10px;
	font-weight: normal;
	font-style: italic;
	text-transform: uppercase;
	letter-spacing: 1px;
	}	

#comments dl dt 	{
	font-weight: bold;
	font-style: italic;
	margin-top: 35px;
	padding: 1px 0 0 18px;
	background: transparent url(http://www.blogblog.com/moto_ms/commentbug.gif) top left no-repeat;
	color: #aaa;
	}

#comments dl dd	{
	padding: 0;
	margin: 0;
	}
.deleted-comment {
  font-style:italic;
  color:gray;
  }
.comment-link {
  margin-left:.6em;
  }
</style>

</head>
<body>


<!-- Begin wrapper -->
<div id="wrapper">

  <div id="blog-header"><h1>
    {if: {HomeLink} == true }<a href="{BlogURL}">{/if}
    {BlogTitle}
    {if: {HomeLink} == true }</a>{/if}
  </h1>
  <p>{BlogDescription}</p></div>


<!-- Begin content -->
<div id="content">

  <!-- Begin main column -->
	<div id="main">

{mask:Blogger}

    {mask:BlogDateHeader}
  <h2 class="date-header">{BlogDateHeaderDate}</h2>

  {/mask}
    
       
    <!-- Begin .post -->
    <div class="post"><a name="{BlogItemNumber}"></a>
         {mask:BlogItemTitle}
    <h3 class="post-title">
	 <a href="{../BlogItemUrl}" title="external link">
	 {BlogItemTitle}
	 </a>
    </h3>

    {/mask}
	         <div class="post-body">
	<p>
      {BlogItemBody}
    </p>
		<div class="post-footer">
      <ul>
      {mask:Tags}
        <li style="display:inline;line-height:24px;"><a href="{TagURL}">{TagName}</a></li>
      {/mask}
      </ul>
    </div>
    </div>
        <p class="post-footer">
      <em>posted by {BlogItemAuthorNickname} @ <a href="{BlogItemPermalinkUrl}" title="permanent link">{BlogItemDateTime}</a></em>

      {if: {MainOrArchivePage} == true}
			{if: {BlogItemCommentsEnabled} == true}
         <a class="comment-link" href="{BlogItemCommentCreate}"{BlogItemCommentFormOnclick}>{BlogItemCommentCount} comments</a>
      {/if}<BlogItemBacklinksEnabled>
<a class="comment-link" href="{BlogItemPermalinkUrl}#links">links to this post</a>
</BlogItemBacklinksEnabled>
{/if}  {BlogItemControl}
    </p>
    
    </div>
    <!-- End .post -->
  
  
    
    <!-- Begin #comments -->
 {if: {ItemPage} == true}

  <div id="comments">

	{if: {BlogItemCommentsEnabled} == true}<a name="comments"></a>
      
      <h3>{BlogItemCommentCount} Comments:</h3>
      
      <dl>
      {mask:BlogItemComments}
        <dt id="c{BlogCommentNumber}"><a name="c{BlogCommentNumber}"></a>
          At <a href="#c{BlogCommentNumber}" title="comment permalink">{BlogCommentDateTime}</a>,
          {BlogCommentAuthor} said...
        </dt>

        <dd>
          <p>{BlogCommentBody}</p>
	  {BlogCommentDeleteIcon}
        </dd>
        {/mask}
      </dl>
		<p>
    {BlogItemCreate}
    </p>

    {/if}   
    <BlogItemBacklinksEnabled>
    <a name="links"></a><h4>Links to this post:</h4>
    <dl id="comments-block">
    <BlogItemBacklinks>
        <dt class="comment-title">
        {BlogBacklinkControl}
        <a href="{BlogBacklinkURL}" rel="nofollow">{BlogBacklinkTitle}</a> {BlogBacklinkDeleteIcon}
        </dt>
        <dd class="comment-body">{BlogBacklinkSnippet}
        <br />
        <span class="comment-poster">
        <em>posted by {BlogBacklinkAuthor} @ {BlogBacklinkDateTime}</em>
        </span>
        </dd>
    </BlogItemBacklinks>
    </dl>
    <p class="comment-timestamp">{BlogItemBacklinkCreate}</p>
    </BlogItemBacklinksEnabled>


		<p>
	<a href="{BlogURL}">&lt;&lt; Home</a>
    </p>
    </div>

{/if}
    <!-- End #comments -->

{/mask}
    <!-- End main column -->	
	</div>
	



	
	<div id="sidebar">



    <!-- Begin #profile-container -->
    
   {BlogMemberProfile}
    
    <!-- End #profile-container -->
    
        {if: {MainOrArchivePage} == true }
  <h2 class="sidebar-title">Links</h2>
    <ul>
    	<li><a href="http://news.google.com/">Google News</a></li>
    	<li><a href="http://help.blogger.com/bin/answer.py?answer=110">Edit-Me</a></li>
    	<li><a href="http://help.blogger.com/bin/answer.py?answer=110">Edit-Me</a></li>
  </ul>
  {/if}
  
  
  <h2 class="sidebar-title">Previous Posts</h2>

    <ul id="recently">
    <BloggerPreviousItems>
        <li><a href="{BlogItemPermalinkURL}">{BlogPreviousItemTitle}</a></li>
     </BloggerPreviousItems>
  </ul>
    {if: {MainOrArchivePage} == true}
  <h2 class="sidebar-title">Archives</h2>
    <ul class="archive-list">

   	  {mask:BloggerArchives}
    	<li><a href="{BlogArchiveURL}">{BlogArchiveName}</a></li>
	  {/mask}

  </ul>
  {/if}
      <p id="powered-by"><a href="http://www.blogger.com"><img src="http://buttons.blogger.com/bloggerbutton1.gif" alt="Powered by Blogger" /></a></p>
					<p id="powered-by"><a href="rss.php?blog_name={BlogTitle}"><img src="img/rssfeed.png" alt="RSS Feed" /></a></p>
		<p id="powered-by"><a href="atom.php?blog_name={BlogTitle}"><img src="img/atomfeed.png" alt="Atom Feed" /></a></p>
  
    <!--
    <p>This is a paragraph of text that could go in the sidebar.</p>
    -->

  <!-- End sidebar -->
  </div>

<!-- End content -->
</div>

<div id="footer">
<p><!-- Blog contents copyright &copy; 2004 <a href="mailto:johndoe@example.com" title="Write to me.">Your Name Here</a> -->&nbsp;</p>
</div>


<!-- End wrapper -->
</div>



</body>
</html>
{/mask}
