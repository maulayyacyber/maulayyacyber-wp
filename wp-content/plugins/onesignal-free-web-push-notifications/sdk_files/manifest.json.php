<?php
	header("Content-Type: application/json");
	header("X-Robots-Tag: none");
	$gcm_sender_id = preg_replace('/[^0-9]/', '', $_GET["gcm_sender_id"]);
?>
{
  "start_url": "/",
  "gcm_sender_id": "<?php echo $gcm_sender_id; ?>",
  "gcm_user_visible_only": true
}