<?php
require __DIR__ ."/vendor/autoload.php";

$output = __DIR__ . "/public";

function rrmdir($dir) {
  if(is_dir($dir)) {
    $objects = scandir($dir);
    foreach ($objects as $object) {
      if($object != "." && $object != "..") {
        if(filetype($dir."/".$object) == "dir") rrmdir($dir."/".$object); else unlink($dir."/".$object);
      }
    }
    reset($objects);
    rmdir($dir);
  }
}
rrmdir($output);
mkdir($output);

$parser = new cebe\markdown\GithubMarkdown;
$parser->html5 = $parser->keepListStartNumber = $parser->enableNewlines = true;
$files = Nette\Utils\Finder::findFiles("*.md")
  ->exclude("README.md")
  ->from(__DIR__)
  ->exclude("vendor", ".git");
/** @var SplFileInfo $file */
foreach($files as $file) {
  $path = dirname($file->getRealPath());
  $path = str_replace(__DIR__, "", $path);
  $html = $parser->parse(file_get_contents($file->getRealPath()));
  @mkdir("$output$path", 0777, true);
  file_put_contents("$output$path/{$file->getBasename(".md")}.html", $html);
  echo "$path/{$file->getBasename()}\n";
}
?>