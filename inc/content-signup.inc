      <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="body-bg" > 
        <tr> 
          <td class="pads-left-right pads-top-bottom"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
                    <tr> 
                      <td class="white content-box"> <p class="heading">Sign Up for a Qikblogger acccount </p> 
                        <p class="content error-login" > 
                          <?=$err_msg?> 
                        </p> 
                        <form action="signup.php" method="post" name="signup" > 
                          <input type="hidden" name="destination" value="<?=$redirect_to?>"> 
                          <table width="100%" border="0" cellpadding="5" cellspacing="0"> 
                            <tr align="left" class="content"> 
                              <th> <label for="username">Username</label> </th> 
                              <td> <input type="text" name="username" tabindex="1" id="username" class="txt" /> </td> 
                              <td >&nbsp; </td> 
                            </tr> 
                            <tr align="left" class="content"> 
                              <th> <label for="passwrd">Password</label> </th> 
                              <td> <input type="password" name="password" value="" tabindex="2" maxlength="50" id="passwrd" class="txt" /> </td> 
                              <td >&nbsp;</td> 
                            </tr> 
                            <tr align="left" class="content"> 
                              <th> <label for="passwrd2">Password</label> </th> 
                              <td> <input type="password" name="password2" value="" tabindex="2" maxlength="50" id="passwrd2" class="txt" /> </td> 
                              <td>(type in you password again)</td> 
                            </tr> 
                            <tr align="left" class="content"> 
                              <th> <label for="email">Email</label> </th> 
                              <td> <input type="text" name="email" value="" tabindex="2" size="30" maxlength="50" id="email" class="txt" /> </td> 
                              <td >&nbsp;</td> 
                            </tr> 
                            <tr class="content"> 
                              <th>&nbsp;</th> 
                              <td class="top"> <input name="signup" type="submit" class="button" id="signup" tabindex="3" value="Sign Up" /> </td> 
                              <td> If you are already a QikBlogger user, please <a href="<?=WEB_ROOT?>/login.php" class="links content-links">login</a> here. </td> 
                            </tr> 
                          </table> 
                        </form> 
                  </table></td> 
              </tr> 
            </table></td> 
        </tr> 
      </table>
