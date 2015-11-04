<!DOCTYPE html>
<html>
<head>
    <meta charset ="utf-8">
    <title>My task</title>
</head>
<body>
      <form >
          Enter data <input type="text" name="user_data"/> <br>
            <input type="submit">
        </form>
        <?php
            $data = $_GET['user_data']; // вытягиваем введенные данные
            //echo $data;
            $file = "text.txt";
            $current = file_get_contents($file); // открываем файл, присваеваем содержимое current
            // echo $current; // выводим содержимое
            // echo "<br>";
            $current .= $data; // добавляем в конец новые данные 
            file_put_contents($file, $current); // записываем изменения 
            //echo $current; // выводим новое содержимое файла 
        ?>
</body>
</html>
