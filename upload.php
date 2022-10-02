<?php
session_start();
if (!isset($_SESSION['userData'])) {
	header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>FormData - AJAX File Upload</title>
</head>

<body>
	<label> Please upload here: </label>
	<!-- For Single File: -->
	<input type="file" name="image" id="imageButton" />
	<!-- For Multiple Files: -->
	<!-- <input type="file" name="image[]" accept="image/*" id="imageButton" multiple/> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		$('#imageButton').change(function() {
			// Making the image file object
			var file = $('#imageButton').prop("files")[0];
			// For Multiple Files:
			// var file = $('#imageButton').prop("files");
			// Making the form object
			var form = new FormData();
			// Adding the image to the form
			form.append("image", file);
			// form.append("image[]", file) // for multiple files
			// The AJAX call
			$.ajax({
				url: "uploadscript.php",
				type: "POST",
				data: form,
				contentType: false,
				processData: false,
				success: function(result) {
					// document.write(result);
					window.location.href = 'filelist.php'
				}
			});
		});
	</script>
</body>

</html>
