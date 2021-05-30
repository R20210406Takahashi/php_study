<!--/*http://localhost/study01/chap03/lesson1.php*/-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lesson1.css">
    <title>PHP入門</title>
</head>
<head class="header">Lesson1</head>
<body>
    <?php print('<h2 style="font-size: 110%; font-weight:bold;">画面にHTMLを表示する</h2>');
    print('<p>PHPはHTMLの中に埋め込んで記述できます</p>');
    print('<p>改行は、<br />brタグを記述します</p>');
    ?>
    <?php 
        date_default_timezone_set('Asia/Tokyo');
        #.~.までがメソッドだよって教えてる
        print('現在は' .date('G時 i分 s秒').'です');
        
    ?>
</body>
</html>