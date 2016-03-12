<!DOCTYPE html>
<html>
<body>

<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 3/10/16
 * Time: 16:45
 */
    $log_path = 'svn_log.xml';
    $list_path = 'list_log.xml';
    require_once 'ParsingManager.php';
    ParsingManager.parsing($list_path, $log_path);

?>

</body>
</html>
