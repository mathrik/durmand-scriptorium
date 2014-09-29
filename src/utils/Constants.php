<?php

/*
 * @author Etienne Lamoureux <etienne.lamoureux@crystalgorithm.com>
 * @copyright 2014 Etienne Lamoureux
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */
namespace Crystalgorithm\DurmandScriptorium\utils;

class Constants
{

    const MAX_PAGE_SIZE = 200;
    const NB_OF_PARALLEL_REQUESTS = 20;
    const MAX_IDS_SINGLE_REQUEST = 200;
    const TIMEOUT_LIMIT_IN_SECONDS = 300;
    const MEMORY_LIMIT_IN_BYTES = 268435456;
    const ID = 'id';
    const IDS = 'ids';
    const PAGE = 'page';
    const ID_SEPARATOR = ',';
    const PAGE_SIZE = 'page_size';
    const QUANTITY = 'quantity';
    const GET = 'GET';
    const BASE_URL = 'https://api.guildwars2.com';
    const QUAGGANS_ENDPOINT = '/v2/quaggans';
    const LISTINGS_ENDPOINT = '/v2/commerce/listings';
    const PRICES_ENDPOINT = '/v2/commerce/prices';
    const ITEMS_ENDPOINT = '/v2/items';
    const GEMS_ENDPOINT = '/v2/commerce/exchange/gems';
    const COINS_ENDPOINT = '/v2/commerce/exchange/coins';

}
