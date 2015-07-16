<?php
$save_date = date("Ymd/His");
$config['upload_path'] = $_SERVER['DOCUMENT_ROOT']."/"."uploads/images/".$save_date."/";
$config['img_path'] = "http://".$_SERVER['SERVER_NAME'].'/uploads/images'.$save_date."/";

print_r($config);

?>
