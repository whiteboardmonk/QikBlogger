{mask:main}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>{BlogPageTitle}</title>

  {BlogMetaData}

  <style type="text/css">
/*
-----------------------------------------------------
Blogger Template Style Sheet
Name:     Scribe
Designer: Todd Dominey
URL:      domineydesign.com / whatdoiknow.org
Date:     27 Feb 2004
------------------------------------------------------ */


/* Defaults
----------------------------------------------- */
body {
	margin:0;
	padding:0;
	font-family: Georgia, Times, Times New Roman, sans-serif;
	font-size: small;
	text-align:center;
	color:#29303B;
	line-height:1.3;
	background:#483521 url("http://www.blogblog.com/scribe/bg.gif") repeat;
}

blockquote {
	font-style:italic;
	padding:0 32px;
	line-height:1.6;
	margin:0 0 .6em 0;
}

p {margin:0;padding:0};

abbr, acronym {
	cursor:help;
	font-style:normal;
}
	
code {font:12px monospace;white-space:normal;color:#666;}

hr {display:none;}

img {border:0;}

/* Link styles */
a:link {color:#473624;text-decoration:underline;}
a:visited {color:#716E6C;text-decoration:underline;}
a:hover {color:#956839;text-decoration:underline;}
a:active {color:#956839;}


/* Layout
----------------------------------------------- */
@media all {
  #wrap {
            background-color:#473624;
            border-left:1px solid #332A24;
            border-right:1px solid #332A24;
            width:700px;
            margin:0 auto;
            padding:8px;
            text-align:center;
    }
  #main-top {
            width:700px;
            height:49px;
            background:#FFF3DB url("http://www.blogblog.com/scribe/bg_paper_top.jpg") no-repeat top left;
            margin:0;padding:0;
            display:block;
    }
  #main-bot {
            width:700px;
            height:81px;
            background:#FFF3DB url("http://www.blogblog.com/scribe/bg_paper_bot.jpg") no-repeat top left;
            margin:0;
            padding:0;
            display:block;
    }
  #main-content {
            width:700px;
            background:#FFF3DB url("http://www.blogblog.com/scribe/bg_paper_mid.jpg") repeat-y;
            margin:0;
            text-align:left;
            display:block;
    }
  }
@media handheld {
  #wrap {
            width:90%;
    }
  #main-top {
            width:100%;
            background:#FFF3DB;
    }
  #main-bot {
            width:100%;
            background:#FFF3DB;
    }
  #main-content {
            width:100%;
            background:#FFF3DB;
    }
  }
#inner-wrap {
	padding:0 50px;
}
#blog-header {
	margin-bottom:12px;
}
#blog-header h1 {
	margin:0;
	padding:0 0 6px 0;
	font-size:225%;
	font-weight:normal;
	color:#612E00;
}
#blog-header h1 a:link {
	text-decoration:none;
}
#blog-header h1 a:visited {
	text-decoration:none;
	}
#blog-header h1 a:hover {
	border:0;
	text-decoration:none;
}
#blog-header p {
	margin:0;
	padding:0;
	font-style:italic;
	font-size:94%;
	line-height:1.5em;
}
div.clearer {
	clear:left;
	line-height:0;
	height:10px;
	margin-bottom:12px;
	_margin-top:-4px; /* IE Windows target */
	background:url("http://www.blogblog.com/scribe/divider.gif") no-repeat bottom left;
}
@media all {
  #main {
            width:430px;
            float:right;
            padding:8px 0;
            margin:0;
    }
  #sidebar {
            width:150px;
            float:left;
            padding:8px 0;
            margin:0;
    }
  }
@media handheld {
  #main {
            width:100%;
            float:none;
    }
  #sidebar {
            width:100%;
            float:none;
    }
  }
#footer {
	clear:both;
	background:url("http://www.blogblog.com/scribe/divider.gif") no-repeat top left;
	padding-top:10px;
	_padding-top:6px; /* IE Windows target */
}
#footer p {
	line-height:1.5em;
	font-family:Verdana, sans-serif;
	font-size:75%;
}


/* Typography :: Main entry
----------------------------------------------- */
h2.date-header {
	font-weight:normal;
	text-transform:uppercase;
	letter-spacing:.1em;
	font-size:90%;
	margin:0;
	padding:0;
}
.post {
	margin:8px 0 24px 0;
	line-height:1.5em;
}
h3.post-title {
	font-weight:normal;
	font-size:140%;
	color:#1B0431;
	margin:0;
	padding:0;
}
.post-body p {
	margin:0 0 .6em 0;
	}
.post-footer {
	font-family:Verdana, sans-serif;
	color:#211104;
	font-size:74%;
	border-top:1px solid #BFB186;
	padding-top:6px;
}
.post ul {
	margin:0;
	padding:0;
}
.post li {
	line-height:1.5em;
	list-style:none;
	background:url("http://www.blogblog.com/scribe/list_icon.gif") no-repeat 0px .3em;
	vertical-align:top;
	padding: 0 0 .6em 17px;
	margin:0;
}


/* Typography :: Sidebar
----------------------------------------------- */
h2.sidebar-title {
	font-weight:normal;
	font-size:120%;
	margin:0;
	padding:0;
	color:#211104;
}
h2.sidebar-title img {
	margin-bottom:-4px;
	}
#sidebar ul {
	font-family:Verdana, sans-serif;
	font-size:86%;
	margin:6px 0 12px 0;
	padding:0;
}
#sidebar ul li {
	list-style: none;
	padding-bottom:6px;
	margin:0;
}
#sidebar p {
	font-family:Verdana,sans-serif;
	font-size:86%;
	margin:0 0 .6em 0;
}


/* Comments
----------------------------------------------- */
#comments {
}
#comments h4 {
  font-weight:normal;
	font-size:120%;
	color:#29303B;
	margin:0;
	padding:0;
	}
#comments-block {
  line-height:1.5em;
  }
.comment-poster {
	background:url("http://www.blogblog.com/scribe/list_icon.gif") no-repeat 2px .35em;
	margin:.5em 0 0;
	padding:0 0 0 20px;
	font-weight:bold;
}
.comment-body {
	margin:0;
	padding:0 0 0 20px;
}
.comment-body p {
	font-size:100%;
	margin:0 0 .2em 0;
}
.comment-timestamp {
	font-family:Verdana, sans-serif;
	color:#29303B;
	font-size:74%;
	margin:0 0 10px;
	padding:0 0 .75em 20px;
}
.comment-timestamp a:link {
	color:#473624;
	text-decoration:underline;
}
.comment-timestamp a:visited {
	color:#716E6C;
	text-decoration:underline;
}
.comment-timestamp a:hover {
	color:#956839;
	text-decoration:underline;
}
.comment-timestamp a:active {
	color:#956839;
	text-decoration:none;
}
.deleted-comment {
  font-style:italic;
  color:gray;
  }
.comment-link {
  margin-left:.6em;
  }
	
/* Profile
----------------------------------------------- */
#profile-container {
	margin-top:12px;
	padding-top:12px;
	height:auto;
	background:url("http://www.blogblog.com/scribe/divider.gif") no-repeat top left;

}
.profile-datablock {
	margin:0 0 4px 0;
}
.profile-data {
	display:inline;
	margin:0;
	padding:0 8px 0 0;
	text-transform:uppercase;
	letter-spacing:.1em;
	font-size:90%;
	color:#211104;
}
.profile-img {display:inline;}
.profile-img img {
	float:left;
	margin:0 8px 0 0;
	border:1px solid #A2907D;
	padding:2px;
  }
.profile-textblock {
	font-family:Verdana, sans-serif;font-size:86%;margin:0;padding:0;
}
.profile-link {
	margin-top:5px;
	font-family:Verdana,sans-serif;
	font-size:86%;
}

/* Post photos
----------------------------------------------- */
img.post-photo {
	border:1px solid #A2907D;
	padding:4px;
}
</style>


</head>

<body>

<!-- Outer Dark Brown Container / Centers Content -->
<div id="wrap">
	
		<!-- Top Paper Graphic -->
		<div id="main-top"></div>
		
		<!-- Main Content Area (This shows background image) -->
		<div id="main-content">
		  
		  <div id="inner-wrap">
		  
		  	<!-- Blog Header -->
		  	<div id="blog-header">
  				<h1>
    {if: {HomeLink} == true }<a href="{BlogURL}">{/if}
    {BlogTitle}
    {if: {HomeLink} == true }</a>{/if}
  </h1>
  				<p>{BlogDescription}</p>

			</div>
			<!-- End Blog Header -->
			
			<!-- Begin #profile-container -->
            
            {BlogMemberProfile}
			
			<!-- End #profile -->
			
			<!-- Spacer and horizontal rule -->
			<div class="clearer"></div>
			<!-- End .clearer -->

			
				<!-- Begin #sidebar :: left column :: blog archives, links -->
				<div id="sidebar">
					
					<h2 class="sidebar-title">
						<img src="http://www.blogblog.com/scribe/header_recentposts.gif" alt="Recent Posts" width="110" height="28" />
					</h2>
    
					<ul id="recently">
					    <BloggerPreviousItems>
					        <li><a href="{BlogItemPermalinkURL}">{BlogPreviousItemTitle}</a></li>
  					   </BloggerPreviousItems>
 				    </ul>
					
					{if: {MainOrArchivePage} == true}
					<h2 class="sidebar-title">
						<img src="http://www.blogblog.com/scribe/header_archives.gif" alt="Archives" width="84" height="22" />
					</h2>
					
					<ul class="archive-list">
                	  {mask:BloggerArchives}
                    	<li><a href="{BlogArchiveURL}">{BlogArchiveName}</a></li>
	                 {/mask}
                     {if: {ArchivePage}== true} <li><a href="{BlogURL}">Current Posts</a></li>{/if}
                   </ul>
                   {/if}
					
				<p><a href="http://www.blogger.com/" title="Powered by Blogger"><img src="http://buttons.blogger.com/bloggerbutton1.gif" alt="Powered by Blogger" /></a></p>
				<p id="powered-by"><a href="rss.php?blog_name={BlogTitle}"><img src="img/rssfeed.png" alt="RSS Feed" /></a></p>
		<p id="powered-by"><a href="atom.php?blog_name={BlogTitle}"><img src="img/atomfeed.png" alt="Atom Feed" /></a></p>
				
				<!--
				<p>This is a paragraph of text that could go in the sidebar.</p>
				-->

				
				</div>
			
				<!-- Begin #main :: right column :: blog entry content -->
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
						
						  <p>{BlogItemBody}</p>

						</div>
						<div class="post-footer">
							<ul>
							{mask:Tags}
								<li style="display:inline;line-height:24px;"><a href="{TagURL}">{TagName}</a></li>
							{/mask}
							</ul>
						</div>
						<p class="post-footer">posted by {BlogItemAuthorNickname} | <a href="{BlogItemPermalinkUrl}" title="permanent link">{BlogItemDateTime}</a>
      {if: {MainOrArchivePage} == true} {if: {BlogItemCommentsEnabled} == true} |
         <a class="comment-link" href="{BlogItemCommentCreate}"{BlogItemCommentFormOnclick}>{BlogItemCommentCount} comments</a>
      {/if}><BlogItemBacklinksEnabled>
<a class="comment-link" href="{BlogItemPermalinkUrl}#links">links to this post</a>
</BlogItemBacklinksEnabled>
{/if} {BlogItemControl} </p>
					  
					  </div>
					  <!-- End .post -->
					  
					   <!-- Begin #comments -->
 					{if: {ItemPage} == true}

  					<div id="comments">

					{if: {BlogItemCommentsEnabled} == true}<a name="comments"></a>
    
                     <h4>{BlogItemCommentCount} Comments:</h4>
						
						<dl id="comments-block">
                        {mask:BlogItemComments}
						  <dt class="comment-poster" id="c{BlogCommentNumber}"><a name="c{BlogCommentNumber}"></a>
							{BlogCommentAuthor} said...
						  </dt>
						  <dd class="comment-body">
							<p>{BlogCommentBody}</p>
						  </dd>
						  <dd class="comment-timestamp"><a href="#c{BlogCommentNumber}" title="comment permalink">{BlogCommentDateTime}</a>
	                     {BlogCommentDeleteIcon}
	                     </dd>
                        {/mask}
						</dl>
	
	<p class="comment-timestamp">
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


	
	<p class="comment-timestamp">
	<a href="{BlogURL}">&lt;&lt; Home</a>
    </p>
    </div>

{/if}
					  <!-- End #comments -->


{/mask}
				</div>
		  
		  	
		  	<!-- Begin #footer :: bottom area -->
		  	<div id="footer">
		  		<p>
		  			<!-- Copyright &copy; 2004 [Your name] (plus any additional footer info) -->&nbsp;
		  		</p>
		  	</div>
		 
		</div>
		
		</div>
		<!-- End #main-content -->
		
		
		<!-- Bottom Paper Graphic -->
		<div id="main-bot"></div>
	
</div>

</body>

</html>
{/mask}
