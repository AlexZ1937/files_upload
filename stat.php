<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="style.css" rel="stylesheet"/>
</head>
<body>
<form method="post" action="stat.php" class="fon">
    <?php

        if(isset($_POST['headerm']))
        {

            if(($_POST['photo1'] || $_POST['photo2'] || $_POST['photo3'] || $_POST['photo4']) && $_POST['headerm'] && $_POST['rubricm'] && $_POST['descm'] && $_POST['capitm'] && $_POST['userm'])
            {

            }
            else
            {
                echo '<h1>Добавтить бесплатное обьявление на OLX</h1>
    <div style="width: 100%;">
        <div> <h4 class="lablTxt">Заголовок</h4><input class="inputTxt" name="headerm" style="width: 400px;" type="text" /></div></br>
        <div><h4 class="lablTxt">Рубрика</h4><input class="inputTxt" name="rubricm" type="text" /></div></br>
        <div><h4 class="lablTxt">Описание</h4><input class="inputTxt" name="descm" style="height: 100px; width: 600px;" type="text" /></div></br>
        <div>
            <div style="width: 120px; height: 50px;"><h4 class="lablTxt">Фотографии</h4></div>
            <div style="width: 100px; margin-left: 20px; height: auto;">
                <input name="photo1" type="file">
                <input name="photo2" type="file">
                <input name="photo3" type="file">
                <input name="photo4" type="file">
            </div></br>

        </div>
    </div>
    <div style="width: 100%;">
        <div><h4 class="lablTxt">Город/село</h4><input class="inputTxt" name="capitm" type="text" /></div></br>
        <div><h4 class="lablTxt">Контакт</h4><input class="inputTxt" name="userm" style="width: 300px;" type="text" /></div>
    </div><br>


    <button class="subm" type="submit">Добавить</button><br><h1>Заполните все поля!</h1>';
            }
        }
        else
        {
            echo '<h1>Добавтить бесплатное обьявление на OLX</h1>
    <div style="width: 100%;">
        <div> <h4 class="lablTxt">Заголовок</h4><input class="inputTxt" name="headerm" style="width: 400px;" type="text" /></div></br>
        <div><h4 class="lablTxt">Рубрика</h4><input class="inputTxt" name="rubricm" type="text" /></div></br>
        <div><h4 class="lablTxt">Описание</h4><input class="inputTxt" name="descm" style="height: 100px; width: 600px;" type="text" /></div></br>
        <div>
            <div style="width: 120px; height: 50px;"><h4 class="lablTxt">Фотографии</h4></div>
            <div style="width: 100px; margin-left: 20px; height: auto;">
                <input name="photo1" type="file">
                <input name="photo2" type="file">
                <input name="photo3" type="file">
                <input name="photo4" type="file">
            </div></br>

        </div>
    </div>
    <div style="width: 100%;">
        <div><h4 class="lablTxt">Город/село</h4><input class="inputTxt" name="capitm" type="text" /></div></br>
        <div><h4 class="lablTxt">Контакт</h4><input class="inputTxt" name="userm" style="width: 300px;" type="text" /></div>
    </div><br>


    <button class="subm" type="submit">Добавить</button>';
        }
    ?>

</form>
</body>
</html>

