<?php
namespace Otrs\Model;

class TicketResponse
{

    /**
     *
     * @var string
     */
    private $ticketNumber;

    /**
     *
     * @var string
     */
    private $title;

    /**
     *
     * @var int
     */
    private $ticketId;

    /**
     *
     * @var string
     */
    private $state;

    /**
     *
     * @var int
     */
    private $stateId;

    /**
     *
     * @var string
     */
    private $stateType;

    /**
     *
     * @var string
     */
    private $priority;

    /**
     *
     * @var int
     */
    private $priorityId;

    /**
     *
     * @var string
     */
    private $lock;

    /**
     *
     * @var int
     */
    private $lockId;

    /**
     *
     * @var string
     */
    private $queue;

    /**
     *
     * @var int
     */
    private $queueId;

    /**
     *
     * @var string
     */
    private $customerId;

    /**
     *
     * @var string
     */
    private $customerUserId;

    /**
     *
     * @var string
     */
    private $owner;

    /**
     *
     * @var int
     */
    private $ownerId;

    /**
     *
     * @var string
     */
    private $type;

    /**
     *
     * @var int
     */
    private $typeId;

    /**
     *
     * @var string
     */
    private $sla;

    /**
     *
     * @var int
     */
    private $slaId;

    /**
     *
     * @var string
     */
    private $service;

    /**
     *
     * @var int
     */
    private $serviceId;

    /**
     *
     * @var string
     */
    private $responsible;

    /**
     *
     * @var int
     */
    private $responsibleId;

    /**
     *
     * @var int
     */
    private $age;

    /**
     *
     * @var \DateTime
     */
    private $created;

    /**
     *
     * @var string
     */
    private $createTimeUnix;

    /**
     *
     * @var int
     */
    private $createBy;

    /**
     *
     * @var \DateTime
     */
    private $changed;

    /**
     *
     * @var string
     */
    private $changeBy;

    /**
     *
     * @var boolean
     */
    private $archiveFlag;

    /**
     *
     * @var DynamicFieldResponse[]
     */
    private $dynamicFields = [];

    /**
     *
     * @var ArticleResponse[]
     */
    private $articles = [];

    /**
     * Constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->ticketNumber = isset($data['TicketNumber']) ? $data['TicketNumber'] : null;
        $this->title = isset($data['Title']) ? $data['Title'] : null;
        $this->ticketId = isset($data['TicketID']) ? $data['TicketID'] : null;
        $this->state = isset($data['State']) ? $data['State'] : null;
        $this->stateId = isset($data['StateID']) ? $data['StateID'] : null;
        $this->stateType = isset($data['StateType']) ? $data['StateType'] : null;
        $this->priority = isset($data['Priority']) ? $data['Priority'] : null;
        $this->priorityId = isset($data['PriorityID']) ? $data['PriorityID'] : null;
        $this->lock = isset($data['Lock']) ? $data['Lock'] : null;
        $this->lockId = isset($data['LockID']) ? $data['LockID'] : null;
        $this->queue = isset($data['Queue']) ? $data['Queue'] : null;
        $this->queueId = isset($data['QueueID']) ? $data['QueueID'] : null;
        $this->customerId = isset($data['CustomerID']) ? $data['CustomerID'] : null;
        $this->customerUserId = isset($data['CustomerUserID']) ? $data['CustomerUserID'] : null;
        $this->owner = isset($data['Owner']) ? $data['Owner'] : null;
        $this->ownerId = isset($data['OwnerID']) ? $data['OwnerID'] : null;
        $this->type = isset($data['Type']) ? $data['Type'] : null;
        $this->typeId = isset($data['TypeID']) ? $data['TypeID'] : null;
        $this->sla = isset($data['SLA']) ? $data['SLA'] : null;
        $this->slaId = isset($data['SLAID']) ? $data['SLAID'] : null;
        $this->service = isset($data['Service']) ? $data['Service'] : null;
        $this->serviceId = isset($data['ServiceID']) ? $data['ServiceID'] : null;
        $this->responsible = isset($data['Responsible']) ? $data['Responsible'] : null;
        $this->responsibleId = isset($data['ResponsibleID']) ? $data['ResponsibleID'] : null;
        $this->age = isset($data['Age']) ? $data['Age'] : null;
        $this->created = isset($data['Created']) ? new \DateTime($data['Created']) : null;
        $this->createTimeUnix = isset($data['CreateTimeUnix']) ? $data['CreateTimeUnix'] : null;
        $this->createBy = isset($data['CreateBy']) ? $data['CreateBy'] : null;
        $this->changed = isset($data['Changed']) ? new \DateTime($data['Changed']) : null;
        $this->changeBy = isset($data['ChangeBy']) ? $data['ChangeBy'] : null;
        $this->archiveFlag = isset($data['ArchiveFlag']) ? $data['ArchiveFlag'] == 'y' : null;
        if (isset($data['DynamicField'])) {
            if (is_array($data['DynamicField'])) {
                $this->dynamicFields = array_map(function ($v) {
                    return new DynamicFieldResponse(get_object_vars($v));
                }, $data['DynamicField']);
            } else {
                $this->dynamicFields = [
                    new DynamicFieldResponse($data['DynamicField'])
                ];
            }
        }
        if (isset($data['Article'])) {
            if (is_array($data['Article'])) {
                $this->articles = array_map(function ($v) {
                    return new ArticleResponse(get_object_vars($v));
                }, $data['Article']);
            } else {
                $this->articles = [
                    new ArticleResponse(get_object_vars($data['Article']))
                ];
            }
        }
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
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

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
     * @return string
     */
    public function getState()
    {
        return $this->state;
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
     * @return string
     */
    public function getStateType()
    {
        return $this->stateType;
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
     * @return int
     */
    public function getPriorityId()
    {
        return $this->priorityId;
    }

    /**
     *
     * @return string
     */
    public function getLock()
    {
        return $this->lock;
    }

    /**
     *
     * @return int
     */
    public function getLockId()
    {
        return $this->lockId;
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
     * @return int
     */
    public function getQueueId()
    {
        return $this->queueId;
    }

    /**
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     *
     * @return string
     */
    public function getCustomerUserId()
    {
        return $this->customerUserId;
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
     * @return int
     */
    public function getOwnerId()
    {
        return $this->ownerId;
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
     * @return int
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     *
     * @return string
     */
    public function getSla()
    {
        return $this->sla;
    }

    /**
     *
     * @return int
     */
    public function getSlaId()
    {
        return $this->slaId;
    }

    /**
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     *
     * @return int
     */
    public function getServiceId()
    {
        return $this->serviceId;
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
     * @return int
     */
    public function getResponsibleId()
    {
        return $this->responsibleId;
    }

    /**
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     *
     * @return string
     */
    public function getCreateTimeUnix()
    {
        return $this->createTimeUnix;
    }

    /**
     *
     * @return int
     */
    public function getCreateBy()
    {
        return $this->createBy;
    }

    /**
     *
     * @return \DateTime
     */
    public function getChanged()
    {
        return $this->changed;
    }

    /**
     *
     * @return string
     */
    public function getChangeBy()
    {
        return $this->changeBy;
    }

    /**
     *
     * @return boolean
     */
    public function getArchiveFlag()
    {
        return $this->archiveFlag;
    }

    /**
     *
     * @return DynamicFieldResponse[]
     */
    public function getDynamicFields()
    {
        return $this->dynamicFields;
    }

    /**
     *
     * @return ArticleResponse[]
     */
    public function getArticles()
    {
        return $this->articles;
    }
}