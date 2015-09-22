<?php
$page_title = 'Crystal River Realtors at Waybright Real Estate Agency in Citrus County Florida.';
$matatag_description = 'Meet the Realtors at Waybright Real Estate in historic downtown Crystal River Florida.';
include('header.php');
?>

<table width="658" style="background-color:#FFF;font-family:Arial, Helvetica, sans-serif;margin-top:50px">
  <tr> 
  <td>
  <table align="center" width="650" border="0" cellspacing="4" cellpadding="4" style="background-color:#FFF;font-size:14px">
  <tr>
                                    <td colspan="3" align="left"><h1>Our Agents</h1></td></tr>
                                    <tr>
    <td height="700" valign="top" style="color:#000">
    <?php
/* Set some variables */
$firm_id = '084';
include '/home/mychurchserver/domains/citrusmls.mychurchserver.com/public_html/agents-tile.php';

$bio = $_GET['agent_id'];
switch ($bio) {
    case 1012: 
    	echo "Stephanie Ann Price, Realtor®, Broker-Owner of Waybright Real Estate, Inc.<br /><br />
Stephanie is a native Floridian, and has resided in Citrus County since 1970, after her family relocated here from St. Petersburg, Florida. Her mother, Patricia Waybright, was the founding Broker of Waybright Real Estate, Inc. in 1984. Stephanie joined the family business in 2002, leaving her career as a paralegal for 18 years, working for area law firms.  She became the Broker/Owner of Waybright Real Estate in 2009.  Stephanie has been certified in Short Sales and Foreclosure transactions, and has been a Multi-Million $ Producer since the beginning of her real estate career. She continues her education in Commercial Real Estate, Property Management and Real Estate Agency Management.<br /><br />
Stephanie is a member of the Citrus County Chamber of Commerce, and is a founding member of the newly formed Crystal River Area Council of the Chamber, working with fellow business leaders, City and County Administrators in the revitilization of the Crystal River Downtown Business Area.  She serves on the Governmental Affairs Committee, working closely with City of Crystal River leaders.<br /><br />
As a member of the Citrus County Economic Development Council, Stephanie is active in Council functions, staying abreast of the business related market in our County. The EDC concentrates mainly on trying to bring new businesses to our community from out of the county, the state and from countries around the world.<br /><br />
Stephanie also belongs to the Pilot Club of Crystal River, a community service organization that generously gives back to the community. As an active and dedicated member, she has served as past-president, past vice-president, secretary, and as a Director.<br /><br />
She is the mother of two beautiful adult daughters, Kimberly and Victoria, and two beautiful granddaughters, Lillian and Skylar. She enjoys time with her family, horseback riding, and all water activies, making Citrus County the ideal place for her to live!!<br /><br />
Stephanie has found she loves her career in real estate, and if you love what you do, you will strive to be successful! Many of her 'clients' have become friends over the years..which is very satisfying!<br /><br />
Because Waybight Real Estate, Inc. has always strived to give personalized, professional service, we have a strong base of quality clients that has proven to make us successful over the years!<br /><br />
Stephanie can be reach be email: <a href='mailto:sprice_wre@hotmail.com'>sprice_wre@hotmail.com</a> or phone: 352-795-1600<br /><br />

";
break;
	case 3709:
    	echo "Rosann Strawn, Realtor®-Associate<br /><br />
Rosann Strawn has recently joined the associates of Waybright Real Estate, Inc. as a Realtor Associate. She brings with her a very diverse background in banking and in the mortgage industry.  Throughout most of her 35 year banking and mortgage career, she was in branch management, as well as originating and processing both portfolio and secondary real estate loans, commercial loans, and consumer loans in Citrus and Marion Counties.  As a licensed mortgage broker, she ran her own mortgage broker business from 2002 to 2006.<br /><br />
Rosann has always believed in giving back to the community! For eleven years she has served on the boards of the Habitat for Humanity of Citrus County and the JR Achievement of West Central Florida, serving our Citrus County students. In addition to her current board memberships with those worthwhile non-profit organizations, she is a charter member of the Chamber of Commerce Business Women's Alliance Committee. In the past Rosann has served as a board member of the Nature Coast Chamber of Commerce in Crystal River, as well as on the Ambassador Committee and as an affiliate of the Women's Council of Realtors in Marion County.<br /><br /> 
Thirty nine years ago, Rosann relocated from Gallipolis, Ohio, a small city in the Ohio Valley, settling in the Citrus County area. She resides with her daughter, Roselen and both are very much a part of the Dunnellon community.<br /><br />
Rosann is looking forward to a successful new career selling real estate in Citrus County and her continued association with Waybright Real Estate, Inc!<br /><br />
You may reach Rosann by email: <a href='mailto:rstrawn_wre@yahoo.com'>rstrawn_wre@yahoo.com</a> or by phone: 352-795-1600
    <br /><br />";
	break;
	case 684:
    	echo "Nancy J. Wilson, Realtor®, Broker-Associate, SRES®(Seniors Real Estate Specialists) GRI, Property Manager<br /><br />
As a Realtor®, Nancy believes education, communication, and attention to detail are key factors in every real estate transaction. And as a homeowner herself, she knows the importance of using a professional, experienced and knowledgeable real estate consultant to advise and guide buyers and sellers through to a successful closing.<br /><br />
Nancy was a Realtor® in Michigan before relocating to Citrus County in 1994 and as a Realtor® in Citrus County for over 11 years, has been a Multi-Million $ Producer, and has over 5 years experience in property management. She has furthered her education in the industry by getting her Real Estate Broker license and earning her Gradute Realtor® Institute designation (GRI). She also has earned her Seniors Real Estate Specialist desination (SRES®), enabling her to help and guide seniors with their buying and selling real estate needs. Previous to becoming a Realtor®, her 25 years in retail sales & management also emphasized the importance of great customer service, education and staying abreast of current trends in the market place.<br /><br />
Happily married to husband Jim for over 40 years, mother of two, grandmother to four grandgirls & two grandboys, she enjoys spending time with her family which also includes two 85 lb dogs, Max & Molly! Hobbies are quilting, fishing, boating, bike riding, walking, and reading. She is a member of the American Legion Auxiliary, Post 155 in Crystal River, attends Gulf to Lakes Church and volunteers in the church nursery.<br /><br />
You may contact Nancy by email: <a href='mailto:nancy.wilson@yahoo.com'>nancy.wilson@yahoo.com</a> or by phone: 352-422-4137

    <br /><br />";
	break;
	case 3335:
    	echo "I need Bois.
    <br /><br />";
        break;
}

if (!empty($_GET['agent_id'])) {
   echo "<h2>View My Listings</h2>\n";
   echo "<div align='center' style='font-family: Arial,Helvetica,sans-serif;font-size:12px;'><a href='#Residential' style='color:#000'>Residential</a> | <a href='#Mobile'>Mobile</a> | <a href='#Condo/Villa/Townhome'>Condo/Villa/Townhome</a> | <a href='#Vacant_Land'>Vacant Land</a> | <a href='#Multi_Res'>Multi-Residential</a> | <a href='#Commercial'>Commercial</a> | <a href='#Business_Op'>Business Op</a></div>\n";
   /* Set some variables */
   $agent_id = $_GET['agent_id'];
   //$office_id = '0';
   include '/home/mychurchserver/domains/citrusmls.mychurchserver.com/public_html/listings.php';
}
?>
</td>
  </tr>
</table>
<?php
include('footer.php');
?>