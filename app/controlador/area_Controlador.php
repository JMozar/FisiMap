<?php
session_start();//me permite  iniciar una  sesion
//require_once "../../util/ConexionBD.php";
//require_once '../../dao/AreaDao.php';
//require_once '../../bean/AreaBean.php';

$op=$_REQUEST['op'];

switch($op)
{
  case 1: {
    
    header('Location:../vista/frm_areas.php');

    break;}
}
