<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CV Uploader</title>
</head>
<body>
<!--Uploads CV into database -->
<form action="cvuploader1.php" id='f' method="post" enctype="multipart/form-data">
<input type="file" name="file" />
<button type="submit" name="btn-upload" onclick="close_win();">upload</button>

</form>
<script type='text/javascript'>
function close_win()
{
	f.submit();
window.close();
}
</script>
</body>
</html>