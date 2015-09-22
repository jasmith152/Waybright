<?php
$page_title = 'Homes For Sale On The Golf Course in Citrus County Florida Golf Course Lots.';
$matatag_description = 'Learn about golf course homes and lots for sale in Citrus County Florida.';
include('header.php');
?>
<table width="664" bgcolor="#fff" style="margin-top:50px;border-left:solid; border-left-width:thin;border-left-color:#dbdb82;font-family:Arial, Helvetica, sans-serif;font-size:12px">
  <tr> 
  <td>
  <table border="0" cellpadding="10" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="550" id="AutoNumber2" height="366">
							<tr height="310">
								<td width="510" height="310" valign="top">
									<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber5">
                                    <tr>
											<td colspan="3" valign="top">
											<?php
	    if (empty($_GET['search_title'])) {
         echo "<h1>View Our Listings Below</h1>\n";
         echo "<span style='font-size: 14px;'><a href='#Residential'>Residential</a> | <a href='#Mobile'>Mobile</a> | <a href='#Condo'>Condo</a> | <a href='#Vacant_Land'>Vacant Land</a> | <a href='#Multi_Res'>Multi-Residential</a> | <a href='#Commercial'>Commercial</a> | <a href='#Business_Op'>Business Op</a></span>\n";
      } else {
         echo "<h1>".$_GET['search_title']."</h1>\n";
      }
      
			/* Set some variables */
			if (!empty($_GET['subdivision'])) {
			   $listingsin_subdivision = $_GET['subdivision'];
      }
			if (!empty($_GET['city'])) {
			   $listingsin_city = $_GET['city'];
      }
			if (!empty($_GET['waterfront'])) {
			   $waterfront_yn = $_GET['waterfront'];
      }
      if (!empty($_GET['golf'])) {
         $where_custom = " LM_MST_CFF_LOT_DESCRIPTION Like '%On Golf Course%'";
      }
			if (!empty($_GET['show'])) {
			   $show = $_GET['show'];
      }
      if (empty($listingsin_subdivision) && empty($waterfront_yn) && empty($listingsin_city) && empty($where_custom)) {
         $agent_id = '1012';
         $office_id = '0';
      } else {
         $display_agent = '1012';
         $display_office = '0';
      }
			include '/home/mychurchserver/domains/citrusmls.mychurchserver.com/public_html/listings.php';
      ?>
												<p></p>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
</td>
  </tr>
</table>
<?php
include('footer.php');
?>