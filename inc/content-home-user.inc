<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="body-bg" > 
        <tr> 
          <td class="pads-left-right pads-top-bottom"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td width="70%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
                    <tr> 
                      <td class="white content-box"> <p class="heading">Dashboard</p> 
                        <p class="content"><strong>Blogs </strong> </p> 
                        <table border="0" cellpadding="5" cellspacing="0"> 
                          <tbody> 
                            <tr class="content"> 
                              <th valign="top" colspan="2" class="icon">Blog Name</th> 
                              <th valign="top" width="31" class="icon">New Post</th> 
                              <th valign="top" width="53" class="icon">Change Settings</th> 
                              <th valign="top" width="88" class="date">Last Update</th> 
                              <th valign="top" width="35" class="num">Posts</th> 
                            </tr> 
                            <?php
        
        $owns_blogs = $u->get_blogs_user_owns();
        
        for ( $i=0 ; $i<count($owns_blogs) ; $i++ ) {
          $b = new Blog();
          $b = blog_load($owns_blogs[$i]);
          ?> 
                            <tr class="content" align="center"> 
                              <td width="18" class="icon"> <img alt="Edit Posts" src="img/editposts.gif" height="18" width="18" /> </td> 
                              <th width="167" class="editblog"> <a href="<?=WEB_ROOT?>/posts.php?blog_name=<?=$b->blog_name?>" class="links content-links" title="<?=$b->blog_title?>"> 
                                <?=$b->blog_title?> 
                                </a> </th> 
                              <td class="icon"> <a href="<?=WEB_ROOT?>/post-create.php?blog_name=<?=$b->blog_name?>"> <img alt="Create new post" src="img/createpost.gif" height="18" width="18" border="0" /> </a> </td> 
                              <td class="icon"> <a href="<?=WEB_ROOT?>/blog-options-basic.php?blog_name=<?=$b->blog_name?>"> <img alt="Change blog settings" src="img/blogsettings.gif" height="18" width="18" border="0" /> </a> </td> 
                              <td class="date"><?=$b->get_last_update_dt()?></td> 
                              <td class="num"><?=$b->get_num_of_posts()?></td> 
                            </tr> 
                            <?
        }
        $mods_blogs = $u->get_blogs_user_mods();
        for ( $i=0 ; $i<count($mods_blogs) ; $i++ ) {
          $b = new Blog();
          $b = blog_load($mods_blog[$i]);
          ?> 
                            <tr class="content" align="center"> 
                              <td width="18" class="icon"> <img alt="Edit Posts" src="img/editposts.gif" height="18" width="18" /> </td> 
                              <th width="167" class="editblog"> <a href="<?=WEB_ROOT?>/posts.php?blog_name=<?=$b->blog_name?>" class="links content-links" title="<?=$b->blog_title?>"> 
                                <?=$b->blog_title?> 
                                </a> </th> 
                              <td class="icon"> <a href="<?=WEB_ROOT?>/post-create.php?blog_name=<?=$b->blog_name?>"> <img alt="Create new post" src="img/createpost.gif" height="18" width="18" border="0" /> </a> </td> 
                              <td class="icon">&nbsp;</td> 
                              <td class="date"><?=$b->get_last_update_dt()?></td> 
                              <td class="num"><?=$b->get_num_of_posts()?></td> 
                            </tr> 
                            <?
        }
        
        ?> 
                            <tr class="content"> 
                              <th colspan="6"> <p class="next"> &nbsp;</p> 
                                <p align="right"> <a href="<?=WEB_ROOT?>/create-blog.php" class="links content-links"> Create a new blog</a> &gt;&gt; </p> 
                              </th> 
                            </tr> 
                          </tbody> 
                        </table> 
                      </td> 
                    </tr> 
                  </table></td> 
                <td width="1%" valign="top"><img src="img/spacer.gif" width="20" height="1" /></td> 
                <td width="29%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
                    <tr> 
                      <td class="white content-box"> <span class="heading">Profile</span> </td> 
                    </tr> 
                  </table></td> 
              </tr> 
            </table></td> 
        </tr> 
      </table>
