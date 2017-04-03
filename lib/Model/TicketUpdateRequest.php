<?php
namespace Otrs\Model;

class TicketUpdateRequest extends TicketCreateRequest
{

    /**
     *
     * @var int
     */
    private $ticketId;

    /**
     *
     * @var string
     */
    private $ticketNumber;

    /**
     *
     * @return int
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     *
     * @param int $ticketId
     * @return \Otrs\Model\TicketUpdateRequest
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     *
     * @param string $ticketNumber
     * @return \Otrs\Model\TicketUpdateRequest
     */
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function toArray()
    {
        $result = parent::toArray();
        if (! empty($this->ticketId)) {
            $result['TicketID'] = $this->ticketId;
        }
        if (! empty($this->ticketNumber)) {
            $result['TicketNumber'] = $this->ticketNumber;
        }
        return $result;
    }
}