      <table width="780" border="0" align="center" cellpadding="0" cellspacing="0" class="body-bg" > 
        <tr> 
          <td class="pads-left-right pads-top-bottom"><table width="100%"  border="0" cellspacing="0" cellpadding="0"> 
              <tr> 
                <td class="white content-box"> <p class="heading error"> 
                    <?=$critical_err_msg?> 
                  </p> 
                  <p class="content status"> 
                    <?=$status_msg?> 
                  </p> 
                  <table width="100%"  border="0" cellspacing="0" cellpadding="10"> 
                    <tr> 
                      <td width="33%" class="content"><p align="center"><strong>TicTac</strong></p> 
                        <p align="center"> </p> 
                        <form action="template-edit.php?blog_name=<?=$_GET['blog_name']?>" method="post" name="template-choose" id="template-choose" > 
                          <div align="center">
                            <input value="Use this Template" id="publishPost" name="use" type="submit" /> 
                            <input type="hidden" value="tictac" name="template-name"/> 
                          </div>
                        </form> 
                        <div align="center">
                          </p>
                        </div></td> 
                      <td width="33%" class="content"><p align="center"><strong>ThisAway</strong></p> 
                        <p align="center"></p> 
                        <form action="template-edit.php?blog_name=<?=$_GET['blog_name']?>" method="post" name="template-choose" id="template-choose" > 
                          <div align="center">
                            <input value="Use this Template" id="publishPost" name="use" type="submit" /> 
                            <input type="hidden" value="thisaway"  name="template-name"/> 
                          </div>
                        </form> 
                        <div align="center">
                          </p>
                        </div></td> 
                      <td width="34%" class="content"><p align="center"><strong>Moto</strong></p> 
                        <p align="center"> </p> 
                        <form action="template-edit.php?blog_name=<?=$_GET['blog_name']?>" method="post" name="template-choose" id="template-choose" > 
                          <div align="center">
                            <input value="Use this Template" id="use" name="use" type="submit" /> 
                            <input type="hidden" value="moto" name="template-name" /> 
                          </div>
                        </form> 
                        <div align="center">
                          </p>
                        </div></td> 
                    </tr> 
                    <tr> 
                      <td class="content"><p align="center"><strong>Scribe</strong></p> 
                        <p align="center"></p> 
                        <form action="template-edit.php?blog_name=<?=$_GET['blog_name']?>" method="post" name="template-choose" id="template-choose" > 
                          <div align="center">
                            <input value="Use this Template" id="publishPost" name="use" type="submit" /> 
                            <input type="hidden" value="scribe" name="template-name" /> 
                          </div>
                        </form> 
                        <div align="center">
                          </p>
                        </div></td> 
                      <td class="content"><p align="center"><strong>Kubrick</strong></p> 
                        <p align="center"></p> 
                        <form action="template-edit.php?blog_name=<?=$_GET['blog_name']?>" method="post" name="template-choose" id="template-choose" > 
                          <div align="center">
                            <input value="Use this Template" id="publishPost" name="use" type="submit" /> 
                            <input type="hidden" value="kubrick" name="template-name" /> 
                          </div>
                        </form> 
                        <div align="center">
                          </p>
                        </div></td> 
                      <td class="content"><p align="center"><strong>Dairyland</strong></p> 
                        <p align="center"></p> 
                        <form action="template-edit.php?blog_name=<?=$_GET['blog_name']?>" method="post" name="template-choose" id="template-choose" > 
                          <div align="center">
                            <input value="Use this Template" id="publishPost" name="use" type="submit" /> 
                            <input type="hidden" value="dairyland" name="template-name" /> 
                          </div>
                        </form> 
                        <div align="center">
                          </p>
                        </div></td> 
                    </tr> 
                    <tr> 
                      <td>&nbsp;</td> 
                      <td>&nbsp;</td> 
                      <td>&nbsp;</td> 
                    </tr> 
                  </table> 
                </td> 
              </tr> 
            </table></td> 
        </tr> 
      </table> 
