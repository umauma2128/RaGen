<?php
    error_reporting(E_ERROR | E_PARSE);
    $albErr = $alburlErr = "";
    $alb = $alburl = "";
    
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["alb"])) {
            $albErr = "req";
        } else {
            $alb = test_input($_POST["alb"]);
            $ab = "alb_name             = \"$alb\"";
        }
        
        if (empty($_POST["alburl"])) {
            $alburlErr = "req";
        } else {
            $alburl = test_input($_POST["alburl"]);
            $abu = "alb_probe_url        = \"$alburl\"";
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
    $app_cert     = $_POST["cert"];
    $ac = "app_cert_fqdn        = \"$app_cert\"";
    
    $r53z    = $_POST["r53_zone"];
    $r53zone = "r53_zone_domain_name = \"$r53z\"";
    $r53r    = $_POST["r53_record"];
    $r53record = "r53_lb_record_name   = \"$r53r\"";
    
    $env               = "env                  = \"$en\"";
    $vpc_id            = "vpc_id               = ".$_POST["vpc"];
    $region            = "region               = ".$_POST["reg"];
    $source            = "source               = ";
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
    $si = "subnet_ids           = [$subnet_id]";
    $az = "availability_zones   = [$avail_zone]";
    
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
    $content9 = $vpc_id. PHP_EOL;
    $content10 = $si. PHP_EOL;
    $content11 = $region. PHP_EOL;
    $content12 = $az. PHP_EOL;
    $content15 = $ac. PHP_EOL;
    $content16 = $r53zone. PHP_EOL;
    $content17 = $r53record. PHP_EOL;
    $content19 = "}";
    echo nl2br($a."\n"."\n".$b."\n".$c."\n".$d.$bucket."\n".$content1.$f."\n".$g."\n"."\n".$h.$i."\n".$content4.$content15.$source.$so."\n".$content9.$content10.$content11.$content12.$content16.$content17.$ab."\n".$abu."\n".$content19);
    //fwrite($file,$a."\n"."\n".$b."\n".$c."\n".$d.$bucket."\n".$content1.$f."\n".$g."\n"."\n".$h.$i."\n".$content4.$content15.$source.$so."\n".$content9.$content10.$content11.$content12.$content16.$content17.$ab."\n".$abu."\n");
   // fclose($file ); //Finally close our .txt}
    
   // die(header("Location: ".$_SERVER["HTTP_REFERER"]));
    ?>
