<?php

if ($link_type=='sensor_pass_port') {
   $status = (int)gg($device1['LINKED_OBJECT'].'.status');
   sg($object.'.status',$status);
}
