<?php
//タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');
//UNIXタイムスタンプ（現在時刻）
echo time()."n";
//現在日時をフォーマットする
echo date('Y-m-d H:i:s')."n";
echo date('Y年m月d日 H時i分s秒')."n";
?>
