<?php
print('お名前:' .htmlspecialchars($_REQUEST['my_name'],ENT_QUOTES));
#ENT_QUOTESを使うと''と""も変換してくれるよって意味
#$_REQUESTは結構危険でURLを書き換えるとデータが書き換えれれちゃうから要注意
#htmlspecialcharsこれはHTML上重要な<>とかを文字情報として取得できるためのメソッド
#それをwebサーバが読み込んで動いちゃうからそれを防止する
#それがhtmlspecialchars<>を文字列として読んでくれる
?>