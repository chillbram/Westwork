<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

if(isset($_POST['submitted']))
{
   if($fgmembersite->ChangePassword())
   {
        $fgmembersite->RedirectToURL("changed-pwd.html");
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
	<head>
		  <link rel="shortcut icon" type="public_html/images/x-icon" href="images/favicon.ico">
		  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
		  <title>Wachtwoord wijzigen</title>
		  <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css" />
		  <script type='text/javascript' src='scripts/gen_validatorv31.js'></script>
		  <link rel="STYLESHEET" type="text/css" href="style/pwdwidget.css" />
		  <script src="scripts/pwdwidget.js" type="text/javascript"></script>       
	</head>
	
	<body>
	
	<link rel="stylesheet" href="assets/css/main.css" />
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

				<!-- Wrapper -->
				<div id="wrapper">

					<!-- Header -->
						<header id="header">
							<nav class="links">					       
								<ul>
								 <li class="menu">
								  <a class="fa-user" href="#"><?= $fgmembersite->UserFullName(); ?></a>
								  <a class="fa-caret-down" href="#menu2"></a>
								 </li>
								</ul>
							  </nav>
							  
							<h1><a href="#">Westwork</a></h1>
							
							<nav class="main">
								<ul>
									<li class="search">
										<a class="fa-search" href="#search">Search</a>
										<form id="search" method="POST" action="#">
											<input type="text" name="search" />
											<input type="submit" name="submit" value="" style="display: none;"/>
										</form>
									</li>
									<li class="menu">
										<a class="fa-envelope" href="#menu">Menu</a>
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

								<section>
									<ul class="actions vertical">
										<li><a href="#" class="button big fit fa-file">CV</a></li>
										<li><a href="#" class="button big fit fa-user-plus">Account upgraden</a></li>
										<li><a href="#" class="button big fit fa-user">Profiel</a></li>
										<li><a href="#" class="button big fit fa-pencil-square-o ">Vacature beheer</a></li>
										<li><a href="#" class="button big fit fa-cog">Instellingen</a></li>
										<li><a href="change-pwd.php" class="button big fit fa-lock">Wachtwoord wijzigen</a></li>
										<li><a href="logout.php" class="button big fit fa-sign-out">Uitloggen</a></li>
									</ul>
								</section>

						</section>

				</div>

				<h1 style="padding-left:42.75em; padding-bottom:2.5em">Wachtwoord wijzigen</h1>
		
				<!-- Form Code Start -->
				<div id='fg_membersite'>
					<form id='changepwd' action='<?php echo $fgmembersite->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
					<fieldset>
					
					<legend style="padding-left:2em padding-top:2em"></legend>

					<input type='hidden' name='submitted' id='submitted' value='1'/>

					<div><span class='error'><?php echo $fgmembersite->GetErrorMessage(); ?></span></div>
					<div class='container'>
						<label for='oldpwd' >Oud wachtwoord:</label>
						<div class='pwdwidgetdiv' id='oldpwddiv' ></div><br/>
						<noscript>
						<input type='password' name='oldpwd' id='oldpwd' maxlength="50" />
						</noscript>    
						<span id='changepwd_oldpwd_errorloc' class='error'></span>
					</div>

					<div class='container'>
						<label for='newpwd' >Nieuw wachtwoord:</label>
						<div class='pwdwidgetdiv' id='newpwddiv' ></div>
						<noscript>
						<input type='password' name='newpwd' id='newpwd' maxlength="50" /><br/>
						</noscript>
						<span id='changepwd_newpwd_errorloc' class='error'></span>
					</div>

					<br/>
					
					<button style="" type='submit' name='Submit' value='Wachtwoord wijzigen'>
						Wachtwoord wijzigen
					</button>

					</fieldset>
					</form>
					<!-- client-side Form Validations:
					Uses the excellent form validation script from JavaScript-coder.com-->

					<script type='text/javascript'>
					// <![CDATA[
						var pwdwidget = new PasswordWidget('oldpwddiv','oldpwd');
						pwdwidget.enableGenerate = false;
						pwdwidget.enableShowStrength=false;
						pwdwidget.enableShowStrengthStr =false;
						pwdwidget.MakePWDWidget();
						
						var pwdwidget = new PasswordWidget('newpwddiv','newpwd');
						pwdwidget.MakePWDWidget();
						
						
						var frmvalidator  = new Validator("changepwd");
						frmvalidator.EnableOnPageErrorDisplay();
						frmvalidator.EnableMsgsTogether();

						frmvalidator.addValidation("oldpwd","req","Vul alstublieft uw oude wachtwoord in");
						
						frmvalidator.addValidation("newpwd","req","Vul alstublieft een nieuw wachtwoord in");

					// ]]>
					</script>

				</div>
				<!-- Form Code End (see html-form-guide.com for more info.) -->
			
	</body>				
	
</html>