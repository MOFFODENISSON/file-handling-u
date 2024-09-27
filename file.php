<?php
$filename = "sample.txt";
if (file_exists($filename)) {

    $fileContents = file_get_contents($filename);
    echo "<h1>Contents of the File:</h1>";
    echo "<pre>" . htmlspecialchars($fileContents) . "</pre>"; 
} else {
    echo "File not found.";
}
?>