<?php

$this->device_types['megadmcp230xx'] = array(
        'TITLE'=>'Расширитель MegaDMCP230xx',
        'PARENT_CLASS'=>'SDevices',
        'CLASS'=>'SMegaDMCP230xx',
        'PROPERTIES'=>array(
            'ipAddress'=>array('DESCRIPTION'=>'IP-адрес Меги','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
            'Password'=>array('DESCRIPTION'=>'Пароль Меги','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
            'PortSDA'=>array('DESCRIPTION'=>'Порт Меги SDA','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
            'PortINT'=>array('DESCRIPTION'=>'Порт Меги INT','_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
            'Ext'=>array('DESCRIPTION'=>'Канал MCP230xx','_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'0=0 Канал,1=1 Канал,2=2 Канал,3=3 Канал,4=4 Канал,5=5 Канал,6=6 Канал,7=7 Канал,8=8 Канал,9=9 Канал,10=10 Канал,11=11 Канал,12=12 Канал,13=13 Канал,14=14 Канал,15=15 Канал,16=16 Канал'),
            'icon'=>array('DESCRIPTION'=>LANG_IMAGE,'_CONFIG_TYPE'=>'style_image','_CONFIG_HELP'=>'SdIcon'),
            'symbol'=>array('DESCRIPTION'=>'Символы SVG','_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'=Без символа,#sEconomMode=EconomMode,#pie=pie'),
            'value'=>array('DESCRIPTION'=>'Data Value','ONCHANGE'=>'valueUpdated','DATA_KEY'=>1),
            'stored_value'=>array('DESCRIPTION'=>'Month Value'),
            'counter'=>array('DESCRIPTION'=>'Счетчик'),
        ),
        'METHODS'=>array(
            'statusUpdated'=>array('DESCRIPTION'=>'Status updated','CALL_PARENT'=>1),
            'valueWorkUpdated'=>array('DESCRIPTION'=>'Work Value updated event'),
            'refreshStats'=>array('DESCRIPTION'=>'Обнулить счетчик','_CONFIG_SHOW'=>1),
        ),
);
