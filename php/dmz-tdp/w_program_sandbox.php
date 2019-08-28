<?php
    
    error_reporting(E_ERROR | E_PARSE);
    $albErr = $alburlErr = "";
    $alb = $alburl = "";
    
   
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["alb"])) {
            $albErr = "req";
        } else {
            $alb = test_input($_POST["alb"]);
            $ab = "alb_name           = \"$alb\"";
        }
        
        if (empty($_POST["alburl"])) {
            $alburlErr = "req";
        } else {
            $alburl = test_input($_POST["alburl"]);
             $abu = "alb_probe_url      = \"$alburl\"";
        }
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $fn = $_POST["fn"];
    $bucket = $_POST["buc"]; //You have to get the form data
    $key               = $_POST["ky"];
    $module = $_POST["mod"];
    $en     = $_POST["en"];
    $env              = "env                = \"$en\"";
    $infra_sg          = "infra_sg           = ".$_POST["infra"];
    $ec2_ins_nam       = "ec2_instance_name  = ".$_POST["ins_name"];
    $ec2_ins_coun      = "ec2_instance_count = ".$_POST["count"];
    $instance_type     = "instance_type      = ".$_POST["ins_typ"];
    $vpc_id            = "vpc_id             = ".$_POST["vpc"];
    $region            = "region             = ".$_POST["reg"];
    $source            = "source             = ";
    $private_ip        = "private_ips        = ".$_POST["priv_ip"];
    $ebs_mw            = "ebs_mw_volume_size = ".$_POST["ebs_size"];
    $key_pem           = "key_name           = ".$_POST["pem"];
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
    $avail_zone = implode(", ", $_POST['check']);
    
    $si = "subnet_ids         = [$subnet_id]";
    $az = "availability_zones = [$avail_zone]";
    
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
    $content5 = $infra_sg. PHP_EOL;
    $content6 = $ec2_ins_nam . PHP_EOL;
    $content7 = $ec2_ins_coun. PHP_EOL;
    $content8 = $instance_type. PHP_EOL;
    $content9 = $vpc_id. PHP_EOL;
    $content10 = $si. PHP_EOL;
    $content11 = $region. PHP_EOL;
    $content12 = $az. PHP_EOL;
    $content13 = $private_ip. PHP_EOL;
    $content14 = $ebs_mw. PHP_EOL;
    $content15 = $key_pem. PHP_EOL;
    $content16 = $ab. PHP_EOL;
    $content17 = $abu. PHP_EOL;
    $content18 = "}";
    
    
    echo nl2br($a."\n"."\n".$b."\n".$c."\n".$d.$bucket."\n".$content1.$f."\n".$g."\n"."\n".$h."\n".$i."\n".$content4."\t".$content5.$source.$so."\n".$content6.$content7.$content8.$content9.$content10.$content11.$content12.$content13.$content14.$content15.$content16.$content17."".$content18);
    // fwrite($file,$a."\n"."\n".$b."\n".$c."\n".$d.$bucket."\n".$content1.$f."\n".$g."\n"."\n".$h.$i."\n".$content4.$content5.$source.$so."\n".$content6.$content7.$content8.$content9.$content10.$content11.$content12.$content13.$content14.$ab."\n".$abu."\n".$content15);
       // fclose($file ); //Finally close our .txt}
    
    // die(header("Location: ".$_SERVER["HTTP_REFERER"]));
    ?>
