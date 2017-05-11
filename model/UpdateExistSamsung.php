<?php

require_once(ROOT . '/model/dbconnect.php');
require_once(ROOT . '/controllers/samsungController.php');
//require_once (ROOT.'/controllers/AdminController.php');
////var_dump(DbConnect::getConnect()->query("SELECT * from toners"));
//var_dump(DbConnect::getConnect()->query("SELECT * from toners"));
////var_dump($db->conn);


 class  UpdateExistSamsung
 {
//    public function __construct()
//    {
//        set_error_handler(array($this, 'ErrorCatcher'));
//
//
//        $errorVarArray['real index'] = true;
//        echo $errorVarArray['error index'];
//    }
    /**
     * @param $procent samsungController Amount of paint in the cartridge
     * @param $fabricator samsungController who is the manufacturer
     * @param $oneSamsung  samsungController port number in system
     * @return  UpdateExistSamsung return true when matches=true
     *
     */
    public function issetPrinter()
    {
        $con = DbConnect::getConnect();
        $arrayofSamsungs = [
            'sm2622',
            'sm2626',
            'sm2752',
            'sm2847',
            'sm2861',
            'sm6210',
            'sm2831',
            'sm2855',
            'sm2865',
            'sm2974',
            'sm2844',
            'sm2803',
            'sm2742',
            'sm2690',
            'sm2834',
            'sm2854',
            'sm2832',
            'sm2779',
            'sm2730',
            'sm6170',
        ];
        foreach ($arrayofSamsungs as $oneSamsung) {

            $path = file_get_contents('http://' . $oneSamsung . '/sws/app/information/home/home.json');
            $regularExpression = '/remaining:\s([0-9]{1,3})/';
            $check = preg_match_all($regularExpression, $path, $matches);
            var_dump($check);
            die();
            if ($check) {
                $fullname = explode('"', $matches[0][0]);
                $procentCartridge = explode(" ", $fullname[0]);
            }
            $check = preg_match('/model_name:\s"[a-zA-Z]{1,}\sSCX-[\d]{1,}[a-z]/', $path, $matches);
            if ($check) {
                $fullname = explode('"', $matches[0]);
                $nameAndType = explode(" ", $fullname[1]);
            }


//
//            $show = $result = $con->query("SELECT black_toner,port_name.name,port_name.id from BlackToner
//            LEFT JOIN port_name ON BlackToner.name = port_name.id WHERE port_name.name='{$oneSamsung}'")->fetch();
//            if ($show) {
//                foreach ($show as $pornterExitst) {
//                    if (($pornterExitst['name']) == $oneSamsung) {
//                        $result = $con->query("UPDATE BlackToner LEFT JOIN port_name
//                    ON BlackToner.name=port_name.id SET black_toner ='{$procentCartridge[1]}' WHERE port_name.name ='{$oneSamsung}'");
//                    }
//                }
//
//            } elseif (count($show) == 0) {
//                try {
//                    $con->beginTransaction();
//                    $con->exec("SELECT id  FROM NameFabricator WHERE fabricator=$nameAndType[1]");
//                    $idlastAddFabrication = $con->lastInsertId();
//                    $con->exec("INSERT INTO port_name (name) VALUES ('{$oneSamsung}')");
//                    $idLastAddPortName = $con->lastInsertId();
//                    $con->exec("INSERT INTO BlackToner (black_toner,Name_fabricator_id,port_name_id)
//                    VALUES ('57','{$idlastAddFabrication}','{$idLastAddPortName}')");
//                } catch (Exception $e) {
//                    $con->rollBack();
//                    echo "Ошибка: " . $e->getMessage();
//                }
//
//            }


        }

    }


    public function select()
    {

        $con = DbConnect::getConnect();
        $result = $con->query("SELECT * from BlackToner");
        $show = $result->fetchAll();

        return $show;


    }

}
$u = new UpdateExistSamsung();
$u->issetPrinter();



