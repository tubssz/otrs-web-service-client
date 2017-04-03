<?php
namespace Otrs\Model;

class TicketRequest
{

    /**
     *
     * @var string
     */
    private $title;

    /**
     *
     * @var int
     */
    private $queueId;

    /**
     *
     * @var string
     */
    private $queue;

    /**
     *
     * @var int
     */
    private $typeId;

    /**
     *
     * @var string
     */
    private $type = 'default';

    /**
     *
     * @var int
     */
    private $stateId;

    /**
     *
     * @var string
     */
    private $state = 'new';

    /**
     *
     * @var int
     */
    private $priorityId;

    /**
     *
     * @var string
     */
    private $priority = '2 low';

    /**
     *
     * @var int
     */
    private $ownerId;

    /**
     *
     * @var string
     */
    private $owner;

    /**
     *
     * @var int
     */
    private $responsibleId;

    /**
     *
     * @var string
     */
    private $responsible;

    /**
     *
     * @var string
     */
    private $customerUser;

    /**
     *
     * @var int
     */
    private $customerId;

    /**
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     *
     * @param string $title
     * @return \Otrs\Model\Ticket
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getQueueId()
    {
        return $this->queueId;
    }

    /**
     *
     * @param int $queueId
     * @return \Otrs\Model\Ticket
     */
    public function setQueueId($queueId)
    {
        $this->queueId = $queueId;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     *
     * @param string $queue
     * @return \Otrs\Model\TicketCreateRequest\Ticket
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     *
     * @param int $typeId
     * @return \Otrs\Model\TicketCreateRequest\Ticket
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *
     * @param string $type
     * @return \Otrs\Model\TicketCreateRequest\Ticket
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getStateId()
    {
        return $this->stateId;
    }

    /**
     *
     * @param int $stateId
     * @return \Otrs\Model\Ticket
     */
    public function setStateId($stateId)
    {
        $this->stateId = $stateId;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     *
     * @param string $state
     * @return \Otrs\Model\TicketCreateRequest\Ticket
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getPriorityId()
    {
        return $this->priorityId;
    }

    /**
     *
     * @param int $priorityId
     * @return \Otrs\Model\Ticket
     */
    public function setPriorityId($priorityId)
    {
        $this->priorityId = $priorityId;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     *
     * @param string $priority
     * @return \Otrs\Model\TicketCreateRequest\Ticket
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getOwnerId()
    {
        return $this->ownerId;
    }

    /**
     *
     * @param int $ownerId
     * @return \Otrs\Model\Ticket
     */
    public function setOwnerId($ownerId)
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     *
     * @param string $owner
     * @return \Otrs\Model\TicketCreateRequest\Ticket
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getResponsibleId()
    {
        return $this->responsibleId;
    }

    /**
     *
     * @param int $responsibleId
     * @return \Otrs\Model\Ticket
     */
    public function setResponsibleId($responsibleId)
    {
        $this->responsibleId = $responsibleId;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     *
     * @param string $responsible
     * @return \Otrs\Model\TicketCreateRequest\Ticket
     */
    public function setResponsible($responsible)
    {
        $this->responsible = $responsible;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCustomerUser()
    {
        return $this->customerUser;
    }

    /**
     *
     * @param string $customerUser
     * @return \Otrs\Model\Ticket
     */
    public function setCustomerUser($customerUser)
    {
        $this->customerUser = $customerUser;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     *
     * @param int $customerId
     * @return \Otrs\Model\Ticket
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function toArray()
    {
        $result = [];
        if ($this->title !== null) {
            $result['Title'] = $this->title;
        }
        if ($this->queueId !== null) {
            $result['QueueID'] = $this->queueId;
        }
        if ($this->queue !== null) {
            $result['Queue'] = $this->queue;
        }
        if ($this->typeId !== null) {
            $result['TypeID'] = $this->typeId;
        }
        if ($this->type !== null) {
            $result['Type'] = $this->type;
        }
        if ($this->stateId !== null) {
            $result['StateID'] = $this->stateId;
        }
        if ($this->state !== null) {
            $result['State'] = $this->state;
        }
        if ($this->priorityId !== null) {
            $result['PriorityID'] = $this->priorityId;
        }
        if ($this->priority !== null) {
            $result['Priority'] = $this->priority;
        }
        if ($this->ownerId !== null) {
            $result['OwnerID'] = $this->ownerId;
        }
        if ($this->owner !== null) {
            $result['Owner'] = $this->owner;
        }
        if ($this->responsibleId !== null) {
            $result['ResponsibleID'] = $this->responsibleId;
        }
        if ($this->responsible !== null) {
            $result['Responsible'] = $this->responsible;
        }
        if ($this->customerUser !== null) {
            $result['CustomerUser'] = $this->customerUser;
        }
        if ($this->customerId !== null) {
            $result['CustomerID'] = $this->customerId;
        }
        return $result;
    }
}