<!DOCTYPE html>
<html>
<head>
<script src="validation.js"></script>
</head>
<body>

<form name="myForm" action="welcome.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
    
    <input type="text" name="fname" id="fileToUpload">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>