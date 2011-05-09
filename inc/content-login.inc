      <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="body-bg" > 
        <tr> 
          <td class="pads-left-right pads-top-bottom"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
                    <tr> 
                      <td class="white content-box"> <p class="heading">Please Sign In before proceeding. </p> 
                        <p class="content error-login"><?=$err_msg?></p> 
                        <form action="login.php<?if (isset($_GET['done'])) { echo "?done=".urlencode($_GET['done']);}?>" method="post" name="login" target="_parent" id="login"> 
                          
                          <table width="100%" border="0" cellpadding="5" cellspacing="0"> 
                            <tr align="left" class="content"> 
                              <td> <label for="username">Username</label> </td> 
                              <td> <input type="text" name="username" tabindex="1" id="username" class="txt" /> </td> 
                              <td class="desc">&nbsp;</td> 
                            </tr> 
                            <tr align="left" class="content"> 
                              <td> <label for="passwrd">Password</label> </td> 
                              <td> <input type="password" name="password" value="" tabindex="2" maxlength="50" id="passwrd" class="txt" /> </td> 
                              <td class="desc">&nbsp;</td> 
                            </tr> 
                            <tr class="content"> 
                              <td>&nbsp;</td> 
                              <td class="top"> <input name="login" type="submit" class="button" tabindex="3" value="Sign In" /> </td> 
                              <td class="desc"> If you are not a QikBlogger user, please <a href="<?=WEB_ROOT?>/signup.php" class="links content-links">sign up</a> here&gt;</td> 
                            </tr> 
                          </table> 
                        </form></td> 
                    </tr> 
                  </table></td> 
              </tr> 
            </table></td> 
        </tr> 
      </table>
