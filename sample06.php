<?php
        #取得データを無害化して変数に突っ込む動きをさせてる
# $変数名 = 保存内容
 $name = htmlspecialchars($_REQUEST['my_name00'],ENT_QUOTES);
?>
<p> ようこそ<?php print($name);?>さん</p>
<ul>
    <!--これぞ動的なHTMLでしょやりやすい-->
    <!--上で無害化した変数を使ってる-->
    <li><a href="#"><?php print($name)?>さんのマイページを見る</a></li>
</ul>