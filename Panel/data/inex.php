<?
error_reporting(0);
$STATU = stat('update.exe');

echo ''.date('d.m.Y H:i:s', $STATU['mtime']).'';
?>