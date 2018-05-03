<?php
date_default_timezone_set("Asia/Taipei");
//    opendir("c:/");
      $fp=@opendir("test1");
//        $fp=@opendir("c:/MAMP2/htdocs/test1");
//      $fp=@opendir("."); //上一層
//    $fp=@opendir("test1");
//    $s1=readdir($fp);
//    echo $s1,'<br>';
//    $s1=readdir($fp);
//    echo $s1,'<br>';
//    $s1=readdir($fp);
//    echo $s1,'<br>';
//    $s1=readdir($fp);
//    echo $s1,'<br>';
    while($file=readdir($fp)){
        if(is_dir("test1/{$file}")){
            echo '[dir]';
        } else if (is_file("test1/{$file}")) {
            echo '[file]';
        }
        echo $file,filesize("test1/{$file}") ,' bytes';
        echo '    ',date("Y-m-d H:i:s", filemtime("test1/{$file}") );
        echo '<br>';
    }
    closedir($fp);
    if(file_exists("test1/brad1.txt")==false) {
        echo '檔案不存在';
    } else {
        unlink(("test1/brad1.txt"));
    };
    mkdir("test2");
