<?php
//require_once 'controllers/samsungController.php';
//
//
////var_dump($resultOfall);
//echo $resutOfall[1][2];
//
//for ($count = 0; $count <= count($resultOfall);$count++) {
//    for ($monitors = 0; $monitors <= 3; $monitors++) {
//
//
//
//        ?>
<!---->
<!--        --><?php
//        if(($count%4)==0){
//            $p1 =  $resultOfall[$count][1];
//            $p2=  $resultOfall[++$count][1];
//            $p3=  $resultOfall[++$count][1];
//            $p4 =  $resultOfall[++$count][1];
//            echo $p1,$p2, $p3, $p4;
//
//        }
//
//        }
//    continue;
//
//
//    }
//
//
////            switch ($bars) {
////                case 0:
////                    echo '<h2>$</h2>';
////                    break;
////                case 1:
////                    echo " <p style=\" margin-bottom:0px;width: 122px; float: left\">Черный</p>
////                 <p style=\"padding-top: 10px; margin-bottom:0px;width: 80px; float: left\"></p>
////            <div class=\"progress\">
////                <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\"
////                     aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"color:black;background-color: #5bc0de; margin-bottom:0px;width:{$resultOfall[$count][1]}%;\">{$resultOfall[$count][1]} </div>
////            </div>";
////                    break;
////                case 2:
////                    echo " <p style=\" margin-bottom:0px;width: 122px; float: left\">Голубой</p>
////                      <p style=\"padding-top: 10px; margin-bottom:0px;width: 80px; float: left\"></p>
////                    <div class=\"progress\">
////                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\"
////                             aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"color:black;background-color: black; margin-bottom:0px;width:30%;\">30% </div>
////                    </div>";
////                    break;
////                case 3:
////                    echo " <p style=\" margin-bottom:0px;width: 122px; float: left\">Пурпурный</p>
////                      <p style=\"padding-top: 10px; margin-bottom:0px;width: 80px; float: left\"></p>
////                    <div class=\"progress\">
////                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\"
////                             aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"color:black;background-color: black; margin-bottom:0px;width:30%;\">30% </div>
////                    </div>";
////                    break;
////                case 4:
////                    echo " <p style=\" margin-bottom:0px;width: 122px; float: left\">Желтый</p> <p style=\"padding-top: 10px; margin-bottom:0px;width: 80px; float: left\"></p>
////                    <div class=\"progress\">
////                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\"
////                             aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"color:black;background-color: black; margin-bottom:0px;width:30%;\">30% </div>
////                    </div>";
////                    break;
////                case 5:
////                    echo " <p style=\" margin-bottom:0px;width: 122px; float: left\">Принт #1</p> <p style=\"padding-top: 10px; margin-bottom:0px;width: 80px; float: left\"></p>
////                    <div class=\"progress\">
////                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\"
////                             aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"color:black;background-color: black; margin-bottom:0px;width:30%;\">30% </div>
////                    </div>";
////                    break;
////                case 6:
////                    echo " <p style=\" margin-bottom:0px;width: 122px; float: left\">Принт #2</p>
////                      <p style=\"padding-top: 10px; margin-bottom:0px;width: 80px; float: left\"></p>
////                    <div class=\"progress\">
////                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\"
////                             aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"color:black;background-color: black; margin-bottom:0px;width:30%;\">30% </div>
////                    </div>";
////                    break;
////                case 7:
////                    echo " <p style=\" margin-bottom:0px;width: 122px; float: left\">Принт #3</p>
////                  <p style=\"padding-top: 10px; margin-bottom:0px;width: 80px; float: left\"></p>
////                    <div class=\"progress\">
////                    <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\"
////                         aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"color:black;background-color: black; margin-bottom:0px;width:30%;\">30% </div>
////                </div>";
////                    break;
////                case 8:
////                    echo " <p style=\" margin-bottom:0px;width: 122px; float: left\">Принт #4</p>
////                      <p style=\"padding-top: 10px; margin-bottom:0px;width: 80px; float: left\"></p>
////                    <div class=\"progress\">
////                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\"
////                             aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"color:black;background-color: black; margin-bottom:0px;width:30%;\">30% </div>
////                    </div>";
////                    break;
////                case 9:
////                    echo " <p style=\" margin-bottom:0px;width: 122px; float: left\">Очиститель ремня</p>
////                  <p style=\"padding-top: 10px; margin-bottom:0px;width: 80px; float: left\"></p>
////                <div class=\"progress\">
////                    <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\"
////                         aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"color:black;background-color: black; margin-bottom:0px;width:30%;\">30% </div>
////                </div>";
////                    break;
////                case 10:
////                    echo " <p style=\"padding-bottom:30px;margin-bottom:0px;width: 120px; float: left\">Ролик </p>
////                <p style=\"padding-top: 10px; margin-bottom:0px;width: 80px; float: left\"></p>
////                    <div class=\"progress\">
////                        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\"
////                             aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"color:black;background-color: black; margin-bottom:0px;width:30%;\">30% </div>
////                    </div>";
////                    break;
////            }
//
////
////        }
//
//
//
//
//
//
//
//
//
//
