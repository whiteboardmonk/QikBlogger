{mask:main}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <title>{BlogPageTitle}</title>
  {BlogMetaData}
  <meta http-equiv="imagetoolbar" content="no" />

	<style type="text/css" media="screen">



/* Begin Typography & Colors */
body {
	font-size: 62.5%; /* Resets 1em to 10px */
	font-family: 'Lucida Grande', Verdana, Arial, Sans-Serif;
	background: url("http://official.site.free.fr/kubrickbgcolor.jpg") #d5d6d7;
	color: #333;
	text-align: center;
	}

#page {
    background: url("http://official.site.free.fr/kubrickbgwide.jpg") repeat-y top white;
    border: none;
	border: 1px solid #959596;
	text-align: left;
	}

#kheader {
    background: url("http://official.site.free.fr/kubrickheader.jpg") no-repeat bottom center #73a0c5;
	}

#kcontent {
	font-size: 1.1em
	}

.widecolumn .entry p {
	font-size: 1.05em;
	}

.narrowcolumn .entry, .widecolumn .entry {
	line-height: 1.4em;
	}

.widecolumn {
	line-height: 1.6em;
	}
	
.narrowcolumn .postmetadata {
	text-align: center;
	}

.graybox {
	background-color: #f8f8f8;
	border-top: 1px solid #ddd;
	border-bottom: 1px solid #ddd;
	}

#footer {
    background: url("http://official.site.free.fr/kubrickfooter.jpg") no-repeat bottom; border: none #eee;
	}

small {
	font-family: Arial, Helvetica, Sans-Serif;
	font-size: 0.9em;
	line-height: 1.5em;
	}

h1, h2, h3 {
	font-family: 'Trebuchet MS', 'Lucida Grande', Verdana, Arial, Sans-Serif;
	font-weight: bold;
	}

h1 {
	font-size: 4em;
	text-align: center;
	}

.description {
	font-size: 1.2em;
	text-align: center;
	}

h2 {
	font-size: 1.6em;
	}

h2.pagetitle {
	font-size: 1.6em;
	}

#sidebar h2 {
	font-family: 'Lucida Grande', Verdana, Sans-Serif;
	font-size: 1.2em;
	}

h3 {
	font-size: 1.3em;
	}

h1, h1 a, h1 a:hover, h1 a:visited, .description {
	text-decoration: none;
	color: white;
	}

h2, h2 a, h2 a:visited, h3, h3 a, h3 a:visited {
	color: #333;
	}

h2, h2 a, h2 a:hover, h2 a:visited, h3, h3 a, h3 a:hover, h3 a:visited, #sidebar h2, #wp-calendar caption, cite {

	text-decoration: none;
	}

.entry p a:visited {
	color: #b85b5a;
	}

#sidebar {
	font: 1em 'Lucida Grande', Verdana, Arial, Sans-Serif;
	}

small, #sidebar ul ul li, #sidebar ul ol li, .postmetadata, blockquote, strike {
	color: #777;
	}
	
code {
	font: 1.1em 'Courier New', Courier, Fixed;
	}

acronym, abbr, span.caps
{
	font-size: 0.9em;
	letter-spacing: .07em;
	}

a, h2 a:hover, h3 a:hover {
	color: #06c;
	text-decoration: none;
	}

a:hover {
	color: #147;
	text-decoration: underline;
	}
/* End Typography & Colors */



/* Begin Structure */
body {
	margin: 0;
	padding: 0; 
	}

#page {
	background-color: white;
	margin: 20px auto 0;
	padding: 0;
	width: 760px;
	border: 1px solid #959596;
	}
	
#kheader {
	padding: 0;
	margin: 0 auto;
	height: 200px;
	width: 100%;
	background-color: #73a0c5;
	}

#headerimg {
	margin: 0;
	height: 200px;
	width: 100%;
	}

.narrowcolumn {
	float: left;
	padding: 0 0 20px 45px;
	margin: 0px 0 0;
	width: 450px;
	}

.widecolumn {
	padding: 10px 0 20px 0;
	margin: 5px 0 0 150px;
	width: 450px;
	}
	
.post {
	margin: 0 0 40px;
	text-align: justify;
	}

.widecolumn .post {
	margin: 0;
	}

.narrowcolumn .postmetadata {
	padding-top: 5px;
	}

.widecolumn .postmetadata {
	margin: 30px 0;
	}
	
#footer {
	padding: 0;
	margin: 0 auto;
	width: 760px;
	clear: both;
	}

#footer p {
	margin: 0;
	padding: 20px 0;
	text-align: center;
	}
/* End Structure */



/*	Begin Headers */
h1 {
	padding-top: 70px;
	margin: 0;
	}

.description {
	text-align: center;
	}

h2 {
	margin: 30px 0 0;
	}

h2.pagetitle {
	margin-top: 30px;
	text-align: center;
}

#sidebar h2 {
	margin: 5px 0 0;
	padding: 0;
	}

h3 {
	padding: 0;
	margin: 30px 0 0;
	}

h3.comments {
	padding: 0;
	margin: 40px auto 20px ;
	}
/* End Headers */



/* Begin Images */
img {
    padding:10px;
    margin: 10px 0;
    border:1px solid #ccc;
    }
  
p img {
	padding: 0;
	max-width: 100%;
	}

/*	Using 'class="alignright"' on an image will (who would've
	thought?!) align the image to the right. And using 'class="centered',
	will of course center the image. This is much better than using
	align="center", being much more futureproof (and valid) */
	
img.centered {
	display: block;
	margin-left: auto;
	margin-right: auto;
	}
	
img.alignright {
	padding: 4px;
	margin: 0 0 2px 7px;
	display: inline;
	}

img.alignleft {
	padding: 4px;
	margin: 0 7px 2px 0;
	display: inline;
	}

.alignright {
	float: right;
	}
	
.alignleft {
	float: left
	}
/* End Images */



/* Begin Lists

	Special stylized non-IE bullets
	Do not work in Internet Explorer, which merely default to normal bullets. */

html>body .entry ul {
	margin-left: 0px;
	padding: 0 0 0 30px;
	list-style: none;
	padding-left: 10px;
	text-indent: -10px;
	} 

html>body .entry li {
	margin: 7px 0 8px 10px;
	}

.entry ul li:before, #sidebar ul ul li:before {
	content: "\00BB \0020";
	}

.entry ol {
	padding: 0 0 0 35px;
	margin: 0;
	}

.entry ol li {
	margin: 0;
	padding: 0;
	}

.postmetadata ul, .postmetadata li {
	display: inline;
	list-style-type: none;
	list-style-image: none;
	}
	
#sidebar ul, #sidebar ul ol {
	margin: 0;
	padding: 0;
	}

#sidebar ul li {
	list-style-type: none;
	list-style-image: none;
	margin-bottom: 15px;
	}

#sidebar ul p, #sidebar ul select {
	margin: 5px 0 8px;
	}

#sidebar ul ul, #sidebar ul ol {
	margin: 5px 0 0 10px;
	}

#sidebar ul ul ul, #sidebar ul ol {
	margin: 0 0 0 10px;
	}

ol li, #sidebar ul ol li {
	list-style: decimal outside;
	}

#sidebar ul ul li, #sidebar ul ol li {
	margin: 3px 0 0;
	padding: 0;
	}
/* End Entry Lists */



/* Begin Comments*/

.graybox {
	margin: 0;
	padding: 10px;
	}

.commentmetadata {
	margin: 0;
	display: block;
	}
/* End Comments */



/* Begin Sidebar */
#sidebar
{
	padding: 20px 0 10px 0;
	margin-left: 545px;
	width: 190px;
	}

#sidebar form {
	margin: 0;
	}
/* End Sidebar */



/* Begin Various Tags & Classes */
acronym, abbr, span.caps {
	cursor: help;
	}

acronym, abbr {
	border-bottom: 1px dashed #999;
	}

blockquote {
	margin: 15px 30px 0 10px;
	padding-left: 20px;
	border-left: 5px solid #ddd;
	}

blockquote cite {
	margin: 5px 0 0;
	display: block;
	}

.center {
	text-align: center;
	}

hr {
	display: none;
	}

a img {
	border: none;
	}

.navigation {
	display: block;
	text-align: center;
	margin-top: 10px;
	margin-bottom: 60px;
	}
      
	</style>
	
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="{BlogURL}/atom.xml" />
    
</head>
<noembed><body></noembed>
<div id="page">

<div id="kheader">
	<div id="headerimg">
		<h1>
    {if: {HomeLink} == true }<a href="{BlogURL}">{/if}
    {BlogTitle}
    {if: {HomeLink} == true }</a>{/if}
  </h1>
		<div class="description">{BlogDescription}</div>
	</div>
</div>
<hr />

{if: {MainOrArchivePage} == true}
	<div id="kcontent" class="narrowcolumn">

{mask:Blogger}

				
			<div class="post">
				<h2 id="post-{BlogItemNumber}">
				{mask:BlogItemTitle}
				<a href="{../BlogItemPermalinkUrl}" rel="bookmark" title="Permanent Link to {BlogItemTitle}">{BlogItemTitle}</a>
				{/mask}
				</h2>
				<small>{mask:BlogDateHeader}{BlogDateHeaderDate}{/mask}</small>
				
				<div class="entry">
					{BlogItemBody}
				</div>
				<div class="post-footer">
					<ul>
					{mask:Tags}
						<li style="display:inline;line-height:24px;"><a href="{TagURL}">{TagName}</a></li>
					{/mask}
					</ul>
				</div>
				<p class="postmetadata">{BlogItemControl}
     
     
     {if: {BlogItemCommentsEnabled} == true}
         <a href="{BlogItemPermalinkURL}#comments"><script type="text/javascript">var a = { BlogItemCommentCount}; if(a == 0) { document.write('No comment');} else if( a == 1) { document.write('1 comment');}else{ document.write(a+' comments');}</script></a>
			{/if}
				

			</p></div>
	


{/mask}
		</div>

	{/if}
{if: {ItemPage} == true }

{mask:Blogger}
    
	<div id="kcontent" class="widecolumn">
	  
		<div class="post">
			<h2 id="post-{BlogItemNumber}">{BlogItemTitle}</h2>
	
			<div class="entrytext">
				{BlogItemBody}
				<div class="post-footer">
					<ul>
					{mask:Tags}
						<li style="display:inline;line-height:24px;"><a href="{TagURL}">{TagName}</a></li>
					{/mask}
					</ul>
				</div>
    
				<p class="postmetadata graybox">
					<small>
						This entry was posted
						on {mask:BlogDateHeader}{BlogDateHeaderDate}{/mask} at {BlogItemDateTime}.

									
{if: {BlogItemCommentsEnabled} == true}
							You can skip to the end and leave a response.
{/if}
						
						{BlogItemControl}
						
					</small>
				</p>
	
	
               {/mask}<div class="center">&laquo; <a href="{BlogURL}">Home</a><BloggerPreviousItems> | <a href="{BlogItemPermalinkURL}">Next</a> &raquo;</div><div style="display:none"></BloggerPreviousItems></div>

{mask:Blogger}
           
           
			</div>
		</div>
		
  <div id="comments">

	{if: {BlogItemCommentsEnabled} == true}><a name="comments"></a>
        <h4>
 
 
 
            <script type="text/javascript">var a = { BlogItemCommentCount}; if(a == 0) { document.write('No comment');} else if( a == 1) { document.write('1 comment:');}else{ document.write(a+' comments:');}</script>
	


</h4>
        {mask:BlogItemComments}
        <a name="c{BlogCommentNumber}"></a>
        <a href="#{BlogCommentNumber}" title="comment permalink">{BlogCommentDateTime}</a>
        <br />
        <p style="padding-left:15px">{BlogCommentBody} &nbsp; {BlogCommentDeleteIcon}</p>
        <br /><br />
        {/mask}
		
        
        
        &raquo; {BlogItemCreate}
	{/if}
    </div>
	
	</div>

{/mask}
{/if}

{if: {MainOrArchivePage} == true}
	<div id="sidebar">
		<ul>
			
    
           {if: {ArchivePage} == true}<li><a href="{BlogURL}"><< Home</a></li>{/if}



			<li><h2>Author</h2>
			 <p>{BlogOwnerAboutMe}</p>
					<ul>
						<li><a href="{BlogOwnerProfileUrl}">View my complete profile</a></li>
					</ul>
			</li>


				<li><h2>Posts</h2>
					<ul>
						<BloggerPreviousItems>
						<li><a href="{BlogItemPermalinkURL}">{BlogPreviousItemTitle}</a></li>
						</BloggerPreviousItems>
					</ul>


				<li><h2>Archives</h2>
					<ul>
						{mask:BloggerArchives}
						<li><a href="{BlogArchiveURL}">{BlogArchiveName}</a></li>
						{/mask}


					</ul>
				</li>
	
				<li><h2>Links</h2>
					<ul>
					
					
					
					
<!--######################################################################################-->
<!--####################  PUT YOUR LINK HERE   ###########################################-->
<!--######################################################################################-->


		<p id="powered-by"><a href="rss.php?blog_name={BlogTitle}"><img src="img/rssfeed.png" alt="RSS Feed" /></a></p>
		<p id="powered-by"><a href="atom.php?blog_name={BlogTitle}"><img src="img/atomfeed.png" alt="Atom Feed" /></a></p>


<!--######################################################################################-->
<!--######################################################################################-->
<!--######################################################################################-->




					</ul>
				</li>
				
				
				
				


			
		</ul>
	</div>
{/if}

<hr />
<div id="footer">
	<p>
		&copy; <a href="{BlogURL}" title="{BlogTitle}">{BlogTitle}</a> 2005 - Powered by <a href="http://www.blogger.com/">Blogger</a> and <a href="http://blogger-templates.blogspot.com">Blogger Templates</a> - Original design by <a href="http://binarybonsai.com/kubrick/">Michael Heilemann</a>.
	</p>
</div>
</div>

<br />

</body>
</html>
{/mask}
