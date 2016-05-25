<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Employer Picture Upload</title>
</head>
<body>
<form action="imguploader2.php" id='f' method="post" enctype="multipart/form-data">
<input type="file" name="file" id="false" />
<button type="submit" name="btn-upload" onclick="">upload</button>
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
