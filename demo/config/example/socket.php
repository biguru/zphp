<?php

    return array(
        'socket'=>array(
            'host'=>'0.0.0.0',                          //socket 监听ip
            'port'=>8991,                               //socket 监听端口
            'adapter'=>'React',                          //socket 驱动模块
            'daemonize'=>0,                             //是否开启守护进程
            'times'=>array(),                           //定时服务
            'params'=>array(),                          //其它参数
            'client_class'=>'socket\\React',            //socket 回调类
            'protocol'=>'Json',                         //socket通信数据协议
            'call_mode'=>'ZPHP',                        //业务处理模式
            'work_mode'=>1,                             //工作模式：1：多进程 2：多线程
            'worker_num'=>1                                 //工作进(线)程数
        ),
    );
