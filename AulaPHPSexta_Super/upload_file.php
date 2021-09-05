<?php
if (is_dir(__DIR__ . '\upload') == false) {
    mkdir(__DIR__ . '\upload', 0777, true);
}
if ((
        ($_FILES["file"]["type"] == "image/gif") ||
        ($_FILES["file"]["type"] == "image/jpeg") ||
        ($_FILES["file"]["type"] == "image/jpg") ||
        ($_FILES["file"]["type"] == "image/png")
        ) && ($_FILES["file"]["size"] < 2000000)) {
    if ($_FILES["file"]["error"] > 0) {
        echo "Código de retorno: " . $_FILES["file"]["error"] . "<br />";
    } else {
        if (file_exists("upload/" . $_FILES["file"]["name"])) {
            echo $_FILES["file"]["name"] . " já existe.";
        } else {
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
            echo "Guardado em: upload/" . $_FILES["file"]["name"];
        }
    }
} else {
    echo "Arquivo inválido";
}
?>
<img src="upload/<?php echo $_FILES["file"]["name"]; ?>">

