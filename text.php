<?php
echo readfile("New Text Document.txt");
$fileHandle = fopen("New Text Document.txt", "w");
if ($fileHandle) {
    $content = "Hello, this is a sample text.\nWriting to a text file using PHP bother.";
    fwrite($fileHandle, $content);
    fclose($fileHandle);
    echo "File written successfully.";
} else {
    echo "Failed to open the file.";
}
$content = "Hello, this is a sample text.\nWriting to a text file using PHP bother.";
$file =unlink("$content");

?>