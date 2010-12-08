<?php  
	header("HTTP/1.1 503 Service Temporarily Unavailable");  
	header("Status: 503 Service Temporarily Unavailable");  
	header("Retry-After: 3600");  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
		"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>Site down for maintenance</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="/assets/css/maintenance.css" rel="stylesheet" type="text/css" media="screen" />
	<link rel="icon" href="/assets/img/maintenance.ico" type="image/x-icon" />
	<meta name="copyright" content="Copyright 2010 Match Strike. All Rights Reserved." />
</head>
<body>
	<h1>We'll be back soon.</h1>
	<p>We're currently undergoing routine maintenance.</p>
	<p>Please check back in just a bit.</p>
	<p class="contact"><a href="mailto:info@matchstrike.net">info@matchstrike.net</a></p>
</body>
</html>

