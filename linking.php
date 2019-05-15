<?php
  $submit = $_POST['submitticket'];
  $type = $_POST['optionjenis'];
  $from = $_POST['asal'];
  $fromdata = "";
  $goto = $_POST['tujuan'];
  $gotodata = "";
  $date = $_POST['tanggal'];
  $passenger = 1;
  $dateformat = date('Y-m-d', strtotime($date));
  $datechange = str_replace('/', '-', $dateformat);

  if($type == "STATION"){
        if($from == "jakarta"){
          $fromdata = "JAKARTA";
        }else if($from == "malang"){
          $fromdata = "MALANG";
        }
        if($goto == "jakarta"){
          $gotodata = "JAKARTA";
        }else if($goto == "malang"){
          $gotodata = "MALANG";
        }
        header("Location:https://www.tiket.com/kereta-api/cari?d=".$fromdata."&dt=CITY&a=".$gotodata."&at=CITY&date=".$datechange."&adult=1&infant=0");
  }
  else if($type == "AIRPORT"){
            if($from == "jakarta"){
              $fromdata = "JKTC";
            }else if($from == "malang"){
              $fromdata = "MLG";
            }
            
            if($goto == "jakarta"){
              $gotodata = "JKTC";
            }else if($goto == "malang"){
              $gotodata = "MLG";
            }
            header("Location: https://www.tiket.com/pesawat/search?d=".$fromdata."&a=".$gotodata."&dType=CITY&aType=AIRPORT&date=".$datechange."&adult=1&child=0&infant=0&class=economy");
        }else{
          echo "error bosq";
        }               
        ?>