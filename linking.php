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
        
        switch($from){
          case 'jakarta':
            $fromdata = "JAKARTA";
          break;
          case 'malang':
            $fromdata = "MALANG";
          break;
          case 'bandung':
            $fromdata = "BANDUNG";
          break;
          case 'semarang':
            $fromdata = "SEMARANG";
          break;
          case 'surabaya':
            $fromdata = "SURABAYA";
          break;
          case 'yogyakarta':
            $fromdata = "YOGYAKARTA";
          break;
          case 'banyuwangi':
            $fromdata = "BANYUWANGI";
          break;
          default:
            $fromdata = "JAKARTA";
          break;
        }
    
//        if($from == "jakarta"){
//          $fromdata = "JAKARTA";
//        }else if($from == "malang"){
//          $fromdata = "MALANG";
//        }
        
        switch($goto){
          case 'jakarta':
            $gotodata = "JAKARTA";
          break;
          case 'malang':
            $gotodata = "MALANG";
          break;
          case 'bandung':
            $gotodata = "BANDUNG";
          break;
          case 'semarang':
            $gotodata = "SEMARANG";
          break;
          case 'surabaya':
            $gotodata = "SURABAYA";
          break;
          case 'yogyakarta':
            $gotodata = "YOGYAKARTA";
          break;
          case 'banyuwangi':
            $gotodata = "BANYUWANGI";
          break;
          default:
            $gotodata = "JAKARTA";
          break;
        }
        
//        if($goto == "jakarta"){
//          $gotodata = "JAKARTA";
//        }else if($goto == "malang"){
//          $gotodata = "MALANG";
//        }
    
        header("Location:https://www.tiket.com/kereta-api/cari?d=".$fromdata."&dt=CITY&a=".$gotodata."&at=CITY&date=".$datechange."&adult=1&infant=0");
  }
  else if($type == "AIRPORT"){
        
        switch($from){
          case 'jakarta':
            $fromdata = "JKTC";
          break;
          case 'malang':
            $fromdata = "MLG";
          break;
          case 'bandung':
            $fromdata = "BDO";
          break;
          case 'semarang':
            $fromdata = "SRG";
          break;
          case 'surabaya':
            $fromdata = "SUB";
          break;
          case 'yogyakarta':
            $fromdata = "JOG";
          break;
          case 'banyuwangi':
            $fromdata = "BWX";
          break;
          default:
            $fromdata = "JAKARTA";
          break;
        }
//            if($from == "jakarta"){
//              $fromdata = "JKTC";
//            }else if($from == "malang"){
//              $fromdata = "MLG";
//            }
            
        switch($goto){
          case 'jakarta':
            $gotodata = "JKTC";
          break;
          case 'malang':
            $gotodata = "MLG";
          break;
          case 'bandung':
            $gotodata = "BDO";
          break;
          case 'semarang':
            $gotodata = "SRG";
          break;
          case 'surabaya':
            $gotodata = "SUB";
          break;
          case 'yogyakarta':
            $gotodata = "JOG";
          break;
          case 'banyuwangi':
            $gotodata = "BWX";
          break;
          default:
            $gotodata = "JAKARTA";
          break;
        }
    
//            if($goto == "jakarta"){
//              $gotodata = "JKTC";
//            }else if($goto == "malang"){
//              $gotodata = "MLG";
//            }
    
            header("Location: https://www.tiket.com/pesawat/search?d=".$fromdata."&a=".$gotodata."&dType=CITY&aType=AIRPORT&date=".$datechange."&adult=1&child=0&infant=0&class=economy");
        }else{
          echo "error bosq";
        }               
        ?>