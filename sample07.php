<select name="age" id="age">
    <?php
    for($i = 10; $i<=70; $i++){
        print('<option value=".$i.">'. $i .'歳</option>');
    }
    ?>
</select>
<!--実際にフォームないで繰り返し処理させたい時ってどうすんの？-->
<form action="" method="get">
    <dl>
        <dt>日にち</dt>
        <dd>
            <?php print(date('n'));?>月
            <select name="day" id="day">
                <?php #dateファンクションのtに関してはその月の末日を取得できる
                    for ($day =1; $day<=date('t');$day++){
                        print('<option value="'.$day.'">'.$day.'日</option>');
                    }
                    ?>
            </select>
        </dd>
    </dl>
    <input type="submit" value="送信する"/>
    <select name="pref" id="pref">
        <?php
            $prefs = array('北海道','青森','岩手','宮城','秋田','山形','福島','茨木','栃木','GUNNMA');
            foreach($prefs as $pref){
                print('<option value="'.$pref.'">'.$pref.'</option>');
            }
        ?>
    </select>
    <form action="" method="get">
        <dl>
            <dt>商品</dt>
            <dd>
                <?php
                    $items = array('a-1'=>'ガム', 'b-1'=>'チョコレート','c-3'=>'クッキー');
                    print($items['a-1']);
                    foreach($items as $itemKey => $itemValue) {
                        print('<input type="checkbox" id=" .$itemKey." value=".itemValue."/><label for="'.$itemKey.'">'.$itemValue.'</label>');
                        #printの中に2種類入ってて チェックボックス自体の表示と
                        #チェックボックス横のlabelの表示
                    }
                ?>
            </dd>
        </dl>
        <input type="submit" value="送信する">
    </form>
</form>