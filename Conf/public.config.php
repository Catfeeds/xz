<?php
/**
 * Ar default public config file.
 *
 * @author ycassnr <ycassnr@gmail.com>
 */
return array(
    // 上传目录
    'UPLOAD_DIR' => AR_ROOT_PATH . 'Public' . DS . 'Upload' . DS,
    // 扩展目录
    'EXTENSION_DIR' => AR_ROOT_PATH . 'admin' . DS . 'Ext' . DS,
    // 应用key
    'APP_KEY' => 'xz power by arphp 2015',
    // 模板后缀
    'TPL_SUFFIX' => 'html',
    // 关闭 trace 显示
    'DEBUG_SHOW_TRACE' => false,
    // 'DEBUG_LOG' => true,
    'moduleLists' => array(
        // 前台
        'main',
        // 后台
        'admin',
        // 手机端
        'mobile',
    ),

    // 组件配置开始
    'components' => array(
        // 懒惰加载
        'lazy' => true,
        'db' => array(
            // 懒惰加载
            'lazy' => true,
            // mysql数据库组件
            'mysql' => array(
                'config' => array(
                    // 读库
                    'read' => array(
                        // 默认读库配置
                        'default' => array(
                            'dsn' => 'mysql:host=localhost;dbname=xz;port=3306',
                            'user' => 'root',
                            'pass' => 'root',
                            'prefix' => '',
                            'option' => array(
                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
                                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'',
                            ),
                        ),

                    ),

                ),
            ),
            ),
            // mysql 配置结束
        ),
    // 'URL_MODE' => 'FULL',
);
