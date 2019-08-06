
        <?php
            $id = 38;
            $key = array("Xiaomi", "Iphone", "Vsmart", "Oppo", "Nokia", "SamSung", "Home");
            $value = array("../../Xiaomi/Page/xiaomi.php?id=$id", "../../IPhone/Page/iphone.php?id=$id", "../../Vsmart/Page/vsmart.php?id=$id", "../../Oppo/Page/oppo.php?id=$id", "../../Nokia/Page/nokia.php?id=$id", "../../SamSung/Page/samsung.php?id=$id", "../../phone/Page/phone.php?id=$id");
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
