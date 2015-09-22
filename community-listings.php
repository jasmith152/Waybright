<?php
$page_title = 'Homes For Sale By Community, Crystal River, Pine Ridge, Sugarmill Woods, Citrus Hills, Homosassa, Waterfront.';
$matatag_description = 'View all homes for sale by specific Florida communities such as Crystal River, Pine Ridge, Sugarmill Woods, Citrus Hills, Homosassa, Waterfront.';
include('header.php');
?>

<table width="664" style="background-color:#fff;border-left:solid; border-left-width:thin;border-left-color:#dbdb82;font-family:Arial, Helvetica, sans-serif;font-size:12px;margin-top:50px">
  <tr> 
  <td>
  <?php
     if (empty($_GET['search_title'])) {
         echo "<h1>View Our Listings Below</h1>\n";
         echo "<span style='font-size: 14px;'><a href='#Residential'>Residential</a> | <a href='#Mobile'>Mobile</a> | <a href='#Condo'>Condo</a> | <a href='#Vacant_Land'>Vacant Land</a> | <a href='#Multi_Res'>Multi-Residential</a> | <a href='#Commercial'>Commercial</a> | <a href='#Business_Op'>Business Op</a></span>\n";
      } else {
         echo "<h1>".$_GET['search_title']."</h1>\n";
      }
      
   /* Set some variables */
   /*if (!empty($_GET['subdivision'])) {
      $where_custom = " LM_MST_SUBDIV Like '%".$_GET['subdivision']."%'";
      }*/
   if (!empty($_GET['subdivision'])) {
      if ($_GET['subdivision'] == 'Citrus Hills') {
            $where_custom = " LM_MST_SUBDIV Like 'Citrus Hills' OR LM_MST_SUBDIV Like 'Belmont Hills' OR LM_MST_SUBDIV Like 'Brentwood' OR LM_MST_SUBDIV Like 'Cambridge Greens/Citrus Hills' OR LM_MST_SUBDIV Like 'Canterbury Lake Estates' OR LM_MST_SUBDIV Like 'Celina Hills' OR LM_MST_SUBDIV Like 'Clearview Est.' OR LM_MST_SUBDIV Like 'Fairview Est.' OR LM_MST_SUBDIV Like 'Hampton Hills' OR LM_MST_SUBDIV Like 'Kensington Est.' OR LM_MST_SUBDIV Like 'Meadowview' OR LM_MST_SUBDIV Like 'Presidential Est.' OR LM_MST_SUBDIV Like 'Terra Vista' OR LM_MST_SUBDIV Like 'Hampshire Hills' OR LM_MST_SUBDIV Like 'Greenbriar' OR LM_MST_SUBDIV Like 'Forest Ridge'";
         } else {
            $where_custom = " LM_MST_SUBDIV Like '%".$_GET['subdivision']."%'";
         }
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
      if (!empty($_GET['farm'])) {
         $where_custom = " LM_MST_CFF_SPECIAL_INFO Like '%Horses Allowed%'";
      }
   if (!empty($_GET['condo'])) {
      $where_custom = " LM_MST_PROP_TYP = 'Condo/Villa/Townhome'";
   }
   if (!empty($_GET['show'])) {
      $show = $_GET['show'];
      }
      if (empty($listingsin_subdivision) && empty($waterfront_yn) && empty($listingsin_city) && empty($where_custom)) {
         $firm_id = '084';
         $office_id = '0';
      } else {
         $display_firm = '084';
         $display_office = '0';
		 $display_agent = '1012';
      }
      if (!empty($_GET['display_agent'])) {
         $display_agent = '1012';
      }
   include '/home/mychurchserver/domains/citrusmls.mychurchserver.com/public_html/listings.php';
?>

      <table width="638" border="0" cellspacing="0" cellpadding="4" align="center" style=" background-color:#0001e5;color:#fff;font-family:Arial, Helvetica, sans-serif;font-size:10px; border-radius:10px;">
  <tr>
    <td valign="bottom" align="left">
&copy; 2013 Waybright Real Estate Inc..<br />All rights reserved Reproduction in whole <br />or in part without permission is prohibited.</td>
    <td align="center" style="font-size:16px">Waybright Real Estate Inc.<br />
      Office: 352-795-1600 <br />
      Fax: 352-563-9823</td>
    <td valign="bottom" align="right">This Site Designed & Hosted by<br /><a href="http://naturecoastdesign.net" target="_blank" style="color:#fff;">Nature Coast Web Design & Marketing Inc.</a></td>
  </tr>
</table>
</td>
  </tr>
</table>

</td>
  </tr>
</table>

    <!-- end .content --></div>

  <!-- end .container --></div>
</body>
</html>