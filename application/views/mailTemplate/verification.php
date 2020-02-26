<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
    </head>
    <body style="width:100%;height:100%;background:#efefef;-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none;color:#3E3E3E;font-family:Helvetica, Arial, sans-serif;line-height:1.65;margin:0;padding:0;">
        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;background:#efefef;-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:none;color:#3E3E3E;font-family:Helvetica, Arial, sans-serif;line-height:1.65;margin:0;padding:0;">
            <tr>
                <td valign="top" style="display:block;clear:both;margin:0 auto;max-width:580px;">
                    <table border="0" cellpadding="0" cellspacing="0" style="width:100%;border-collapse:collapse;">
                        <tr>
                            <td valign="top" align="center" class="masthead" style="padding:20px 0;background:#03618c;color:white;">
                                <h1 style="font-size:32px;margin:0 auto;max-width:90%;line-height:1.25;"><a href="<?php print site_url(); ?>" target="_blank" style="text-decoration:none;color:#ffffff;"><img border="0" src="<?php print site_url(); ?>assets/images/elogo.png" alt="<?php print APPLICATION_NAME; ?>" title="<?php print APPLICATION_NAME; ?>" style="border:none;color:#ffffff;font-size:58px;line-height:52px;max-width:100%;margin:0 auto;display:block;" /></a><p style="margin-bottom:0;line-height:12px;font-weight:normal;margin-top:15px;font-size:18px;"></p></h1>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" class="content" style="background:white;padding:20px 35px 10px 35px;">
                                <h4 style="font-size:20px;margin-bottom:10px;line-height:1.25;"><?php print $topMsg; ?>,</h4>
                                <p><?php print $bodyMsg; ?></p>
                                <p style="font-size:14px;font-weight:normal;margin-bottom:10px;margin-top:0;"><a style="display:inline-block;color:white;background:#03618c;border:solid #03618c;border-width:10px 20px 10px 20px;font-weight:bold;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;text-decoration:none;" href="<?php print $verificationLink; ?>">Activate Account</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td valign="top" style="display:block;clear:both;margin:0 auto;max-width:580px;">
                                <table border="0" cellpadding="0" cellspacing="0" style="width:100%;border-collapse:collapse;">
                                    <tr>
                                        <td valign="top" class="content thanksMsg" style="background:white;padding:10px 35px 20px 35px;">
                                            <p style="font-size:14px;font-weight:normal;margin-top:0;margin-bottom:5px;"><?php print $thanksMsg; ?></p>
                                            <p style="font-size:14px;font-weight:normal;margin-top:0;margin-bottom:5px;"><?php print $delimeter; ?></p>
                                        </td>
                                    </tr>                                    
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>            
        </table>
    </body>
</html>
