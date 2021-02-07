<?php

startMeasure('statusUpdated');
$ot = $this->object_title;

//DebMes("Updated $ot - ".$ncno . " new value: ".$params['NEW_VALUE'],'openclose');

$description = $this->description;
if (!$description) {
    $description = $ot;
}

//DebMes("LogicAction $ot",'openclose');
$this->callMethodSafe('logicAction');

//DebMes("LinkedDevices $ot",'openclose');
startMeasure('statusUpdatedLinkedDevices');
include_once(DIR_MODULES . 'devices/devices.class.php');
$dv = new devices();
$dv->checkLinkedDevicesAction($ot, $params['NEW_VALUE']);
endMeasure('statusUpdatedLinkedDevices');

$ipAddress = $this->getProperty('ipAddress');
$Password = $this->getProperty('Password');
$Port = $this->getProperty('PortSDA');
$Ext = $this->getProperty('Ext');
$status = $this->getProperty('status');

//http://192.168.10.101/sec/?pt=31&ext=10&cmd=get
//Переключение диммируемого канала
//$value = file_get_contents("http://192.168.10.101/sec/?pt=31&ext=9&cmd=get");
//http://192.168.10.101/sec/?pt=31&ext=0&cmd=get
$value = file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&ext=".$Ext."&cmd=get");
//$value = file_get_contents("http://192.168.10.101/sec/?pt=31&cmd=get");
$this->setProperty('stored_value', $value);

If ($value == "ON" || $value == "") {
    $this->setProperty('status', 1);
}else{
    $this->setProperty('status', 0);
}

//пишите свой скрипт, по всем топикам вызывая функцию
//function mqttPublish($topic, $value, $qos = 0, $retain = 0);

include_once(DIR_MODULES . 'mqtt/mqtt.class.php');
 $mqtt = new mqtt();

 $topic = "/mjd/26/".$ot."/status";
 $rezult = $mqtt->mqttPublish($topic, $status, 0, 0);

endMeasure('statusUpdated');
