<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Upload and view With PHP and MySql</title>
</head>
<body>
<form action="imguploader1.php" method="post" id='f' enctype="multipart/form-data">
<input type="file" name="file" />
<button type="submit" name="btn-upload" onclick="close_win();">upload</button>
</form>
<script type='text/javascript'>
function close_win()
{
window.close();
}
</script>
</body>

</html>