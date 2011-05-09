      <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="body-bg" > 
        <tr> 
          <td class="pads-left-right pads-top-bottom"> <p class="content error-login"> 
              <?=$err_msg?> </p>
            
            <table width="100%"  border="0" cellspacing="0" cellpadding="0" class="content-box white"> 
              <tr> 
                <td><form action="<?=WEB_ROOT?>/post-create.php?blog_name=<?=$b->blog_name?>" name="post" method="post"> 
                    <table width="100%" border="0" cellpadding="5" cellspacing="0" id="titles"> 
                      <tbody> 
                        <tr class="content"> 
                          <th width="15%"> <label for="f-title"> Title: </label> </th> 
                          <td width="85%"> <input name="title" value="<?if(isset($title)) echo $title;?>" id="f-title" maxlength="150" tabindex="1" class="txt" size="48" type="text" /> </td> 
                        </tr> 
                      </tbody> 
                    </table> 
                    <table width="100%" border="0" cellpadding="5" cellspacing="0" id="titles"> 
                      <tbody> 
                        <tr class="content"> 
                          <th width="15%" valign="top"> <label for="label"> Content </label> </th> 
                          <td width="85%"> <textarea name="content" cols="47" rows="17" wrap="soft" class="txt" id="textarea2" tabindex="2"><?if(isset($content)) echo $content;?></textarea> </td> 
                        </tr> 
                      </tbody> 
                    </table> 
                    <table width="100%" border="0" cellpadding="5" cellspacing="0" id="titles"> 
                      <tbody> 
                        <tr class="content"> 
                          <th width="15%"> <label for="f-title"> Tags: </label> </th> 
                          <td width="85%"> <input name="tags" value="<?if(isset($tags)) echo $tags;?>" id="f-title" maxlength="150" tabindex="3" class="txt" size="48" type="text" /> 
                            (seperate tags with ':' without quotes) </td> 
                        </tr> 
                      </tbody> 
                    </table> 
                    <table width="100%" border="0" cellpadding="5" cellspacing="0" id="titles"> 
                      <tbody> 
                        <tr class="content"> 
                          <th width="15%"> <label for="label2"> Comments: </label> </th> 
                          <td width="85%"> <input name="allow_comments" value="Yes" <?if(isset($allow_comments)) { if ($allow_comments==true) echo "checked=\"checked\"";} else { echo "checked=\"checked\"";}?> id="radio3" type="radio" /> 
                            <label for="radio3">Yes</label> 
                            <input name="allow_comments" value="No" <?if(isset($allow_comments)) { if ($allow_comments==false) echo "checked=\"checked\"";}?> id="radio4" type="radio" /> 
                            <label for="radio4">No</label> 
                            </span> </td> 
                        </tr> 
                      </tbody> 
                    </table> 
                    <table width="100%" border="0" cellpadding="5" cellspacing="0" id="titles"> 
                      <tbody> 
                        <tr class="content"> 
                          <th width="15%"> <label for="label3"> Date/Time: </label> </th> 
                          <td width="85%"> <?
    if ( !isset($disp_dt) ) {
      //"Y-m-d H:i:s"
      $postHour = date("H");
      $postMinute = date("i");
      $postSecond = date("s");
      $postMonth = date("m");
      $postDay = date("d");
      $postYear = date("Y");
    }
    ?> 
                            <input name="postHour" type="text" class="txt" id="postHour2" value="<?=$postHour?>" size="2" maxlength="2" /> 
                            :
                            <input name="postMinute" type="text" class="txt" id="postMinute2" value="<?=$postMinute?>" size="2" maxlength="2" /> 
                            :
                            <input name="postSecond" type="text" class="txt" id="postSecond" value="<?=$postSecond?>" size="2" maxlength="2" /> 
                            (hh:mm:ss)
                            <input name="postMonth" type="text" class="txt" id="postMonth2" value="<?=$postMonth?>" size="2" maxlength="2" /> 
                            -
                            <input name="postDay" type="text" class="txt" id="postDay2" value="<?=$postDay?>" size="2" maxlength="2" /> 
                            -
                            <input name="postYear" type="text" class="txt" id="postYear2" value="<?=$postYear?>" size="4" maxlength="4" /> 
                            (mm-dd-yyyy) </td> 
                        </tr> 
                      </tbody> 
                    </table> 
                    <table width="100%" border="0" cellpadding="5" cellspacing="0" id="titles"> 
                      <tbody> 
                        <tr class="content"> 
                          <th width="15%"> <label for="label4"> </label> </th> 
                          <td width="85%"><input value="Publish Post" id="publish" name="publish" class="btn orange" type="submit" /></td> 
                        </tr> 
                      </tbody> 
                    </table> 
                  </form></td> 
              </tr> 
            </table></td> 
        </tr> 
      </table>
