<?php
    
    $fn = $_POST["fn"];
    $bucket = $_POST["buc"]; //You have to get the form data
    $key               = $_POST["ky"];
    $module = $_POST["mod"];
    $en     = $_POST["en"];
    $dbname     = $_POST["db"];
    $db_name = "db_name               = \"$dbname\"";
    $rds     = $_POST["rds"];
    $rds_eng = "rds_engine_version    = \"$rds\"";
    $db_user = "db_user               = "."\"$"."{var.db_user}\"";
    $db_password = "db_password           = "."\"$"."{var.db_password}\"";
    $rds_storage    = $_POST["rds_storage"];
    $rds_storag = "rds_allocated_storage = \"$rds_storage\"";
    $infra    =  "infra_sg_name         = ".$_POST["infra"];
    $multi   = $_POST["multi"];
    $mult = "multi_az              = \"$multi\"";
    $env               = "env                   = \"$en\"";
    $vpc_id            = "vpc_id                = ".$_POST["vpc"];
    $source            = "source                = ";
    $keyy = "    key    = \"$key\"";
    $a = "provider \"aws\"  {}";
    $b = "terraform {";
    $c = "  backend \"s3\" {";
    $d = "    bucket = ";
    $f = "  }";
    $g = "}";
    $h = "module \"$module\"";
    $i = " {";
    $sourcepath = "../../../modules/$module";
    $so = "\"$sourcepath\"";
    $subnet_id = implode(", ", $_POST['checks']);
    $si = "subnet_ids            = [$subnet_id]";
    
    
    chdir('/Applications/XAMPP/xamppfiles/htdocs/php/terraform/env/');
    mkdir($en, 0777);
    // chdir('/Applications/XAMPP/xamppfiles/htdocs/php/terraform/env/{$en}/');
    //mkdir($fn, 0777);
    $file = fopen('/Applications/XAMPP/xamppfiles/htdocs/php/terraform/env/main.tf', 'a+'); //Open your .txt file
    ftruncate($file, 0); //Clear the file to 0bit
    $content = $bucket. PHP_EOL ;
    $content1 = $keyy. PHP_EOL ;
    $content3 = $module. PHP_EOL;
    $content4 = $env. PHP_EOL;
    $content5 = $db_name. PHP_EOL;
    $content6 = $rds_eng. PHP_EOL;
    $content7 = $db_user. PHP_EOL;
    $content8 = $db_password. PHP_EOL;
    $content9 = $vpc_id. PHP_EOL;
    $content10 = $si. PHP_EOL;
    $content16 = $rds_storag. PHP_EOL;
    $content17 = $infra. PHP_EOL;
    $content18 = $mult. PHP_EOL;
    
    
    fwrite($file,$a."\n"."\n".$b."\n".$c."\n".$d.$bucket."\n".$content1.$f."\n".$g."\n"."\n".$h.$i."\n".$content4.$content5.$content6.$source.$so."\n".$content7.$content8.$content9.$content10.$content16.$content17.$content18);
    fclose($file ); //Finally close our .txt}
    
    die(header("Location: ".$_SERVER["HTTP_REFERER"]));
    ?>
