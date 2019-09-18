<?php
    define('MYSQL_SERVER', 'localhost');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DB', 'future');

    function db_connect(){
        $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or die("Error: ".mysqli_error($link));
        
        if(!mysqli_set_charset($link, "utf8")){
            printf("Error: ".mysqli_error($link));
        }
        
        return $link;
    }

    $link = db_connect();

    //Добавление комментарий в БД
    function new_comment($link, $name, $comment){
        $name = trim($name);
        $comment = trim($comment);

        $comment_time =  time();
        // $comment_date =  date('Y.m.d');
        //Запрос
        $t = "INSERT INTO `comment` (`name`, `comment_time`, `comment`) VALUES('%s', '%s', '%s')";
        $query = sprintf($t,
            mysqli_real_escape_string($link, $name),
            mysqli_real_escape_string($link, $comment_time),
            mysqli_real_escape_string($link, $comment));

        $qresult = mysqli_query($link, $query);

        if(!$qresult)
            die(mysqli_error($link));

        return true;
    }

    //Вывод всеx комментарий
    function all_comment($link){
        //
        $query = "SELECT id, name, comment_time, comment FROM `comment` ORDER BY id DESC";
        $result = mysqli_query($link, $query);

        if(!$result)
            die(mysqli_error($link));

        // Извлечение из БД
        $n = mysqli_num_rows($result);
        $all_comment = array();
        
        for ($i = 0; $i < $n; $i++){
            $row = mysqli_fetch_assoc($result);
            $all_comment[] =$row;
        }
        
        return $all_comment;
    }
?>