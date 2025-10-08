<?php
include 'content.php';
include 'partials/top.php';
include 'partials/header.php';
?>

<p class="text-center">
	<?php echo DESC?>
</p>

<main class="my-4">
<?php

$jrnl_list_json = shell_exec("jrnl --list --format=json < /dev/null");

if ($jrnl_list_json === null) {
	echo '<p class="text-center">No existing journals found</p>';

	include 'partials/forms/createjrnl.php';

} else {
	$jrnl_list_json = $json_decode($jrnl_list_json);
	foreach ($jrnl_list_json['journals'] as $journal) {
		echo $journal;
	}
}
?>
</main>


<?php
include 'partials/bottom.php'
?>
