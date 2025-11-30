<?php
$uploaddir = '';
if (move_uploaded_file($_FILES['inputfile']['tmp_name'], $uploaddir . 
	$_FILES['inputfile']['name'])) {
    print "File is valid, and was successfully uploaded.";
	unlink($uploaddir.$_FILES['inputfile']['name']);
} else {
    print "There some errors!";
}
?>