      <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="body-bg" > 
        <tr> 
          <td class="pads-left-right pads-top-bottom"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td class="white content-box"> <p class="heading">Post Comment</p> 
                  <p class="content error-login"><?=$err_msg?></p> 
                  <form name="comment" method="post" action="<?=WEB_ROOT?>/comment.php?blog_name=<?=$b->blog_name?>&amp;post_id=<?=$p->post_id?>"> 
                    <table width="100%" border="0" cellpadding="5" cellspacing="0" class="content"> 
                      <tr valign="top"> 
                        <th class="top"> 
                          <div align="right"> 
                            <label for="title">Name</label> 
                          </div>
                        </th> 
                        <td>
                          <?
                            if ( $autofill_form ) {
                              ?>
                              <label for="title"><?=$u->name?></label>
                              <input name="name" type="hidden" value="<?=$u->name?>" class="txt" id="name" size="40" maxlength="255"/>
                              <?
                            } else {
                              ?>
                              <input name="name" type="text" value="<?=$u->name?>" class="txt" id="name" size="40" maxlength="255" />
                              <?
                            }
                          ?>
                        </td>
                      </tr>
                      
                      <tr valign="top"> 
                        <th class="top">
                          <div align="right">
                          <?
                            if ( !$autofill_form ) {
                          ?>
                             <label for="title">Profile Link </label> 
                          <?
                            }
                          ?>
                          </div>
                        </th> 
                        <td>
                          <?
                            if ( $autofill_form ) {
                              /*<label for="title"><?=$u->name?></label>*/
                              ?>
                              <input name="profile_link" type="hidden" value="http://<?=$_SERVER['HTTP_HOST']?><?=WEB_ROOT?>/profile.php?username=<?=$u->username?>" class="txt" id="profile_link" size="40" maxlength="255" /> 
                              <?
                            } else {
                              ?>
                              <input name="profile_link" type="text" value="http://<?=$_SERVER['HTTP_HOST']?><?=WEB_ROOT?>/profile.php?username=<?=$u->username?>" class="txt" id="profile_link" size="40" maxlength="255" /> 
                              <?
                            }
                          ?>
                        </td> 
                      </tr> 
                      
                      <tr valign="top"> 
                        <th class="top">
                          <div align="right"> 
                            <label for="pgtitle">Comment</label> 
                          </div></th> 
                        <td>
                          <textarea name="user_comment" cols="40" rows="5" wrap="virtual" class="txt" id="comment"></textarea>
                        </td> 
                      </tr> 
                      <tr valign="top"> 
                        <th class="top">&nbsp;</th> 
                        <td><input value="Comment" name="comment" type="submit" /></td> 
                      </tr> 
                    </table> 
                  </form></td> 
              </tr> 
            </table></td> 
        </tr> 
      </table>
