<?php

$ot=$this->object_title;
$ipAddress = $this->getProperty('ipAddress');
$Password = $this->getProperty('Password');
$Port = $this->getProperty('PortSDA');

file_get_contents("http://".$ipAddress."/".$Password."/?pt=".$Port."&cnt=0"); //192.168.0.14/sec/?pt=35&cnt=0
