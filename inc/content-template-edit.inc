      <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="body-bg" > 
        <tr> 
          <td class="pads-left-right pads-top-bottom">
            <table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td class="white content-box"> 
                  <p class="content status"> 
                    <?=$status_msg?> 
                  </p>
                  <p class="content status"> 
                    <?=$critical_err_msg?> 
                  </p>
                  <form action="<?=WEB_ROOT?>/template-edit.php?blog_name=<?=$b->blog_name?>" name="template-edit" method="post"> 
                    <p> 
                      <textarea name="template" wrap="soft" tabindex="3" rows="17" cols="75" id="textarea"><?=$template?></textarea> 
                    </p> 
                    <p> 
                      <input value="Save Template Changes" id="publishPost" name="save" type="submit"> 
                      <input value="Clear Edits" name="clear" type="reset"> 
                    </p> 
                  </form>  
                  
                </td> 
              </tr> 
              
            </table></td> 
        </tr> 
      </table>
