<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <style type="text/css">
      @import url(http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800);
      [style*="Open Sans"] {
          font-family: Arial, sans-serif, 'Open Sans' !important
      }
      html,body {
        height: 100% !important;
      }
      @page *{
			    margin-top: 2.54cm;
			    margin-bottom: 2.54cm;
			    margin-left: 3.175cm;
			    margin-right: 3.175cm;
			}
    </style>
  </head>
  <body style="margin: 0 50px;">
    <!-- Begin wrapper table -->
   <table width="7%" height="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse: collapse; padding: 0; margin-left: 14px;float: left;">
     <tr>
       <td>
         <img alt="sidebar" src="<?php echo WP_BAG_PL_IMAGE;?>sidebar.png" alt="headerlogo" height="630" width="100">
       </td>
     </tr>
   </table>
    <table width="83%" height="100%" cellpadding="0" cellspacing="0" border="0" style="font-family: Arial, sans-serif, 'Open Sans';border-collapse: collapse; padding: 0;background-color: #fff; font-size: 12px;">
      <tr>
        <td  style="text-align: center;">
          <img style="margin-left: 150px;" src="<?php echo WP_BAG_PL_IMAGE;?>header-logo1.png" alt="headerlogo" height="130" width="130">
          <p style="float: right;font-size: 16px;font-weight: bold;font-family: initial;">ISSN <?php echo $issn; ?>(Online)</p>
        </td>
      </tr>
      <tr>
        <td valign="top" class="container-td" align="left">
          <table width="100%" style="margin: 20px;" cellspacing="0" cellpadding="0" border="0" align="left">
            <tr>
              <td><h2 style="margin: 0;font-family: fantasy;color: #494293;text-align: center;font-size: 33px;font-weight: normal;">International Jounernal of Research in Engineering,
                        Science and </br>Technologies (IJRESTs)</h2></td>
            </tr>
            <tr>
              <td><h2 style="text-align: center;color: #a94442;font-size: 28px;font-family: cursive; margin-bottom: 0;">
                Certificate of Publication</h2>
              </td>
            </tr>
          </table>
          <table width="100%" style="margin: 0;" cellspacing="0" cellpadding="0" border="0" align="left">
            <tr>
              <td style="font-size: 16px; font-weight: bold;color: rgb(28, 52, 70); margin: 0;text-align: center;">
                <p style="margin-left: 10px;text-align: left;line-height: 40px;font-family: monospace !important;font-size: 20px;">This is to certify that Dr./Mr./Mrs. <?php echo $user_name; ?> 
                         authored a paper entitled <?php echo $issue_name; ?> been published in <?php echo $volumeName; ?>, 
                         <?php echo $published_date; ?> of International Journal of Research in Engineering, Science and Technologies(IJRESTs)</p>  
              </td>
            </tr>
          </table>
          <table width="100%" style="margin-left: 10px;" cellspacing="0" cellpadding="0" border="0" align="left">
            <tr>
              <td style="text-align: left;">
                <p style="color: #a94442;line-height: 28px;font-size: 18px;font-weight: bold;"
                  >Website: www.ijrests.org<br>E-mail: editor@ijrests.org
                </p>
              </td>
              <td style="text-align: right;float: right">
                <p style="color: #a94442;line-height: 28px;font-size: 18px;font-weight: bold;width: 100%;text-align: center;">
                  Dr. Y R M Rao, B.E(Civil), M.E, Ph.D.,<br>
                  <span style="color: #474696;  ">Editor-in-Chief</span></p>
              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
  </body>
</html>