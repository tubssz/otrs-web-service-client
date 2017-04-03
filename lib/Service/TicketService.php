<?php
namespace Otrs\Service;

use Otrs\Client;
use Otrs\Model\TicketCreateRequest;
use Otrs\Model\TicketCreateResponse;
use Otrs\Model\TicketGetRequest;
use Otrs\Model\TicketSearchRequest;
use Otrs\Model\TicketResponse;
use Otrs\Model\TicketUpdateRequest;
use Otrs\Model\TicketUpdateResponse;

class TicketService
{

    /**
     *
     * @var Client
     */
    private $client;

    /**
     * Constructor.
     *
     * @param Client $client
     * @throws \InvalidArgumentException
     */
    public function __construct(Client $client)
    {
        if ($client == null) {
            throw new \InvalidArgumentException('The client is required.');
        }
        $this->client = $client;
    }

    /**
     * Returns the client instance.
     *
     * @return Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     *
     * @param TicketCreateRequest $request
     * @return TicketCreateResponse
     */
    public function create(TicketCreateRequest $request)
    {
        return new TicketCreateResponse($this->client->call('TicketCreate', $request->toArray()));
    }

    /**
     *
     * @param TicketUpdateRequest $request
     * @return TicketUpdateResponse
     */
    public function update(TicketUpdateRequest $request)
    {
        return new TicketUpdateResponse($this->client->call('TicketUpdate', $request->toArray()));
    }

    /**
     *
     * @param TicketGetRequest $request
     * @return TicketResponse[]
     */
    public function get(TicketGetRequest $request)
    {
        $result = $this->client->call('TicketGet', $request->toArray());
        if (is_array($result) && isset($result['Ticket'])) {
            return array_map(function ($v) {
                return new TicketResponse(get_object_vars($v));
            }, $result['Ticket']);
        } else {
            return [
                new TicketResponse(get_object_vars($result))
            ];
        }
    }

    /**
     *
     * @param TicketSearchRequest $request
     * @return int[]
     */
    public function search(TicketSearchRequest $request)
    {
        $result = $this->client->call('TicketSearch', $request->toArray());
        if (is_array($result) && isset($result['TicketID'])) {
            return $result['TicketID'];
        } elseif (is_numeric($result)) {
            return [
                $result
            ];
        } else {
            return [];
        }
    }
}