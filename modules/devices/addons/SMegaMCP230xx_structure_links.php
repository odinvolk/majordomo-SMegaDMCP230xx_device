<?php
$this->device_links['SMegaDMCP230xx']=array(
    array (
        'LINK_NAME'=>'sensor_pass_port',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SENSOR_PASS,
        'LINK_DESCRIPTION'=>'Пересылка данных на другое устройство',
        'TARGET_CLASS'=>'SDevices,SControllers,SSensors',
    ),
    array(
        'LINK_NAME'=>'switch_it_port',
        'LINK_TITLE'=>LANG_DEVICES_LINK_SWITCH_IT,
        'LINK_DESCRIPTION'=>'Управление другим устройством по событию',
        'TARGET_CLASS'=>'SControllers',
        'PARAMS'=>array(
            array(
                'PARAM_NAME'=>'action_type',
                'PARAM_TITLE'=>LANG_DEVICES_LINK_ACTION_TYPE,
                'PARAM_TYPE'=>'select',
                'PARAM_OPTIONS'=>array(
                    array('TITLE'=>LANG_DEVICES_LINK_TYPE_TURN_ON,'VALUE'=>'turnon'),
                    array('TITLE'=>LANG_DEVICES_LINK_TYPE_TURN_OFF,'VALUE'=>'turnoff'),
                    array('TITLE'=>LANG_DEVICES_LINK_TYPE_SWITCH,'VALUE'=>'switch')
                    )
            ),
            array(
                'PARAM_NAME'=>'action_delay',
                'PARAM_TITLE'=>LANG_DEVICES_LINK_SWITCH_IT_PARAM_ACTION_DELAY,
                'PARAM_TYPE'=>'num'
            )
        )
    ),
);
