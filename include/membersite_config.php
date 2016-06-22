<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('westwork.comxa.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('v.a.andel@students.uu.nl');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time

$fgmembersite->InitDB(/*hostname*/'mysql9.000webhost.com',
                      /*username*/'a5841651_test',
                      /*password*/'test123',
                      /*database name*/'a5841651_test',
                      /*table name*/'fgusers3');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>