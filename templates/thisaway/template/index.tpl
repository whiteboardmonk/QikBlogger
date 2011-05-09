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
Name: 	  Thisaway (Blue)
Designer: Dan Rubin
URL:      www.superfluousbanter.org
Date:     29 Feb 2004
----------------------------------------------- */


/* global
----------------------------------------------- */
body {
margin: 0;
padding: 0;
text-align: center;
min-width: 760px;
background: #4386ce url(http://www.blogblog.com/thisaway_blue/bg_body.gif) repeat-x left top;
font-family: helvetica, arial, verdana, "trebuchet ms", sans-serif;
color: #204063;
}

blockquote {
margin: 0;
padding: 0 10px 0 10px;
border-left: 6px solid #d8e7f7;
border-right: 6px solid #d8e7f7;
color: #477fba;
}

code {
color: #809eba;
}

hr {
display: none;
}


/* layout
----------------------------------------------- */
@media all {
  #wrapper {
    margin: 0 auto;
    width: 760px;
    text-align: left;
    }

  #blog-header {
    padding-bottom: 15px;
    background: url(http://www.blogblog.com/thisaway_blue/bg_header_bottom.gif) no-repeat left bottom;
    }

  #blog-header div {
    background: #204063 url(http://www.blogblog.com/thisaway_blue/bg_header.gif) repeat-x left bottom;
    }

  #main-wrapper {
    position: relative;
    width: 760px;
    background: #f7f0e9 url(http://www.blogblog.com/thisaway_blue/bg_main_wrapper.gif) repeat-y left top;
    }

  #main-content {
    display: inline; /* fixes a strange ie margin bug */
    float: left;
    margin: 0 0 0 3px;
    padding: 0;
    width: 483px;
    }

  #content-wrapper {
    padding: 22px 0 0 0;
    background: url(http://www.blogblog.com/thisaway_blue/bg_content.gif) repeat-x left top;
    }
  }
@media handheld {
  #wrapper {
    width: 90%;
    }

  #blog-header {
    background:none;
    }

  #blog-header div {
    background: #204063;
    }

  #main-wrapper {
    width: 100%;
    background: #f7f0e9;
    }

  #main-content {
    float: none;
    width: 100%;
    }

  #content-wrapper {
    background:none;
    }
  }

.post {
margin: 0 16px 14px 29px;
padding: 0;
border-bottom: 3px solid #d8e7f7;
}

#comments {
margin: 0 16px 14px 29px;
padding: 10px;
border: 1px solid #cedef0;
background-color: #e4ecf5;
}

@media all {
  #sidebar-wrapper {
    display: inline; /* fixes a strange ie margin bug */
    float: right;
    margin: 0 3px 0 0;
    width: 269px;
    color: #1c4676;
    background: url(http://www.blogblog.com/thisaway_blue/bg_sidebar.gif) repeat-x left top;
    }

  #sidebar {
    padding: 7px 11px 0 14px;
    background: url(http://www.blogblog.com/thisaway_blue/bg_sidebar_arrow.gif) repeat-y 179px 0;
    }

  #blog-footer {
    padding-top: 15px;
    background: url(http://www.blogblog.com/thisaway_blue/bg_footer_top.gif) no-repeat left top;
    }

  #blog-footer div {
    background: #152e49 url(http://www.blogblog.com/thisaway_blue/bg_footer.gif) repeat-x left top;
    }
  }
@media handheld {
  #sidebar-wrapper {
    float: none;
    width: 100%;
    background:none;
    }

  #sidebar {
    background:none;
    }

  #blog-footer {
    background:none;
    }

  #blog-footer div {
    background: #152e49;
    }
  }

#profile-container {
  margin-bottom: 20px;
  }


/* headings
----------------------------------------------- */
#blog-header h1 {
margin: 0;
padding: 26px 0 0 84px;
color: #eef6fe;
font-size: 30px;
line-height: 25px;
background: url(http://www.blogblog.com/thisaway_blue/icon_header.gif) no-repeat 16px 26px;
}

h2.date-header {
margin: 0;
padding: 0 0 0 29px;
font-size: 10px;
text-transform: uppercase;
color: #8facc8;
background: url(http://www.blogblog.com/thisaway_blue/icon_date.gif) no-repeat 13px 0;
}

.date-header span {
margin: 0 0 0 5px;
padding: 0 25px 0 25px;
background: url(http://www.blogblog.com/thisaway_blue/bg_date.gif) no-repeat 0 0;
}

h2.sidebar-title {
padding: 1px 0 0 36px;
font-size: 14px;
color: #809fbd;
background: url(http://www.blogblog.com/thisaway_blue/icon_sidebar_heading.gif) no-repeat 0 45%;
}

#profile-container h2.sidebar-title {
color: #527595;
background: url(http://www.blogblog.com/thisaway_blue/icon_sidebar_profileheading.gif) no-repeat 0 45%;
}

.post h3.post-title {
margin: 13px 0 0 0;
padding: 0;
font-size: 18px;
color: #477fba;
}

#comments h4 {
margin-top: 0;
font-size: 16px;
}


/* text
----------------------------------------------- */
#blog-header p {
margin: 0;
padding: 7px 16px 0 84px;
color: #eef6fe;
font-size: 10px;
font-weight: bold;
line-height: 14px;
}

.post-body div {
font-size: 13px;
line-height: 18px;
margin: 10px, 0px;
}

.post-body blockquote {
margin: 10px 0px;
}

p.post-footer {
font-size: 11px;
color: #809fbd;
text-align: right;
}

p.post-footer em {
display: block;
float: left;
text-align: left;
font-style: normal;
}

p.comment-data {
font-size: 12px;
}

.comment-body p {
font-size: 12px;
line-height: 17px;
}

.deleted-comment {
  font-style:italic;
  color:gray;
  }

#sidebar p {
font-size: 12px;
line-height: 17px;
margin-bottom: 20px;
}

#sidebar p.profile-textblock {
clear: both;
margin-bottom: 10px;
}

.profile-link {
padding: 0 0 0 17px;
background: url(http://www.blogblog.com/thisaway_blue/icon_profile.gif) no-repeat 0 0;
}

p#powered-by {
margin: 0;
padding: 0;
}

#blog-footer p {
margin: 0;
padding: 0 0 15px 55px;
color: #eef6fe;
font-size: 10px;
line-height: 14px;
background: url(http://www.blogblog.com/thisaway_blue/icon_footer.gif) no-repeat 16px 0;
}


/* lists
----------------------------------------------- */
.profile-data {
font-size: 13px;
line-height: 17px;
}

.post ul {
padding-left: 32px;
list-style-type: none;
font-size: 13px;
line-height: 18px;
}

.post li {
padding: 0 0 4px 17px;
background: url(http://www.blogblog.com/thisaway_blue/icon_list_item.gif) no-repeat 0 3px;
}

#comments ul {
margin: 0;
padding: 0;
list-style-type: none;
}

#comments li {
padding: 0 0 1px 17px;
background: url(http://www.blogblog.com/thisaway_blue/icon_comment.gif) no-repeat 0 3px;
}

#sidebar ul {
margin: 0 0 20px 0;
padding: 0;
list-style-type: none;
font-size: 12px;
line-height: 14px;
}

#sidebar li {
padding: 0 0 4px 17px;
background: url(http://www.blogblog.com/thisaway_blue/icon_list_item.gif) no-repeat 0 3px;
}


/* links
----------------------------------------------- */
a {
color: #4386ce;
font-weight: bold;
}

a:hover {
color: #2462a5;
}

a.comment-link {
/* ie5.0/win doesn't apply padding to inline elements,
   so we hide these two declarations from it */
background/* */:/**/url(http://www.blogblog.com/thisaway_blue/icon_comment.gif) no-repeat 0 45%;
padding-left: 14px;
}

html>body a.comment-link {
/* respecified, for ie5/mac's benefit */
background: url(http://www.blogblog.com/thisaway_blue/icon_comment.gif) no-repeat 0 45%;
padding-left: 14px;
}

#sidebar ul a {
color: #599be2;
}

#sidebar ul a:hover {
color: #3372b6;
}

#powered-by a img {
border: none;
}

#blog-header h1 a {
color: #eef6fe;
text-decoration: none;
}

#blog-header h1 a:hover {
color: #b4c7d9;
}

h3.post-title a {
color: #477fba;
text-decoration: none;
}

h3.post-title a:hover {
color: #2a5e95;
}


/* miscellaneous
----------------------------------------------- */
.post-photo {
padding: 3px;
border: 1px solid #bdd4eb;
}

.profile-img {
display: inline;
}

.profile-img img {
float: left;
margin: 0 10px 5px 0;
padding: 3px;
border: 1px solid #bdd4eb;
}

.profile-data strong {
display: block;
}

.clear {
clear: both;
line-height: 0;
height: 0;
} 
  </style>


</head>

<body>

<!-- #wrapper for centering the layout -->
<div id="wrapper">

<!-- Blog Header -->
<div id="blog-header"><div>
  	<h1>
    {if: {HomeLink} == true }<a href="{BlogURL}">{/if}
    {BlogTitle}
    {if: {HomeLink} == true }</a>{/if}
  </h1>
  	<p>{BlogDescription}</p>
</div></div>

<!-- Begin #main-wrapper - surrounds the #main-content and #sidebar divs for positioning -->
<div id="main-wrapper">

<!-- Begin #main - This div contains the main-column blog content -->
<div id="main-content">
<!-- Begin #content-wrapper -->
<div id="content-wrapper">

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
	 ></a>
    </h3>
    {/mask}
    
    <div class="post-body">
    
      <div>
      {BlogItemBody}
      </div>
      
    </div>
    <div class="post-footer">
      <ul>
      {mask:Tags}
        <li style="display:inline;line-height:24px;"><a href="{TagURL}">{TagName}</a></li>
      {/mask}
      </ul>
    </div>
    <p class="post-footer">
    	<em>posted by {BlogItemAuthorNickname} @ <a href="{BlogItemPermalinkUrl}" title="permanent link">{BlogItemDateTime}</a></em> &nbsp;
    	{if: {MainOrArchivePage} == true} <BlogItemCommentsEnabled>
         <a class="comment-link" href="{BlogItemCommentCreate}"{BlogItemCommentFormOnclick}>{BlogItemCommentCount} comments</a>
      </BlogItemCommentsEnabled><BlogItemBacklinksEnabled>
<a class="comment-link" href="{BlogItemPermalinkUrl}#links">links to this post</a>
</BlogItemBacklinksEnabled>
{/if} {BlogItemControl}
    </p>
  
  </div>
  <!-- End .post -->
  
  
  <!-- Begin #comments -->
 {if: {ItemPage} == true}

  <div id="comments">

	{if: {BlogItemCommentsEnabled} == true}<a name="comments"></a>
    
    <h4>{BlogItemCommentCount} Comments:</h4>
    
    <ul>
      {mask:BlogItemComments}
      <li id="c{BlogCommentNumber}"><a name="c{BlogCommentNumber}"></a>
      	<p class="comment-data">At <a href="#c{BlogCommentNumber}" title="comment permalink">{BlogCommentDateTime}</a>, {BlogCommentAuthor} said&hellip;</p>
        <div class="comment-body">
         <p>{BlogCommentBody}</p>
	  {BlogCommentDeleteIcon}
        </div>
      </li>
      {/mask}
    </ul>
	
	<p class="comment-data">
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


	
	<p class="comment-data">
	<a href="{BlogURL}">&lt;&lt; Home</a>
    </p>
    </div>

{/if}
  <!-- End #comments -->

{/mask}

</div>
<!-- End #content-wrapper -->

</div>
<!-- End #main-content -->


<!-- Begin #sidebar-wrapper -->
<div id="sidebar-wrapper">
<!-- Begin #sidebar -->
<div id="sidebar">
 
  <!-- Begin #profile-container -->
     
     {BlogMemberProfile}
     
  <!-- End #profile -->
    
        {if: {MainOrArchivePage} == true}
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
      {if: {ArchivePage} == true}<li><a href="{BlogURL}">Current Posts</a></li>{/if}
  </ul>
  {/if}
  
  
  <p id="powered-by"><a href="rss.php?blog_name={BlogTitle}"><img src="img/rssfeed.png" alt="RSS Feed" /></a></p>
  <p id="powered-by"><a href="atom.php?blog_name={BlogTitle}"><img src="img/atomfeed.png" alt="Atom Feed" /></a></p>

</div>
<!-- End #sidebar -->
</div>
<!-- End #sidebar-wrapper -->

<div class="clear">&nbsp;</div>
</div>
<!-- End #main-wrapper -->

<div id="blog-footer"><div>
	<p><!-- If you'd like, you could place footer information here. -->&nbsp;</p>
</div></div>

</div>
<!-- End #wrapper -->

</body>
</html>
{/mask}

