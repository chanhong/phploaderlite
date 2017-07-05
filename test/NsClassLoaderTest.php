<?php
/*
 * This file is part of the PdoLite package.
 *
 * (c) Chanh Ong <chanh.ong@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * 
 */

namespace PhpLoaderLite;

use PhpLoaderLite\NsClassLoader;

class NsClassLoaderTest extends \PHPUnit_Framework_TestCase {


    /**
     * @covers            
     * @uses              
     * @expectedException 
     */
    public function testloader() {
        $t = new FrontController;
        $t->me();
        $m = new FrontModel;
        $m->me();
    }

}