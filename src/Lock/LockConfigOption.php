<?php

declare(strict_types=1);

namespace Imi\Lock;

use Imi\Util\Traits\TDataToProperty;

/**
 * 锁配置项.
 */
class LockConfigOption
{
    use TDataToProperty;

    /**
     * 类名或 bean 名称.
     *
     * @var string
     */
    public string $class;

    /**
     * 配置项.
     *
     * @var array
     */
    public array $options = [];
}
