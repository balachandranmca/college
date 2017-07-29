<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style type="text/css">
      html, body, .leftside {
          min-height: 100% !important;
          height: 100%;
      }
      .leftside {
        height: 550px;
      }
      @media print {
				* { -webkit-print-color-adjust: exact; }
				html { background: none; padding: 0; min-height: 50% !important;height: 50%;}
				body { box-shadow: none; margin: 0; min-height: 50% !important;height: 50%;}
				span:empty { display: none; }
				.add, .cut { display: none; }
			}
			@page *{
			    margin-top: 2.54cm;
			    margin-bottom: 2.54cm;
			    margin-left: 3.175cm;
			    margin-right: 3.175cm;
			}
      .dotted_elemetns{
        font-family: serif;
        font-size: 16px;
        font-weight: bold;
        text-transform: capitalize;
        color: #494293;
      }
    </style>
  </head>
  <body>
    <!-- Begin wrapper table -->
    <div class="leftside" style="float: left; width: 10%; margin-bottom: 0pt; background: #000;">
      <div style="background: #000;">
        <img src="<?php echo WP_BAG_PL_IMAGE;?>sidebar1.png" style="margin-left:15px;margin-top:180px;float:left;width: 40px;height:170px;"/>
      </div>
    </div>
    <div style="float: right; width: 87%; margin-bottom: 0pt;margin-top:20pt">
      <div style="margin-top:20pt;text-align:center; width: 100%; margin-bottom: 0pt; ">
        <div style="text-align:center; width: 100%; margin-bottom: 0pt; ">
          <img src="<?php echo WP_BAG_PL_IMAGE;?>header-logo.png" style="vertical-align: middle;text-align:center" width="90" height="82"/>
          <p style="float: right;vertical-align: top;margin-top: 0pt;font-weight:bold;"><?php echo $issn; ?> (Online)</p>
        </div>
      </div>
      <div style="text-align:center;margin-top:15pt;">
        <h2 style="margin: 0;font-family: serif;color: #494293;text-align: center;font-size: 22px;font-weight: bold;">International Journal of Research in Engineering,
                        Science and </br>Technologies (IJRESTs)</h2>
        <h2 style="text-align: center;color: #a94442;font-size: 20px;font-family: cursive; margin-bottom: 0;">
                Certificate of Publication</h2>
      </div>
      <div style="font-family: monospace;font-size: 14px;margin-top: 17pt;text-align: justify;">
       <p style="line-height: 30pt;text-align: justify">
         This is to certify that Dr./Mr./Mrs. <span class="dotted_elemetns"> <?php echo $user_name; ?></span> authored a paper entitled <span class="dotted_elemetns"><?php echo $issue_name; ?></span>
         been published in <span class="dotted_elemetns"><?php echo $volumeName; ?>, <?php echo $published_date; ?></span> of International Journal of Research in Engineering, Science and Technologies(IJREST's).</p>
      </div>
      <div style="width:100%;">
          <table width="100%" style="margin-top:25pt;" cellspacing="0" cellpadding="0" border="0" align="left">
            <tr>
              <td style="text-align: left;width:57%;padding-top:60px;">
                <p style="color: #a94442;line-height: 28px;font-size: 14px;font-weight: bold;"
                  >Website: www.ijrests.org<br>E-mail: editor@ijrests.org
                </p>
              </td>
              <td align="center" style="text-align: center;float: right">
                <img src="<?php echo WP_BAG_PL_IMAGE;?>principal-sign.png" style="width:110px;height:50px"/>
                <p style="color: #a94442;line-height: 28px;font-size: 14px;font-weight: bold;width: 100%;text-align: center !important;">
                  Dr. Y R M Rao, B.E(Civil), M.E, Ph.D.,<br>
                  <span style="color: #474696;">Editor-in-Chief</span></p>
              </td>
            </tr>
          </table>
      </div>
    </div>
  </body>
</html>