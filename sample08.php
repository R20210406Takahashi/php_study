<?php
    $name = htmlspecialchars($_REQUEST['my_name0'],ENT_QUOTES);
    # ['my_name']の謎がわからない
    if(empty($_REQUEST['my_name01'])){
        print('名前を入力してください<br/>');
    }else
    {
        print('<p>WELCOM '.$name.'さん</p>');
    }
?>

<?php
    foreach($_REQUEST['reserve'] as $reserve){
        print(htmlspecialchars($reserve, ENT_QUOTES).'<br/>');
    }
?>
<?php
    $age= mb_convert_kana($_REQUEST['age'],'n','UTFI-8');
        #is_numeric(変数)は変数が数字かどうか判断してくれる
    if(is_numeric($age)){
        print($age.'齢');
    }else{
        print('年齢は数字でよろし');
    }

?>