{mask:main}
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
 <title>{BlogTitle}</title>
 {BlogMetaData}
 <meta http-equiv="imagetoolbar" content="no" />
  <style type="text/css">
  body {
       padding:40px 0 0;
       margin:0;
       text-align:center;
       background:#E5E6D8 url('http://official.site.free.fr/dtbg.gif') repeat-x top;
       font:11px trebuchet ms,Verdana,arial,Sans-serif;
       color:#666;
       }
  #Container {
       margin:65px auto 0 auto;
       padding:0;
       width:650px;
       text-align:left;
       background:url('http://official.site.free.fr/beach.jpg') no-repeat top;
       }
  #leftcontent {
       margin:0;
       padding-top:290px;
       width:500px;
       font-size:13px;
       text-align:left;
       background:transparent;
       }
  h1 {
       margin-left:100px;
        font-size:22px;
        color:#BFADBC;
        text-align:left;
        font-weight:normal;
        }
  h1:first-letter {
        color:#87C7C6;
        font-size:60px;
        font-style:italic;
        font-family:Georgia,Serif;
        }
  .DateHeader {
        font-size:12px;
        color:#999;
        }
  .PostTitle {
        font-size:16px;
        color:#8557B1;
        font-style:italic;
        }
  .Post {
        font-size: 12px;
        padding:0;
        text-align:justify;
        }
  .PostFooter {
        margin-bottom:30px;
        color:silver;
        font-size:10px;
        font-style:italic;
        }
  a {
        color:#85A5D1;
        text-decoration:underline;
        }
  a:hover {
        color:#85A5D1;
        text-decoration:none;
        }
  #rightcontent {
        float:right;
        margin:0;
        padding-top:250px;
        font-size:11px;
        text-align:right;
        width:140px;
        }
  #Description {
        font-size:11px;
        color:gray;
        padding-bottom:20px;
        }
  #ArchiveLabel {
        font-size:14px;
        color:gray;
        }
  ul a {
       color:#85A5D1;
       text-decoration:none;
       }
  ul a:hover {
       color:#85A5D1;
       text-decoration:underline;
       }
  li {
       list-style-type:none;
       }
  ul {
       margin:0;
       padding:0;
       }
 .Post img {
       padding:10px;
       margin: 10px 0;
       border:1px solid #C4A0E8;
       }
 .comments {
       color:#777;
       font-size:11px;
       }
 blockquote {
      border-left: 7px solid #DEECEF;
      font-style:italic;
      }
</style>
</head>

<noembed><body></noembed>
                  
<div id="Container">

<div id="rightcontent">

<div id="Description">{BlogDescription}</div>

<ul><li>
    {if: {MainPage} == true}<a href="{BlogOwnerProfileUrl}">About me</a>{/if}
    {if: {ItemPage} == true}<strong><a href="{BlogURL}"><< Home</a></strong>{/if}
    {if: {ArchivePage} == true}<strong><a href="{BlogURL}"><< Home</a></strong>{/if}
</li></ul>

<br />

<div id="ArchiveLabel">Previous Posts</div>
					<ul>
						<BloggerPreviousItems>
						<li><a href="<$BlogItemPermalinkURL$>"><$BlogPreviousItemTitle$></a></li>
						</BloggerPreviousItems>
					</ul>
					
					<br />
					

<div id="ArchiveLabel">Archives</div>
<ul>

{mask:BloggerArchives}
    <li><a href="{BlogArchiveURL}">{BlogArchiveName}</a></li>
{/mask}
</ul>
	<br />
<div id="ArchiveLabel">Links</div>
	<ul>
	
	
	
	
	
	
<!--############################################################################################-->		
<!--################  PUT YOUR LINKS HERE ######################################################-->
<!--############################################################################################-->




			<li><a href="http://">My link 1</a></li>
			<li><a href="http://">My link 2</a></li>
			<li><a href="http://">My link 3</a></li>
			
			
			
			
<!--############################################################################################-->	
<!--############################################################################################-->			
<!--############################################################################################-->







	</ul>

<br />
<br />

<p><i>Powered for <a href="http://www.blogger.com">Blogger</a><br />
by <a href="http://blogger-templates.blogspot.com">Blogger templates</a></i></p>
<p id="powered-by"><a href="rss.php?blog_name={BlogTitle}"><img src="img/rssfeed.png" alt="RSS Feed" /></a></p>
  <p id="powered-by"><a href="atom.php?blog_name={BlogTitle}"><img src="img/atomfeed.png" alt="Atom Feed" /></a></p>
</div>
	
<div id="leftcontent">

	<h1>{BlogTitle}</h1>

		
{mask:Blogger}
   {mask:BlogDateHeader}
        <div class="DateHeader">{BlogDateHeaderDate}</div>
   {/mask}

   
    <a name="<$BlogItemNumber$>"></a>
   {mask:BlogItemTitle}<span class="PostTitle">{BlogItemTitle}</span>{/mask}

   <div class="Post">
   {BlogItemBody}
   
   <div class="post-footer">
      <ul>
      {mask:Tags}
        <li style="display:inline;line-height:24px;"><a href="{TagURL}">{TagName}</a></li>
      {/mask}
      </ul>
    </div>
    
   <div class="PostFooter">
   Posted by <a href="{../BlogOwnerProfileUrl}">{../BlogOwnerNickname}</a> at 
   
   {if : {../MainOrArchivePage} == true } <a href="{BlogItemPermalinkURL}" title="direct link">
   {BlogItemDateTime} {if: {../MainOrArchivePage} == true } </a>
   {if : {BlogItemCommentsEnabled} == true} ~ 
      

        <a href="{BlogItemPermalinkURL}#comments">
        
        <script type="text/javascript">
            var a = {BlogItemCommentCount}; 
            if(a == 0) {
                  document.write('No comment');
            } else if(a == 1) {
                  document.write('1 comment');
            }else {
                  document.write(a+' comments');
            }
      </script>
      
      </a> 
               
         
      {/if}
      { <$BlogItemControl$>
      
      </div>
      
            {if: {ItemPage} == true}
            <a name="comments"></a>
	  {if: {BlogItemCommentsEnabled} == true}
	

        <div class="DateHeader">
        <script type="text/javascript">
        var a = {BlogItemCommentCount}; 
        if(a == 0) {
        document.write('No comment');
        } else if(a == 1) {
        document.write('1 comment:');
        }else{
        document.write(a+' comments:');
        }</script></div>
	

       {mask:BlogItemComments}
                      
       
       <p class="comments">{BlogCommentBody} <$BlogCommentDeleteIcon$></p>
       <p style="text-align:center;">_____________________</p>
	   {/mask}<p class="comments">
	  

       <$BlogItemCreate$>
       
       <br /><br /><br /><br />



    </p>{/if}
    {/if}
      
   </div>

{/mask}

</div>

</div>
</body>
</html>
{/mask}
