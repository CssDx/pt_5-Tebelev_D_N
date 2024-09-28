<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width = device-width, initial-scale = 1.0">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/js_file.js"></script>
        <link rel="SHORTCUT ICON" href="movies/805_original.ico" type="image/x-icon">
        <title>
            Тебелев Данил Николаевич
        </title>
        <header>
            <h1>Добро пожаловать, <?php echo $_COOKIE['User']; ?></h1>
	    <p>
		<h2 class="money"> "За деньги - да!" </h2>
            </p>
        </header>
    </head>

    <body class="main">
        <div class="registration">
            
            <div class="row_info">
                <h3> 
                    В настоящий момент я прохожу первый этап PT start. В прошлом был frontend разработчиком 
                    в не крупной компании, использовал js react. Летом успешно прошел два алгоритмических собеседования
                    на backend разработчика, на языке Python, в компанию Яндекс, но к сожалению мне не так и не дали команду с которой 
                    я мог бы пособеседоваться. Учусь на 3м курсе МТУСИ.
                </h3>
            </div>
                  
        </div>
	<div class="show-picture">
            <button class="show" onclick="toggleImage()">Показать/Скрыть картинку</button>
            <img id="invise" src="movies/secret_photo.jpg" alt="invise">
	</div>
	<div class="create-posts">
		
	</div>
    </body>
 	   
</html>

