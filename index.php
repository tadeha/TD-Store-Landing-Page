<?php
	if (isset($_POST["submit"])) {
		$email = $_POST['email'];
		$from = 'Get in touch'; 
		$to = 'your@email.com'; 
		$subject = 'New Email Added! ';
		
		$body = "From: E-Mail: $email\n";
 
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
	
		

 
// If there are no errors, send the email
if (!$errEmail) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">با تشکر، به زودی با شما در ارتباط خواهیم بود</div>';
	} else {
		$result='<div class="alert alert-danger">لطفا مجددا سعی کنید.</div>';
	}
}
	}
?>


<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="کمپین "کمپین سالت رو نو کن!" به مناسبت سال نو میلادی از تخفیف +10 درصدی بهره ببرید.">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>سالت رو نو کن!</title>
    <link rel="shortcut icon" href="favicon.png">
   
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
 	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
     	<div id="snow">	
	 <div class="container">

   		
   			<div class="row">
  <div class="col-xs-12 col-sm-4"><img class="shdimg" width="50%" alt="tshirt-shadow" src="img/tshirt-shadow.png" /></div>
  <div class="col-xs-12 col-sm-4"><img class="chimg" alt="happy-new-year!" src="img/chimg.png" /></div>
  <!-- Optional: clear the XS cols if their content doesn't match in height -->
  <div class="clearfix visible-xs-block"></div>
  <div class="col-xs-12 col-sm-4"><img class="shdimg" width="50%" alt="watch-shadow" src="img/watch-shadow.png" /></div>
</div>
   		<h2>با وارد کردن ایمیل خود، هم از شروع کار ما با خبر شوید و هم از تخفیف 10% ای + کوپون تخفیف در اولین خرید به مناسبت سال نو میلادی بهره مند شوید.</h2><br>
   		 						
<form id="contact-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="contact-form form">
                    <div class="controls">
                      <div class="row">
                      <div class="form-group">
                        <label for="email" value="<?php echo $email; ?>"></label>
                        <input type="email" name="email" id="email" required="required" class="form-control" dir="ltr" placeholder="ایمیل خود را وارد کنید">
                      </div>
                      <div>
                        <input id="submit" name="submit" type="submit" value="ثبت" class="btn btn-ghost">
                      </div>
                    </div>
  		    <div class="form-group">
			<?php echo $result; ?>	
			</div>
                  </form>
   		 <p id="sub">ما به محض شروع دریافت سفارش، شما را از طریق ایمیل آگاه خواهیم کرد. </p>
   		 <h6>زمان احتمالی شروع : هفته اول بهمن ماه </h6>
   	
   	<br><br>
	<br><p>اگر سوالی داشتید با ایمیل زیر در تماس باشید : </p>
    <p>salam [at] tadeh [dot] xyz</p>
    
    
    <a id="back" href="index.html">بازگشت به سایت <span class="glyphicon glyphicon-chevron-left"></span></a>

    </div>
    </div>
    <br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- PersianStat -->
<!-- URL: http://land.tadeh.xyz -->
<script language='javascript' type='text/javascript' src='http://www.persianstat.com/service/stat.js'></script>
<script language='javascript' type='text/javascript'>
persianstat(10296789, 0);
</script>
<!-- /PersianStat -->

  </body>
</html>