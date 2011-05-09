      <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="body-bg"> 
        <tr> 
          <td class="pads-left-right pads-top-bottom"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td class="content-box white"><p class="heading">Edit Blog Settings </p> 
                  <form action="<?=WEB_ROOT?>/blog-options-basic.php?blog_name=<?=$b->blog_name?>" id="blogOptions" name="blogOptions" method="post"> 
                    <table border="0" cellpadding="5" cellspacing="0" class="content"> 
                      <tr valign="top"> 
                        <th class="top"> <div align="right"> 
                            <label for="title">Name:</label> 
                          </div></th> 
                        <td> <div> 
                            <?=$b->blog_name?> 
                          </div></td> 
                      </tr> 
                      <tr valign="top"> 
                        <th class="top"> <div align="right"> 
                            <label for="title">Title:</label> 
                          </div></th> 
                        <td> <div class="errorbox-good"> 
                            <input type="text" name="blog_title" value="<?=$b->blog_title?>" maxlength="255" class="txt" size="50" /> 
                            <p class="errormsg"></p> 
                          </div></td> 
                      </tr> 
                      <tr valign="top"> 
                        <th class="top"> <div align="right"> 
                            <label for="pgtitle">Page Title:</label> 
                          </div></th> 
                        <td> <div class="errorbox-good"> 
                            <input type="text" name="blog_pgtitle" value="<?=$b->blog_pgtitle?>" maxlength="255" class="txt" size="50" /> 
                            <p class="errormsg"></p> 
                          </div></td> 
                      </tr> 
                      <tr valign="top"> 
                        <th class="top"> <div align="right"> 
                            <label for="title">Blog URL:</label> 
                          </div></th> 
                        <td> <div> 
                            <?=$b->blog_url?> 
                          </div></td> 
                      </tr> 
                      <tr valign="top"> 
                        <th class="top"> <div align="right"> 
                            <label for="blog_desc">Description:</label> 
                          </div></th> 
                        <td> <div class="errorbox-good"> 
                            <textarea name="blog_desc" wrap="virtual" rows="5" cols="50" class="txt"><?=$b->blog_desc?></textarea> 
                            <p>500 Characters Max.</p> 
                            <p class="errormsg"></p> 
                          </div></td> 
                      </tr> 
                      <tr valign="top"> 
                        <th class="top"> <div align="right"> 
                            <label for="title">Number of posts on Front Page:</label> 
                          </div></th> 
                        <td> <div class="errorbox-good"> 
                            <input type="text" name="num_frontpage_posts" value="<?=$b->num_frontpage_posts?>" maxlength="3" class="txt" size="4" /> 
                            <p class="errormsg"></p> 
                          </div></td> 
                      </tr> 
                      <tr valign="top"> 
                        <th class="top"> <div align="right"> 
                            <label for="allowComments"> Comments: </label> 
                          </div></th> 
                        <td> <input name="show_comments" type="radio" class="txt" id="show_comments" value="show" <? if ($b->show_comments==true) echo "checked=\"checked\"";?> /> 
                          <label for="showComments">Show</label> 
                          <input name="show_comments" type="radio" class="txt" id="hide_comments" value="hide" <? if ($b->show_comments==false) echo "checked=\"checked\"";?> /> 
                          <label for="hideComments">Hide</label> 
                          <p> Note: Selecting "Hide" does not delete existing comments - You can show them at any time by re-selecting "Show". </p></td> 
                      </tr> 
                      <tr valign="top"> 
                        <th> <div align="right"> 
                            <label for="who_can_comment"> Who Can Comment:</label> 
                          </div></th> 
                        <td> <select name="who_can_comment" class="txt" id="who_can_comment"> 
                            <option <? if ($b->who_can_comment==1) echo "selected=\"selected\"";?> value="1"> Anyone </option> 
                            <option <? if ($b->who_can_comment==2) echo "selected=\"selected\"";?> value="2"> Only Registered Users </option> 
                            <option <? if ($b->who_can_comment==3) echo "selected=\"selected\"";?> value="3"> Only Members of this Blog </option> 
                          </select> </td> 
                      </tr> 
                      <tr valign="top"> 
                        <th class="top"> <div align="right"> 
                            <label for="Article Footer">Article Footer:</label> 
                          </div></th> 
                        <td> <div class="errorbox-good"> 
                            <textarea name="article_footer" wrap="virtual" rows="5" cols="50" class="txt"><?=$b->article_footer?></textarea> 
                            <p>500 Characters Max.</p> 
                            <p class="errormsg"></p> 
                          </div></td> 
                      </tr> 
                      <tr align="left"> 
                        <td>&nbsp; </td> 
                        <td><input name="save" type="submit" class="button" tabindex="3" value="Save Settings" /></td> 
                      </tr> 
                    </table> 
                  </form></td> 
              </tr> 
            </table> 
          </td> 
        </tr> 
      </table>
