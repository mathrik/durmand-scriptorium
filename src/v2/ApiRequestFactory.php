<?php

/*
 * Copyright (c) 2014, Etienne Lamoureux
 * All rights reserved.
 * Distributed under the BSD 3-Clause license (http://opensource.org/licenses/BSD-3-Clause).
 */
namespace EtienneLamoureux\DurmandScriptorium\v2;

abstract class ApiRequestFactory
{

    const BASE_URL = 'https://api.guildwars2.com';

    protected $ENDPOINT_URL = '';

    public function baseRequest($client)
    {
	$request = $this->buildBaseRequest($client);

	return $request;
    }

    protected function buildBaseRequest($client)
    {
	return $client->createRequest('GET', self::BASE_URL . $this->ENDPOINT_URL);
    }

}
