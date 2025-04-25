<?php

// $_GET
// $_POST
// $_SERVER
// $_FILES

//file_exist()
//rename()
//copy()
//unlink()
// is_dir / is_file
// file_get_contents
 

// if (!empty($_FILES)) {
//     move_uploaded_file($_FILES['file']['tmp_name'],'uploads/'.$_FILES['file']['name']);
// }

// if (file_exists('uploads/photo_2025-01-15_14-34-35.jpg')) {
//     rename('uploads/photo_2025-01-15_14-34-35.jpg', 'uploads/photo_2025-01-15_14-34-35_2.jpg');
// } else {
//     echo "No file";
// }

// mkdir('folder');
// mkdir('folder2/img', 0777, true);

// copy('uploads/photo_2025-01-15_14-34-35_2.jpg', 'folder2/img/photo_2025-01-15_14-34-35_2.jpg');

$text = file_get_contents('src/content/text.txt', FALSE, NULL, 5, 10);
echo "<br>". ($text);

$text = file('src/content/text.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES );
var_dump($text);

// $text = file('https://www.php.net/manual/ru/function.move-uploaded-file.php');
// foreach ($text as $num => $value) {
//     echo "<br>" . $num . ":" . htmlspecialchars($value)."<br>";
//     print_r(htmlspecialchars($value));
// }

// $file = 'src/content/text.txt';
// $var = "Hello\n";

// $bytes = file_put_contents($file, $var, FILE_APPEND | LOCK_EX);

// echo $bytes;

$file = 'src/content/text.txt';
$handle = fopen($file, 'a+');

$text = fread($handle, filesize($file));
fwrite($handle, 'GDRGDGDF');
fclose($handle);

echo $text;
?>

<form method="POST" action="" enctype="multipart/form-data">
   <p> <input type="text" name="text"></p>
    <p><input type="file" name="file"></p>
    <button>submit</button>
</form>