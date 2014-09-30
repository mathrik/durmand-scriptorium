<?php

/*
 * @author Etienne Lamoureux <etienne.lamoureux@crystalgorithm.com>
 * @copyright 2014 Etienne Lamoureux
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */
namespace Crystalgorithm\DurmandScriptorium\v2\collection;

use Crystalgorithm\DurmandScriptorium\utils\Constants;
use Crystalgorithm\DurmandScriptorium\v2\RequestFactory;
use InvalidArgumentException;

class CollectionRequestFactory extends RequestFactory
{

    public function idRequest($id)
    {
	if ($id <= 0)
	{
	    throw new InvalidArgumentException('ID must be greater than 0. Input was: ' . $id);
	}

	$request = $this->buildBaseRequest();
	$query = $request->getQuery();
	$query->set(Constants::ID, $id);

	return $request;
    }

    public function idsRequest(array $ids)
    {
	if (sizeof($ids) <= Constants::MAX_IDS_SINGLE_REQUEST)
	{
	    $request = $this->buildBaseRequest();
	    $query = $request->getQuery();

	    $formattedIds = $this->formatIds($ids);
	    $query->set(Constants::IDS, $formattedIds);
	}
	else
	{
	    $request = $this->batchRequest($ids);
	}

	return $request;
    }

    public function pageRequest($page, $pageSize = null)
    {
	if ($page < 0)
	{
	    throw new InvalidArgumentException('Page must be greater than or equal to 0. Input was: ' . $page);
	}

	$request = $this->buildBaseRequest();
	$query = $request->getQuery();
	$query->set(Constants::PAGE, $page);

	if (isset($pageSize) && $pageSize > 0)
	{
	    $query->set(Constants::PAGE_SIZE, $pageSize);
	}

	return $request;
    }

    protected function batchRequest(array $ids)
    {
	$requests = array();
	$idChunks = array_chunk($ids, Constants::MAX_IDS_SINGLE_REQUEST);

	foreach ($idChunks as $idChunk)
	{
	    $requests[] = $this->idsRequest($idChunk);
	}

	return $requests;
    }

    protected function formatIds(array $ids)
    {
	return implode(Constants::ID_SEPARATOR, $ids);
    }

}