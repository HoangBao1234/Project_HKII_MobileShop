
        <?php
            $key = array("Xiaomi", "Iphone", "Vsmart", "Oppo", "Nokia", "SamSung", "Home");
            $value = array("../../Xiaomi/Page/xiaomi.php", "../../IPhone/Page/iphone.php", "../../Vsmart/Page/vsmart.php", "../../Oppo/Page/oppo.php", "../../Nokia/Page/nokia.php", "../../SamSung/Page/samsung.php", "../../phone/Page/phone.php");
            $array = array_combine($key, $value);
            
            $a = $_GET['a'];
            $a = strtolower($a);
            $len = strlen($a);
            $hint = "";
            foreach ($array as $title => $link){
                if(stristr($a, substr($title, 0, $len))){
                    if($hint == ""){
                        $hint = "<a href='$link'>$title</a>";
                    }else{
                        $hint .= "<a href='$link'>$title</a>";
                    }
                }
            }
            echo $hint == "" ? 'No Sugestion' : $hint;
            
        ?>
