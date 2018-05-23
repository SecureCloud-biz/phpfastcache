<?php
/**
 *
 * This file is part of phpFastCache.
 *
 * @license MIT License (MIT)
 *
 * For full copyright and license information, please see the docs/CREDITS.txt file.
 *
 * @author Khoa Bui (khoaofgod)  <khoaofgod@gmail.com> http://www.phpfastcache.com
 * @author Georges.L (Geolim4)  <contact@geolim4.com>
 *
 */
declare(strict_types=1);

namespace Phpfastcache\Drivers\Cookie;

use Phpfastcache\Core\Item\{
    ExtendedCacheItemInterface, ItemBaseTrait
};
use Phpfastcache\Core\Pool\ExtendedCacheItemPoolInterface;
use Phpfastcache\Drivers\Cookie\Driver as CookieDriver;
use Phpfastcache\Exceptions\{
    PhpfastcacheInvalidArgumentException
};

/**
 * Class Item
 * @package phpFastCache\Drivers\Cookie
 */
class Item implements ExtendedCacheItemInterface
{
    use ItemBaseTrait {
        ItemBaseTrait::__construct as __BaseConstruct;
    }

    /**
     * Item constructor.
     * @param \Phpfastcache\Drivers\Cookie\Driver $driver
     * @param $key
     * @throws PhpfastcacheInvalidArgumentException
     */
    public function __construct(CookieDriver $driver, $key)
    {
        $this->__BaseConstruct($driver, $key);
    }


    /**
     * @param ExtendedCacheItemPoolInterface $driver
     * @throws PhpfastcacheInvalidArgumentException
     * @return static
     */
    public function setDriver(ExtendedCacheItemPoolInterface $driver)
    {
        if ($driver instanceof CookieDriver) {
            $this->driver = $driver;

            return $this;
        }

        throw new PhpfastcacheInvalidArgumentException('Invalid driver instance');
    }
}