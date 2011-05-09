	  <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="body-bg" > 
        <tr> 
          <td class="pads-left-right pads-top-bottom"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td width="60%" valign="top"><table width="100%"  border="0" cellspacing="" cellpadding="0"> 
                    <tr> 
                      <td class="white content-box"><div align="left"> <span class="heading">What's a blog? </span></div> 
                        <p align="left" class="content"> A blog is your easy-to-use web site, where you can quickly post thoughts, interact with people, and <a href="help.php" class="links content-links">more</a>. </p> 
                        <p align="left" class="heading">Create your own blog in 2 easy steps:</p> 
                        <ol> 
                          <li class="content">Create an account</li> 
                          <li class="content">Name your blog</li> 
                        </ol> 
                        <blockquote><blockquote> 
                          <p class="content"><a href="signup.php" class="links content-links">Start now</a>&gt;&gt;</p> 
                        </blockquote></blockquote></td> 
                    </tr> 
                  </table></td> 
                <td width="10%"><img src="img/spacer.gif" width="50" height="1" border="0" /></td> 
                <td width="30%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
                    <tr> 
                      <td class="white content-box"> <span class="heading">Already have an account?</span> 
                        <form action="<?=WEB_ROOT?>/login.php" method="post" name="login" target="_parent" id="login"> 
                          <input type="hidden" name="destination" value="<?=WEB_ROOT?>/home.php" /> 
                          <table cellpadding="5" cellspacing="0" border="0"> 
                            <tr align="left" class="content"> 
                              <td> <label for="username">Username</label> </td> 
                              <td> <div class="username-text"> 
                                  <input type="text" name="username" tabindex="1" id="username" class="txt" /> 
                                </div></td> 
                            </tr> 
                            <tr align="left" class="content"> 
                              <td> <label for="passwrd">Password</label> </td> 
                              <td> <div class="password-text"> 
                                  <input type="password" name="password" value="" tabindex="2" maxlength="50" id="passwrd" class="txt" /> 
                                </div></td> 
                            </tr> 
                            <tr> 
                              <td>&nbsp;</td> 
                              <td class="top"> <input name="login" type="submit" class="button" tabindex="3" value="Sign In" /> </td> 
                            </tr> 
                          </table> 
                        </form></td> 
                    </tr> 
                  </table></td> 
              </tr> 
            </table></td> 
        </tr> 
      </table>
