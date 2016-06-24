<?PHP
require_once("./include/membersite_config.php");

if(isset($_POST['submitted']))
{
   if($fgmembersite->Login())
   {
        $fgmembersite->RedirectToURL("login-home.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
	<head>
		<link rel="shortcut icon" type="public_html/images/x-icon" href="images/favicon.ico">
		<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		<title>Inloggen</title>
		<link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
		<script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
	</head>

	<body>
<link rel="stylesheet" href="assets/css/main.css" />
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<div id="wrapper">

				<!-- Header -->
				<header id="header">
						<nav style="padding-right: 2em" class="links">					       
					        <ul>
					         <li class="menu">
					          
					          <a class="fa-caret-down" href="#menu2"></a>
					         </li>
					        </ul>
					      </nav>
					      
						<h1 style="padding-left: 12.7em"><a href="#">Westwork</a></h1>
						
						<nav class="main">
							<ul>
								<li class="search">
									
									
									<form id="search" method="POST" action="#">
										<input type="text" name="search" placeholder="Zoeken..." />
										<input type="submit" name="submit" value="" style="display: none" />
									</form>
										<a class="fa-search" href="#search">Search</a>
								</li>
								<li class="menu">
									
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>
						<!-- Links-->
							<section>
								<ul class="links">
									<li>
										<a href="#">
											<h3>Marco Beun - <span id="kleurbedrijf">Albert Heijn</span> </h3>											
											<p><span id="kleurdatum">12-05-16:</span> Bij deze nodigen we u uit voor...</p>
											<a class="fa-angle-double-right" href="#"></a>
										</a>
											
									</li>
									<li>
										<a href="#">
											<h3>Rick van Boven - <span id="kleurbedrijf">Philips</span></h3>
											<p><span id="kleurdatum">02-06-16:</span> Jammergenoeg is de positie...</p>
											<a class="fa-angle-double-right" href="#"></a>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Jeremiah Elsten - <span id="kleurbedrijf"> EBAP Con.</span> </h3>
											<p><span id="kleurdatum">05-06-16:</span> The position is still available, if...</p>
											<a class="fa-angle-double-right" href="#"></a>
									</li>
									<li>
										<a href="#">
											<h3>Brom Doel - <span id="kleurbedrijf">Hema</span></h3>
											<p><span id="kleurdatum">05-06-16:</span> Wij zien u graag maandag voor uw eerste...</p>
											<a class="fa-angle-double-right" href="#"></a>
										</a>
									</li>
								</ul>
							</section>
							
						<!-- Actions-->
							<section>
								<ul class="actions vertical">
									<li><a href="#" class="button big fit fa-envelope">Berichten inbox bekijken</a></li>
								</ul>
							</section>

					</section>


				<section id="menu2">

						<!-- Search
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>
						<!-- Links
							<section>
								<ul class="links">	
									<li> hi</li>					
								</ul>
							</section>
							
						<!-- Actions--> 
							<section>
								<ul class="actions vertical">
									<li><a href="register.php" class="button big fit fa-user-plus">Registreren</a></li>
									<li><a href="login.php" class="button big fit fa-sign-in">Inloggen</a></li>
								</ul>
							</section>

					</section>
					<section id="menu3">

						<!-- Search
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>
						<!-- Links-->
							<section>
								<ul>
									<li>
										
									</li>
									<li>
										
									</li>
									<li>
										
									</li>
									<li>
										
									</li>
								</ul>
							</section>
							
						<!-- Actions-->
							<section>
								<ul class="actions vertical">
									
								</ul>
							</section>

					</section>
			</div>
			<h1 style="padding-left:47.5em; padding-bottom:1.5em">Inloggen</h1>
	<!-- Form Code Start -->
		
		<div id='fg_membersite'>
			<form id='login' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
			
			<fieldset >
			<legend style="padding-left:2em padding-top:2em"></legend>

			<input type='hidden' name='submitted' id='submitted' value='1'/>

			<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
			<div class='container'>
			<label for='username' >Gebruikersnaam:</label>
			<input type='text' name='username' id='username' value='<?php echo $fgmembersite->SafeDisplay('username') ?>' maxlength="50" /><br/>
			<span id='login_username_errorloc' class='error'></span>
		</div>
<div class='container'>
    <label for='password' >Wachtwoord:</label>
    <input type='password' name='password' id='password' maxlength="50" /><br/>
    <span id='login_password_errorloc' class='error'></span>
</div>

<button style="" type='submit' name='Submit' value='Inloggen'>
    Inloggen
</button>
<div class='short_explanation'><a href='reset-pwd-req.php'>Wachtwoord vergeten?</a></div>
<div class='short_explanation'><a href='register.php'>Registreren</a></div>
</fieldset>
</form>
<!-- client-side Form Validations:
Uses the excellent form validation script from JavaScript-coder.com-->

<script type='text/javascript'>
// <![CDATA[

    var frmvalidator  = new Validator("login");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();

    frmvalidator.addValidation("username","req","Vul alstublieft een gebruikersnaam in");
    
    frmvalidator.addValidation("password","req","Vul alstublieft een wachtwoord in");

// ]]>
</script>
</div>
<!--
Form Code End (see html-form-guide.com for more info.)
-->

</body>
</html>