<?php
/**
 * SomeServiceProvider class
 *
 * @copyright (c) 2011-2016 Phalcon Team
 * @link      http://www.phalconphp.com
 * @author    Andres Gutierrez <andres@phalconphp.com>
 * @author    Serghei Iakovlev <serghei@phalconphp.com>
 *
 * The contents of this file are subject to the New BSD License that is
 * bundled with this package in the file docs/LICENSE.txt
 *
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world-wide-web, please send an email to license@phalconphp.com
 * so that we can send you a copy immediately.
 */

use Phalcon\Di\ServiceProviderInterface;
use Phalcon\DiInterface;

class SomeServiceProvider implements ServiceProviderInterface
{
    public function register(DiInterface $di)
    {
        require_once PATH_DATA . 'di/SomeComponent.php';

        $di['foo'] = function () {
            return 'bar';
        };

        $di['fooAction'] = function () {
            return new \SomeComponent('phalcon');
        };
    }
}