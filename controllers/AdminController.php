<?php

include_once(ROOT . '/model/admin.php');

class AdminController extends AdminExist
{
    function __construct()
    {
        if (isset($_POST['submit']) && isset($_POST['password']) && isset($_POST['UserName'])) {
            $this->submit = $_POST['submit'];
            $this->UserName = $_POST['UserName'];
            $this->Pass = $_POST['password'];
        }
    }

    /**
     * @param in second if, send 3 @param into model, first it's query, 2,3 @param user data
     * @return true when user exist in database
     */
    public function actionIndex()
    {
        if (isset($this->submit) && isset($this->Pass) && isset($this->UserName)) {

            if (parent::issetAdmin("SELECT * FROM role")) {
                $_SESSION['admin'] = true;
              $res = parent::issetAdmin("SELECT * FROM role");
var_dump($res);
                foreach ($res as $accsess){
                    if(($accsess['name'])== $this->UserName && ($accsess['password'] == $this->Pass ) ) {
//

                echo 'asd';
                    }
                }


            }
        }
    }
//$xerox = [
//'xr6986',
//'xr6970',
//'xr6987',
//
//'xr6698',
//'xr6690',
//'xr6696',
//'xr6689',
//'xr6897',
//'xr6898',
//'xr6680',
//'xr6688',
//'xr6686',
//'\',
//    ];
//
////    public function actionBlackAndWhite(){
////        $_SESSION['blackAndWhite']=true;
////       $black = [
////            'sm2752',
////            'sm2847',
////
////            'hp2472',
////
////
////            'sm2861',
////            'sm6210',
////            'sm2831',
////
////
////
////
////
////
////
////
////            'sm2855',
////            'sm2865',
////            'sm2974',
////
////            'sm2844',
////            'sm2803',
////            'hp2635',
////            'sm2742',
////            'sm2690',
////            'sm2834',
////            'ky6206',
////            'sm2854',
////            'sm2832',
////            'sm2779',
////            'sm2730',
////        ];
////    }public function actionColor(){
////        $_SESSION['blackAndWhite']=true;
////    $colors =  [
//'sm6170',
////        '2030xr',
////'2237xr',
////'xr2827',//7120
//
////        'xr6000',//7100n
////
////        'xr6345',//7830
// '2030xr',
////'2237xr',
////        'xr2948',//?
////        'xr2850',/?
////        'xr6899',//7845
////        'xr2889',//7855
////
////        'xr6687',//7845
//
//
//


//
//    ];
//    }
}
//
//$admin = new AdminController();
//$admin->actionIndex();
//$admin->acttionBlackAndWhite();

