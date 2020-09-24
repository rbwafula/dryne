<?php
/*
Name: 			Newsletter Subscribe
Written by: 	Okler Themes - (http://www.okler.net)
Theme Version:	2.1.0
*/

include('./mailchimp/mailchimp.php'); 

use \DrewM\MailChimp\MailChimp;

// Step 1 - Set the apiKey - How get your Mailchimp API KEY - http://kb.mailchimp.com/article/where-can-i-find-my-api-key
$apiKey 	= '2c297300a1075b354791225b6a89b040-us2';

// Step 2 - Set the listId - How to get your Mailchimp LIST ID - http://kb.mailchimp.com/article/how-can-i-find-my-list-id
$listId 	= '94286f7459';

if (isset($_POST['email'])) {
	$email = $_POST['email'];
} else if (isset($_GET['email'])) {
	$email = $_GET['email'];
} else {
	$email = '';
}

$MailChimp = new MailChimp($apiKey);

$result = $MailChimp->post('lists/' . $listId . '/members', array(
	'email_address' => $email,
	'merge_fields'  => array('FNAME'=>'', 'LNAME'=>''), // Step 3 (Optional) - Vars - More Information - http://kb.mailchimp.com/merge-tags/using/getting-started-with-merge-tags
	'status' 		=> 'subscribed'
));

if ( isset($result['id']) != '') {
	$arrResult = array('response'=>'success');	
} else {
	$arrResult = array('response'=>'error','message'=>$result['detail']);
}

echo json_encode($arrResult);