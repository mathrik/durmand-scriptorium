<?php

/*
 * Copyright (c) 2014, Etienne Lamoureux
 * All rights reserved.
 * Distributed under the BSD 3-Clause license (http://opensource.org/licenses/BSD-3-Clause).
 */
use EtienneLamoureux\DurmandScriptorium\DurmandScriptorium;

class DurmandScriptoriumTest extends PHPUnit_Framework_TestCase
{

    protected static $api;

    public static function setUpBeforeClass()
    {
	parent::setUpBeforeClass();
	DurmandScriptoriumTest::$api = new DurmandScriptorium();
    }

    public function testClientCanReachApi()
    {
	$data = DurmandScriptoriumTest::$api->quaggans()->getAll();

	$this->assertNotNull($data);
    }

}
