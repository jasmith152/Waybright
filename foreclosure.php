<?php
$page_title = 'Citrus County Foreclosure Homes, Land, Property For Sale in Florida.';
$matatag_description = 'View all foreclosure homes and properties for sale in Citrus County Florida MLS.';
include('header.php');
?>
<br>
<table width="686" style="margin-top:50px;font-family:Arial, Helvetica, sans-serif;font-size:12px">
  <tr>
    <td height="700" valign="top">
    <a name="listings"></a>
      <?php
     echo "<h1>Foreclosure Listings</h1>\n";
      echo "<span style='font-size: 14px;'><a href='#Residential'>Residential</a> | <a href='#Mobile'>Mobile</a> | <a href='#Condo'>Condo</a></span>\n";

   /* Set some variables */
   $show = "Residential";
   $where_custom = " LM_MST_FORCL_YN = 'Y'";
   //$where_custom = " LM_MST_SHTSL_YN = 'Y'";
   //$where_custom = " (LM_RES_REM_P Like '%foreclosure%' OR LM_RES_REMARK Like '%foreclosure%' OR LM_RES_REM_P Like '%bank owned%' OR LM_RES_REMARK Like '%bank owned%' OR LM_RES_REM_P Like '%special addendum%' OR LM_RES_REMARK Like '%special addendum%' OR LM_RES_REM_P Like '%proof of funds%' OR LM_RES_REMARK Like '%proof of funds%') AND (LM_RES_REM_P Not Like '%not foreclosure%' AND LM_RES_REMARK Not Like '%not foreclosure%' AND LM_RES_REM_P Not Like '%not a foreclosure%' AND LM_RES_REMARK Not Like '%not a foreclosure%' AND LM_RES_REM_P Not Like '%short sale%' AND LM_RES_REMARK Not Like '%short sale%' AND LM_RES_REM_P Not Like '%not bank owned%' AND LM_RES_REMARK Not Like '%not bank owned%')";
   $display_agent = '1012';
   include '/home/mychurchserver/domains/citrusmls.mychurchserver.com/public_html/listings.php';
      ?>
      </td>
  </tr>
</table>
<?php
include('footer.php');
?>