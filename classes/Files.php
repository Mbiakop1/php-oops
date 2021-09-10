<?php
class Files{
    function displayContent($filename){
        $result = true;

        try{
           echo "THIS IS THE CONTENT OF THE FILE:  $filename" . PHP_EOL;
           $content = file_get_contents($filename);

           echo $content .PHP_EOL . "End of content";

        } catch(Exception $e) {
            $result = false;
        }
    }
}

$files1 = new Files();

$files1->displayContent("text.txt")
?>