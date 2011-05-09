      <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="body-bg" > 
        <tr> 
          <td class="pads-left-right pads-top-bottom"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td class="content-box white">
            <p class="heading">Edit Post</p> 
            
            <form action="<?=WEB_ROOT?>/post-edit.php?blog_name=<?=$b->blog_name?>&post_id=<?=$p->post_id?>" id="stuffform" name="post" method="post"> 
              <table width="100%" border="0" cellpadding="5" cellspacing="0" id="titles"> 
                <tbody> 
                  <tr> 
                    <th width="15%" class="content"> <label for="f-title"> Title: </label> </th> 
                    <td width="85%"> <span class="content"> 
                      <input name="title" value="<?=$p->title?>" id="f-title" maxlength="150" tabindex="1" class="txt" size="48" type="text"> 
                      </span></td> 
                  </tr> 
                </tbody> 
              </table> 
              <table width="100%" border="0" cellpadding="5" cellspacing="0" id="titles"> 
                <tbody> 
                  <tr> 
                    <th width="15%" class="content"> <label for="label7"> Content: </label> </th> 
                    <td width="85%"> <span class="content"> 
                      <textarea name="content" cols="47" rows="17" wrap="soft" class="txt" tabindex="2"><?=$p->content?></textarea> 
                      </span></td> 
                  </tr> 
                </tbody> 
              </table> 
              <table width="100%" border="0" cellpadding="5" cellspacing="0" id="titles"> 
                <tbody> 
                  <tr> 
                    <th width="15%" class="content"> <label for="f-title"> Tags: </label> </th> 
                    <td width="85%"> <span class="content"> 
                      <input name="tags" value="<?=$p->tags?>" maxlength="150" tabindex="3" class="txt" size="48" type="text"> 
                      </span></td> 
                  </tr> 
                </tbody> 
              </table> 
              <span class="content"> 
              <label for="toggleComments"> Allow New Comments on This Post </label> 
              <br> 
              <input name="allow_comments" value="Yes" <?if($p->allow_comments==1) { echo "checked=\"checked\"";}?> id="cYes" type="radio"> 
              <label for="cYes">Yes</label> 
              <input name="allow_comments" value="No" <?if($p->allow_comments==0) { echo "checked=\"checked\"";}?> id="cNo" type="radio"> 
              <label for="cNo">No</label> 
              </span> <span class="content"> 
              <?
              $time = strtotime($p->disp_dt);
                //"Y-m-d H:i:s"
                $postHour = date("H",$time);
                $postMinute = date("i",$time);
                $postSecond = date("s",$time);
                $postMonth = date("m",$time);
                $postDay = date("d",$time);
                $postYear = date("Y",$time);
              ?> 
              </span> <span class="content"> 
              <label for="postHour"> Change Time &amp; Date </label> 
              <br> 
              <input name="postHour" type="text" class="txt" id="postHour" value="<?=$postHour?>" size="2" maxlength="2"> 
              :
              <input name="postMinute" type="text" class="txt" id="postMinute" value="<?=$postMinute?>" size="2" maxlength="2"> 
              :
              <input name="postSecond" type="text" class="txt" id="postSeconds" value="<?=$postSecond?>" size="2" maxlength="2"> 
              (hh:mm:ss)
              <input name="postMonth" type="text" class="txt" id="postMonth" value="<?=$postMonth?>" size="2" maxlength="2"> 
              -
              <input name="postDay" type="text" class="txt" id="postDay" value="<?=$postDay?>" size="2" maxlength="2"> 
              -
              <input name="postYear" type="text" class="txt" id="postYear" value="<?=$postYear?>" size="4" maxlength="4"> 
              (mm-dd-yyyy) </span> 
              <p id="postButtons">&nbsp; 
                <input value="Save Post" id="publishPost" name="save" class="btn orange" type="submit"> 
              </p> 
            </form>
          </td>
          </tr>
          </table>
          </td> 
        </tr> 
      </table>
