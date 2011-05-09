      
      <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="body-bg" > 
        <tr> 
          <td class="pads-left-right pads-top-bottom">
            <table width="100%"  border="0" cellpadding="0" cellspacing="0" >
            <tr>
            <td class="white content-box">
            <table border="0" cellpadding="0" cellspacing="0"> 
              <tbody> 
                <tr> 
                  <td> &nbsp; </td> 
                  <td> <form action="<?=WEB_ROOT?>/posts.php?blog_name=<?=$b->blog_name?>" method="post" name="filter" class="content" id="filter" style="margin: 0pt;">
                       Show&nbsp; 
                      <select name="num_posts" class="txt"> 
                        <option <?if ($num_posts==5) {echo "selected=\"selected\"";}?> value="5"> 5 </option> 
                        <option <?if ($num_posts==10) {echo "selected=\"selected\"";}?> value="10"> 10 </option> 
                        <option <?if ($num_posts==25) {echo "selected=\"selected\"";}?> value="25"> 25 </option> 
                        <option <?if ($num_posts==50) {echo "selected=\"selected\"";}?> value="50"> 50 </option> 
                        <option <?if ($num_posts==100) {echo "selected=\"selected\"";}?> value="100"> 100 </option> 
                        <option <?if ($num_posts==300) {echo "selected=\"selected\"";}?> value="300"> 300 </option> 
                      </select> 
                      <input value="Go" class="filterButton" name="go" size="10" type="submit" /> 
                    </form></td> 
                </tr> 
              </tbody> 
            </table>
            <br />
            <table width="100%" border="0" cellpadding="5" cellspacing="0" class="content" id="posts"> 
              <thead> 
                <tr class="content"> 
                  <td width="20%" class="date"><span>Date</span></td> 
                  <td width="7%" class="edit"><span>&nbsp;</span></td> 
                  <td width="46%" class="title"><span>Post Title</span></td> 
                  <td width="13%" class="author"><span>&nbsp;</span></td> 
                  <td width="7%" class="link"><span>&nbsp;</span></td> 
                  <td width="7%" class="weaklink"><span> &nbsp; </span></td> 
                </tr> 
              </thead> 
              <tbody> 
                <?
      $db->query("SELECT post_id as ids FROM posts WHERE blog_name='$b->blog_name' ORDER BY disp_dt DESC LIMIT 0,$num_posts;");
      $count = $db->num_rows(); 
      $post_ids = array();
      $post_ids = $db->get_ids();
      
      for ( $i=0 ; $i<$count ; $i++ ) {
        $post_id = $post_ids[$i]; 
        $p = new Post();
        $p = post_load($post_id);
?> 
                <tr class="content"> 
                  <td class="date"> <span class=""> 
                    <?=$p->get_date()?> 
                    </span> </td> 
                  <td class="edit"> <span> <a href="<?=WEB_ROOT?>/post-edit.php?blog_name=<?=$b->blog_name?>&amp;post_id=<?=$p->post_id?>" class="content-links links"> Edit </a> </span> </td> 
                  <td class="title" onclick="setSelected(this, '112637683384869879')"> <table lang="safari-hack" xml:lang="safari-hack"> 
                      <tbody> 
                        <tr> 
                          <td> <?=$p->title?> </td> 
                        </tr> 
                      </tbody> 
                    </table></td> 
                  <td class="author"><span> 
                    <?=$u->nickname?> 
                    </span></td> 
                  <td class="link"><span class=""> <a href="<?=WEB_ROOT?>/view.php?blog_name=<?=$b->blog_name?>&amp;year=<?=$p->get_year()?>&amp;month=<?=$p->get_month()?>&amp;permalink=<?=$p->permalink?>" target="_blank" class="content-links links"> View </a> </span></td> 
                  <td class="weaklink"> <span><a href="<?=WEB_ROOT?>/post-delete.php?blog_name=<?=$b->blog_name?>&amp;post_id=<?=$p->post_id?>" class="content-links links"> Delete </a></span> </td> 
                </tr> 
                <tr id="" class="content"> 
                  <td colspan="2"><span>&nbsp;</span></td> 
                  <td></td> 
                  <td colspan="3"><span>&nbsp;</span></td> 
                </tr> 
                <?
      
      }
                ?>
              </tbody> 
            </table>
            </td>
            </tr>
            </table>
          </td>
        </tr> 
      </table>
       
