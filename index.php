<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badword</title>
</head>
<body>
    <?php 

        $text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi commodi reprehenderit eligendi a, velit beatae id! Corporis praesentium aspernatur quisquam qui dolor temporibus dicta eum? Ipsam officiis exercitationem corrupti magni.';

        $badword = $_GET['badword'];

        $text2 = str_replace($badword, '***', $text);
    ?>

    <h1>Il paragrafo ha: <?php echo strlen($text);?> caratteri</h1>
    <p><?php echo $text;?></p>

    <h1>Il paragrafo ha: <?php echo strlen($text2);?> caratteri</h1>
    <p><?php echo $text2;?></p>
</body>
</html>