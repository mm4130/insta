## Usage
```
<?php
if (!file_exists('function.php')) {
    copy('https://raw.githubusercontent.com/mm4130/insta/master/function.php', 'function.php');
}
require('/function.php');
$instaurl = $_GET['url'];
$fileget = furl($instaurl);
$match = match('/window\._sharedData = (.*?);<\/script>/m',$fileget);
$js = jsde($match);
echo jsen($js);
```
