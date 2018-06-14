<!DOCTYPE html>
<html lang="en">
<head>
	<meta content="Newsletter" name="title">
	<style>
	.align_right {
		float:right;
		padding: 5px 0 5px 5px;
	}
	.align_left {
		float:left;
		padding: 5px 5px 5px 0; 
	}
	</style>
</head>

<body style="background-color: #4AACD5; margin: 0; padding: 0;">
	<table cellpadding="0" cellspacing="0" border="0" width="728" style="margin: 0 auto; font-family: Arial, sans-serif; font-size: 14px;line-height:22.4px">
		<tr>
			<td colspan="4" style="text-align: center;background-color:#462502;">
				
					<span style="color:rgb(255,255,255);font-family:Arial,sans-serif;font-size:12px;text-align:center">Trouble viewing this email? Click&nbsp;</span>
					<a href="http://www.cypresscoveresort.com/newsletter-folder/current-newsletter" style="font-family:Arial,sans-serif;font-size:12px;color:white;" target="_blank">here</a>
					<span style="color:rgb(255,255,255);font-family:Arial,sans-serif;font-size:12px;">&nbsp;to view online.</span>
				
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<img style="display: block;" src="http://www.cypresscoveresort.com/site/templates/images/newsletter/topBanner_2017.jpg" alt="Cypress Cove - as nature intended..." />
			</td>
		</tr>
		<tr>
			<td valign="top" width="64" rowspan="4">
				<img src="http://www.cypresscoveresort.com/site/templates/images/newsletter/leftLeaves.jpg" alt="" />
			</td>
			<td valign="top" style="background-color: #FFFCF7; padding: 20px;" width="350">
				<h1 style="font-size:22px;">Cypress Knee Online Newsletter</h1>
				<h2 style="font-size:16px;text-align:center;color:#458b55"><?= $page->headline ?></h2>
				<!-- <img src="http://www.cypresscoveresort.com/Calendar/Dec2014/Glow.jpg" alt="Glow In The Dark Party" width="360" height="480" border="1"> -->
				<img src="<?= $page->newsletter_top_banner->getCrop("thumbnail")->url; ?>" alt="<?= $page->newsletter_top_banner->description3; ?>" /> 
			</td>
			<td valign="top" style="background-color: #FFFCF7; padding: 20px 20px 20px 0;" align="center">
			<p style="align:right;margin-top:20px;margin-bottom:59px"><?= $page->event_date ?></p>
			<img align="top" alt="coming soon" height="104" src="http://www.cypresscoveresort.com/site/templates/images/newsletter/coming-soon.jpg" width="138">
				<?= $page->newsletter_coming_soon ?>
				<p><a href="https://irm.cypresscoveresort.net/irmnet/Res/ResMain.aspx" target="_blank"><img alt="Book Now" height="40" src="http://www.cypresscoveresort.com/site/templates/images/newsletter/book-now_btn.jpg" width="169"></a></p>
			</td>

			<td valign="top" width="64" rowspan="4">
				<img src="http://www.cypresscoveresort.com/site/templates/images/newsletter/rightLeaves.jpg" alt="" />
			</td>
			
		</tr>
		<tr>
			<td valign="top" style="background-color: #EEF1D8; padding: 20px;" colspan="2" align="center" width="200">
				<?= $page->body ?>
			</td>
		</tr>
		<tr>
			<td valign="top" style="background-color: #FFFCF7; padding: 20px;" colspan="2" width="200">
				<?= $page->body_continued ?>
			</td>
		</tr>
		<tr>
			<td valign="top" style="background-color: #FFFCF7; padding: 20px;font-size:12px;" colspan="2" align="center">
				
				<a href="http://www.cypresscoveresort.com/about/" target="_blank">About Us</a> | <a href="http://www.cypresscoveresort.com/accommodations/" target="_blank">Accommodations</a> | <a href="http://www.cypresscoveresort.com/amenities/" target="_blank">Amenities</a> | <a href="http://www.cypresscoveresort.com/activities/" target="_blank">Activities</a> | <a href="http://www.cypresscoveresort.com/first-time/faqs/" target="_blank">FAQ's</a> | <a href="http://www.cypresscoveresort.com/about/membership/" target="_blank">Membership</a> | <a href="http://www.cypresscoveresort.com/Forms/brochure_form.php" target="_blank">Brochure Request</a>
				<br/>
                
                <a href="http://www.cypresscoveresort.com/first-time/special-offers/" target="_blank">Special Offers</a> | <a href="http://www.cypresscoveresort.com/fullscreen-gallery/" target="_blank">Photo Gallery</a> | <a href="http://www.cypresscoveresort.com/contact-us/" target="_blank">Contact Us</a> | <a href="http://www.cypresscoveresort.com/first-time/map/" target="_blank">Map</a> | <a href="http://www.cypresscoveresort.com/about/partners/" target="_blank">Partners</a> | <a href="http://www.cypresscoveresort.com/about/newsletter/" target="_blank">Newsletter</a> | <a href="https://irm.cypresscoveresort.net/irmnet/Res/ResMain.aspx" target="_blank">Reservations</a> | <a href="http://www.cypresscoveresort.com/" target="_blank">Home</a>
			</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan="2">
				<img src="http://www.cypresscoveresort.com/site/templates/images/newsletter/footerImage.jpg" alt="" />
			</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td colspan="4" style="color: #fff; text-align: center; padding: 10px 20px; font-size: 12px;">
				<p>Questions, comments or submissions? E-mail us at <a href="mailto:newsletter@CypressCoveResort.com">newsletter@CypressCoveResort.com</a> or call 888-683-3140</p>
			</td>
		</tr>
	</table>
	

</body>

</html>