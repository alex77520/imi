<?php

declare(strict_types=1);

$rootPath = \dirname(__DIR__) . '/';

return [
    'hotUpdate'    => [
        'status'    => false, // 关闭热更新去除注释，不设置即为开启，建议生产环境关闭

        // --- 文件修改时间监控 ---
        // 'monitorClass'    =>    \Imi\HotUpdate\Monitor\FileMTime::class,
        'timespan'    => 1, // 检测时间间隔，单位：秒

        // --- Inotify 扩展监控 ---
        // 'monitorClass'    =>    \Imi\HotUpdate\Monitor\Inotify::class,
        // 'timespan'    =>    1, // 检测时间间隔，单位：秒，使用扩展建议设为0性能更佳

        // 'includePaths'    =>    [], // 要包含的路径数组
        'excludePaths'    => [
            $rootPath . '.git',
            $rootPath . 'bin',
            $rootPath . 'logs',
            $rootPath . '.session',
        ], // 要排除的路径数组，支持通配符*
    ],
    'ErrorLog'  => [
        // PHP 报告的错误级别，默认 0，不报告任何信息
        'level' => \E_ALL,
        // 'level' =>  E_ALL, // 报告所有错误
        // 'level' =>  E_ALL & ~E_NOTICE, // 报告 E_NOTICE 之外的所有错误

        // 错误捕获级别，捕获到的错误都会做处理，此为默认值
        'catchLevel' => \E_ALL | \E_STRICT,
        // 抛出异常的错误级别，除此之外全部记录日志，此为默认值
        'exceptionLevel' => \E_ALL | \E_STRICT,
        // Log 组件堆栈帧回溯数量限制，默认为 0 不限制回溯数量。
        // 'backtraceLimit' => 0,
    ],
];
