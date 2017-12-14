<?php

namespace  Wcs;


final class Config
{
    //version
    const WCS_SDK_VER = "2.0.5";


    //url设置
    public static $WCS_PUT_URL	= 'http://PUT_URL'; //WCS put 上传路径
    public static $WCS_GET_URL	= 'http://GET_URL';    //WCS get 上传路径
    public static $WCS_MGR_URL	= 'http://MGR_URL';    //WCS MGR 路径

    //access key and secret key
    public static $WCS_ACCESS_KEY	= '';
    public static $WCS_SECRET_KEY	= '';

    //token的deadline,默认是1小时,也就是3600s
    public static $WCS_TOKEN_DEADLINE = 3600;

    //上传文件设置
    public static $WCS_OVERWRITE = 1; //默认文件不覆盖
    //超时时间
    public static $WCS_TIMEOUT = 30;
    public static $WCS_CONNECTTIMEOUT = 30;

    //虚拟内存目录
    const WCS_RAM_URL = '/mnt/ramdisk/';

    //分片上传参数设置
    public static $WCS_BLOCK_SIZE = 4194304; //4 * 1024 * 1024 默认块大小4M
    public static $WCS_CHUNK_SIZE = 524288; //  4 * 1024 * 1024 默认片大小4M
    //const WCS_CHUNK_SIZE = 4194304; //  4 * 1024 * 1024 默认片大小4M
    public static $WCS_RECORD_URL = '/root/s3-tests/upload/'; //默认当前文件目录
    public static $WCS_COUNT_FOR_RETRY = 3;  //超时重试次数

    //并发请求数目
    public static $WCS_CONCURRENCY = 5;



}

