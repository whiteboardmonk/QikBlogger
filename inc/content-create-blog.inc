      <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" background="img/body_bg.gif" > 
        <tr> 
          <td class="pads-left-right pads-top-bottom"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
                    <tr> 
                      <td class="white content-box"> <p class="heading">Create you blog</p> 
                        <p class="content error-login"><?=$err_msg?></p>
                          <form action="<?=WEB_ROOT?>/create-blog.php" name="createblog" method="post"> 
                          <table width="100%" border="0" cellpadding="5" cellspacing="0"> 
                            <tr align="left" class="content"> 
                              <th width="21%"> <label for="f-title"> Blog Name </label> </th> 
                              <td width="44%"> <input type="text" name="blog_name" value="" style="width:200px;" class="txt" maxlength="40" id="b-name" tabindex="1"></td> 
                              <td width="35%" class="desc"> (Use a-z OR 0-9 OR '-'. Not a space in between would be converted to '-') </td> 
                            </tr> 
                            <tr align="left" class="content"> 
                              <th valign="top"> <label for="f-title"> Blog Description </label> </th> 
                              <td> <textarea name="blog_desc" cols="56" rows="6" class="txt" id="f-title" tabindex="2"></textarea> </td> 
                              <td class="desc"> Enter a short description of your blog. </td> 
                            </tr> 
                            <tr align="left" class="content"> 
                              <td>&nbsp; </td> 
                              <td><input name="create" type="submit" class="button" tabindex="3" value="Create Blog" /></td> 
                              <td>&nbsp;</td> 
                            </tr> 
                          </table> 
                        </form> 
                  </table></td> 
              </tr> 
            </table></td> 
        </tr> 
      </table>
