{mask:main}
<!--Created by http://blogger-templates.blogspot.com

<body>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<title>{BlogTitle}</title>
		<style type="text/css">
			<!--
			body{margin:0px;padding:0px;background:#002164 url('http://animatrix.free.fr/fir/firefox.jpg') top  right no-repeat;color:#B1D1DB;font-style:normal; font-variant:normal; font-weight:normal; font-size:0.9em; font-family:Trebuchet MS, Trebuchet, Verdana, Sans-Serif}
			a{color:#FF4500;}
			a:hover{color:#999;}
			div#mainClm{float:left;padding:13px 0px 10px 5%;width:68%;}
			div#sideBar{margin:250px 1em 0px 0px;padding:0px;text-align:right;}
			#header{padding:0px 0px 8px 0px;margin:0px 0px 20px 0px;color:#8B4513;}
			h1, h2, h3, h4, h5, h6{padding:0px;margin:0px;}
			h1{padding:18px 0px 10px 5%;margin:0px 0px 8px 0px;color:#FFFAFA;font:bold 266% Verdana,Sans-Serif;}
			h2{margin:0px 0px 10px 0px;padding:2px 0px 2px 5px;color:#fff;font:bold 110% Verdana,Sans-Serif;}
			h3{margin:10px 0px 0px 0px;padding:0px 0px 0px 2%;border-bottom:dotted 1px #cccccc;color:#777777;font-size:90%;text-align:left;}
			h4{color:#aa0033;}
			h6{color:#FF4500;font:bold 125% Verdana,Sans-Serif;}
			#sideBar ul{margin:0px 0px 33px 0px;padding:0px 0px 0px 0px;list-style-type:none;font-size:95%;}
			#sideBar li{margin:0px 0px 0px 0px;padding:0px 0px 0px 0px;list-style-type:none;font-size:105%;}
			#description{padding:0px 0px 0px 5%;margin:0px;color:#FF4500;font:bold 85% Verdana,Sans-Serif;}
			.blogPost{margin:0px 6px 30px 5px;font-size:100%;;text-align:justify}
			#sideBar ul a{padding:2px;margin:1px;border:none;color:#666666;text-decoration:none;}
			#sideBar ul a:link{color:#666666;}
			#sideBar ul a:visited{color:#999999;}
			#sideBar ul a:active{color:#ff0000;}
			#sideBar ul a:hover{color:#DE7008;text-decoration:none;}
			pre, code{color:#999999;}
			strike{color:#999999;}
			.bug{padding:5px;border:0px;}
			.byline{padding:0px;margin:0px;color:#999;font-size:80%;}
			.byline a{border:none;color:#FF4500;text-decoration:none;}
			.byline a:hover{ text-decoration:underline; }
			-->
		</style>

    <!-- Site Feed Autodiscovery
    <$BlogSiteFeedLink$>
    <!-- Atom API Posting Autodiscovery 
    <$BlogAPIPostLink$>
    <!-- Blogger API Autodiscovery 
    <$BlogRSDURL$>
		-->
		<!-- Meta Information -->
		<meta http-equiv="Content-Type" content="text/html; charset=<$BlogEncoding$>" />
		<meta name="MSSmartTagsPreventParsing" content="true" />
	</head>

<body>


<!-- Heading -->
<div id="header">
	<h1>
    {if: {HomeLink} == true }<a href="{BlogURL}">{/if}
    {BlogTitle}
    {if: {HomeLink} == true }</a>{/if}
  </h1>
	<p id="description">{BlogDescription}</p>
</div>


<!-- Main Column -->
<div id="mainClm">


<!-- Blog Posts -->
{mask:Blogger}
     {mask:BlogDateHeader}
          <h3>{BlogDateHeaderDate}</h3>
     {/mask}
     
     {mask:BlogItemTitle}<h2>{BlogItemTitle}<a name="<$BlogItemNumber$>">&nbsp;</a></h2>{/mask}
		<div class="blogPost">
          {BlogItemBody}<br />
				<div class="post-footer">
					<ul>
					{mask:Tags}
						<li style="display:inline;line-height:24px;"><a href="{TagURL}">{TagName}</a></li>
					{/mask}
					</ul>
				</div>
          <div class="byline"><a href="<$BlogItemPermalinkURL$>" title="permanent link">#</a> posted by {BlogItemAuthorNickname} : {BlogItemDateTime}</div>
		</div>
{/mask}

<!-- 	In accordance to the Blogger terms of service, please leave this button somewhere on your blogger-powered page. Thanks! -->
<p><a href="http://www.blogger.com"><img width="88" height="31" src="http://buttons.blogger.com/bloggerbutton1.gif" border="0" alt="This page is powered by Blogger. Isn't yours?" /></a></p>
</div>

<!-- Sidebar -->
<div id="sideBar">
		<!-- 
			
			+++++++++++++++++++++++++++++++++++++++++++++++++
					
			Add things to your sidebar here.
			Use the format:
			
			<li><a href="URL">Link Text</a></li>
		
			+++++++++++++++++++++++++++++++++++++++++++++++++
					
		-->
		<h6>Links</h6>
		<ul>
			<li><a title="Templates for your blog" href="http://blogger-templates.blogspot.com">Weblogs Templates</a></li>
			<li><a href="http://EDITME!">Edit-Me</a></li>
			<li><a href="http://EDITME!">Edit-Me</a></li>
		</ul>

		<h6>Archives</h6>
		<ul>
			{mask:BloggerArchives}<li><a href="{BlogArchiveURL}">{BlogArchiveName}</a></li>{/mask}
			<script type="text/javascript" language="Javascript">if (location.href.indexOf("archive")!=-1) document.write("<li><strong><a href=\"<$BlogURL$>\">Current Posts</a></strong></li>");</script>
		</ul>
		
		<p id="powered-by"><a href="rss.php?blog_name={BlogTitle}"><img src="img/rssfeed.png" alt="RSS Feed" /></a></p>
		<p id="powered-by"><a href="atom.php?blog_name={BlogTitle}"><img src="img/atomfeed.png" alt="Atom Feed" /></a></p>
</div>

</body>
</html>
{/mask}
