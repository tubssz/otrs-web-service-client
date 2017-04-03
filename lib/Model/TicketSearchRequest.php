<?php
namespace Otrs\Model;

use Otrs\Client;

class TicketSearchRequest
{

    const ORDER_BY_ASC = 'up';

    const ORDER_BY_DESC = 'down';

    const SORT_BY_OWNER = 'Owner';

    const SORT_BY_RESPONSIBLE = 'Responsible';

    const SORT_BY_CUSTOMER_ID = 'CustomerID';

    const SORT_BY_STATE = 'State';

    const SORT_BY_TICKER_NUMBER = 'TicketNumber';

    const SORT_BY_QUEUE = 'Queue';

    const SORT_BY_PRIORITY = 'Priority';

    const SORT_BY_AGE = 'Age';

    const SORT_BY_TYPE = 'Type';

    const SORT_BY_LOCK = 'Lock';

    const SORT_BY_CHANGED = 'Changed';

    const SORT_BY_TITLE = 'Title';

    const SORT_BY_SERVICE = 'Service';

    const SORT_BY_SLA = 'SLA';

    const SORT_BY_PENDING_TIME = 'PendingTime';

    const SORT_BY_DYNAMIC_FIELD = 'DynamicField_';

    /**
     *
     * @var string[]
     */
    private $ticketNumber;

    /**
     *
     * @var string[]
     */
    private $title;

    /**
     *
     * @var string[]
     */
    private $queues;

    /**
     *
     * @var int[]
     */
    private $queueIds;

    /**
     *
     * @var boolean
     */
    private $useSubQueues = false;

    /**
     *
     * @var string[]
     */
    private $types;

    /**
     *
     * @var int[]
     */
    private $typeIds;

    /**
     *
     * @var string[]
     */
    private $states;

    /**
     *
     * @var int[]
     */
    private $stateIds;

    /**
     *
     * @var string[]
     */
    private $stateType;

    /**
     *
     * @var int[]
     */
    private $stateTypeIds;

    /**
     *
     * @var string[]
     */
    private $priorities;

    /**
     *
     * @var int[]
     */
    private $priorityIds;

    /**
     *
     * @var string[]
     */
    private $services;

    /**
     *
     * @var int[]
     */
    private $serviceIds;

    /**
     *
     * @var string[]
     */
    private $slas;

    /**
     *
     * @var int[]
     */
    private $slaIds;

    /**
     *
     * @var int[]
     */
    private $ownerIds;

    /**
     *
     * @var int[]
     */
    private $responsibleIds;

    /**
     *
     * @var string[]
     */
    private $customerIds;

    /**
     *
     * @var string[]
     */
    private $customerUserLogin;

    /**
     *
     * @var int[]
     */
    private $createdUserIds;

    /**
     *
     * @var string
     */
    private $from;

    /**
     *
     * @var string
     */
    private $to;

    /**
     *
     * @var string
     */
    private $cc;

    /**
     *
     * @var string
     */
    private $subject;

    /**
     *
     * @var string
     */
    private $body;

    /**
     *
     * @var string
     */
    private $attachmentName;

    /**
     *
     * @var string
     */
    private $fullTextIndex = false;

    /**
     *
     * @var DynamicFieldFilter[]
     */
    private $dynamicFields = [];

    /**
     *
     * @var int
     */
    private $articleCreateTimeOlderMinutes;

    /**
     *
     * @var int
     */
    private $articleCreateTimeNewerMinutes;

    /**
     *
     * @var \DateTime
     */
    private $articleCreateTimeNewerDate;

    /**
     *
     * @var \DateTime
     */
    private $articleCreateTimeOlderDate;

    /**
     *
     * @var int
     */
    private $ticketCreateTimeOlderMinutes;

    /**
     *
     * @var int
     */
    private $ticketCreateTimeNewerMinutes;

    /**
     *
     * @var \DateTime
     */
    private $ticketCreateTimeNewerDate;

    /**
     *
     * @var \DateTime
     */
    private $ticketCreateTimeOlderDate;

    /**
     *
     * @var int
     */
    private $ticketChangeTimeOlderMinutes;

    /**
     *
     * @var int
     */
    private $ticketChangeTimeNewerMinutes;

    /**
     *
     * @var \DateTime
     */
    private $ticketChangeTimeOlderDate;

    /**
     *
     * @var \DateTime
     */
    private $ticketChangeTimeNewerDate;

    /**
     *
     * @var int
     */
    private $ticketLastChangeTimeOlderMinutes;

    /**
     *
     * @var int
     */
    private $ticketLastChangeTimeNewerMinutes;

    /**
     *
     * @var \DateTime
     */
    private $ticketLastChangeTimeNewerDate;

    /**
     *
     * @var \DateTime
     */
    private $ticketLastChangeTimeOlderDate;

    /**
     *
     * @var int
     */
    private $ticketCloseTimeOlderMinutes;

    /**
     *
     * @var int
     */
    private $ticketCloseTimeNewerMinutes;

    /**
     *
     * @var \DateTime
     */
    private $ticketCloseTimeNewerDate;

    /**
     *
     * @var \DateTime
     */
    private $ticketCloseTimeOlderDate;

    /**
     *
     * @var int
     */
    private $ticketPendingTimeOlderMinutes;

    /**
     *
     * @var int
     */
    private $ticketPendingTimeNewerMinutes;

    /**
     *
     * @var \DateTime
     */
    private $ticketPendingTimeNewerDate;

    /**
     *
     * @var \DateTime
     */
    private $ticketPendingTimeOlderDate;

    /**
     *
     * @var boolean
     */
    private $archiveFlag;

    /**
     *
     * @var string[]
     */
    private $orderBy;

    /**
     *
     * @var string[]
     */
    private $sortBy;

    /**
     *
     * @return string[]
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     *
     * @param string[] $ticketNumber
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     *
     * @param string[] $title
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getQueues()
    {
        return $this->queues;
    }

    /**
     *
     * @param string[] $queues
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setQueues($queues)
    {
        $this->queues = $queues;
        return $this;
    }

    /**
     *
     * @return int[]
     */
    public function getQueueIds()
    {
        return $this->queueIds;
    }

    /**
     *
     * @param int[] $queueIds
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setQueueIds($queueIds)
    {
        $this->queueIds = $queueIds;
        return $this;
    }

    /**
     *
     * @return boolean
     */
    public function getUseSubQueues()
    {
        return $this->useSubQueues;
    }

    /**
     *
     * @param boolean $useSubQueues
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setUseSubQueues($useSubQueues)
    {
        $this->useSubQueues = $useSubQueues;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     *
     * @param string[] $types
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTypes($types)
    {
        $this->types = $types;
        return $this;
    }

    /**
     *
     * @return int[]
     */
    public function getTypeIds()
    {
        return $this->typeIds;
    }

    /**
     *
     * @param int[] $typeIds
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTypeIds($typeIds)
    {
        $this->typeIds = $typeIds;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getStates()
    {
        return $this->states;
    }

    /**
     *
     * @param string[] $states
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setStates($states)
    {
        $this->states = $states;
        return $this;
    }

    /**
     *
     * @return int[]
     */
    public function getStateIds()
    {
        return $this->stateIds;
    }

    /**
     *
     * @param int[] $stateIds
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setStateIds($stateIds)
    {
        $this->stateIds = $stateIds;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getStateType()
    {
        return $this->stateType;
    }

    /**
     *
     * @param string[] $stateType
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setStateType($stateType)
    {
        $this->stateType = $stateType;
        return $this;
    }

    /**
     *
     * @return int[]
     */
    public function getStateTypeIds()
    {
        return $this->stateTypeIds;
    }

    /**
     *
     * @param int[] $stateTypeIds
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setStateTypeIds($stateTypeIds)
    {
        $this->stateTypeIds = $stateTypeIds;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getPriorities()
    {
        return $this->priorities;
    }

    /**
     *
     * @param string[] $priorities
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setPriorities($priorities)
    {
        $this->priorities = $priorities;
        return $this;
    }

    /**
     *
     * @return int[]
     */
    public function getPriorityIds()
    {
        return $this->priorityIds;
    }

    /**
     *
     * @param int[] $priorityIds
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setPriorityIds($priorityIds)
    {
        $this->priorityIds = $priorityIds;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     *
     * @param string[] $services
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setServices($services)
    {
        $this->services = $services;
        return $this;
    }

    /**
     *
     * @return int[]
     */
    public function getServiceIds()
    {
        return $this->serviceIds;
    }

    /**
     *
     * @param int[] $serviceIds
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setServiceIds($serviceIds)
    {
        $this->serviceIds = $serviceIds;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getSlas()
    {
        return $this->slas;
    }

    /**
     *
     * @param string[] $slas
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setSlas($slas)
    {
        $this->slas = $slas;
        return $this;
    }

    /**
     *
     * @return int[]
     */
    public function getSlaIds()
    {
        return $this->slaIds;
    }

    /**
     *
     * @param int[] $slaIds
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setSlaIds($slaIds)
    {
        $this->slaIds = $slaIds;
        return $this;
    }

    /**
     *
     * @return int[]
     */
    public function getOwnerIds()
    {
        return $this->ownerIds;
    }

    /**
     *
     * @param int[] $ownerIds
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setOwnerIds($ownerIds)
    {
        $this->ownerIds = $ownerIds;
        return $this;
    }

    /**
     *
     * @return int[]
     */
    public function getResponsibleIds()
    {
        return $this->responsibleIds;
    }

    /**
     *
     * @param int[] $responsibleIds
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setResponsibleIds($responsibleIds)
    {
        $this->responsibleIds = $responsibleIds;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getCustomerIds()
    {
        return $this->customerIds;
    }

    /**
     *
     * @param string[] $customerIds
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setCustomerIds($customerIds)
    {
        $this->customerIds = $customerIds;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getCustomerUserLogin()
    {
        return $this->customerUserLogin;
    }

    /**
     *
     * @param string[] $customerUserLogin
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setCustomerUserLogin($customerUserLogin)
    {
        $this->customerUserLogin = $customerUserLogin;
        return $this;
    }

    /**
     *
     * @return int[]
     */
    public function getCreatedUserIds()
    {
        return $this->createdUserIds;
    }

    /**
     *
     * @param int[] $createdUserIds
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setCreatedUserIds($createdUserIds)
    {
        $this->createdUserIds = $createdUserIds;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     *
     * @param string $from
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     *
     * @param string $to
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTo($to)
    {
        $this->to = $to;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     *
     * @param string $cc
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     *
     * @param string $subject
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     *
     * @param string $body
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getAttachmentName()
    {
        return $this->attachmentName;
    }

    /**
     *
     * @param string $attachmentName
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setAttachmentName($attachmentName)
    {
        $this->attachmentName = $attachmentName;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getFullTextIndex()
    {
        return $this->fullTextIndex;
    }

    /**
     *
     * @param string $fullTextIndex
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setFullTextIndex($fullTextIndex)
    {
        $this->fullTextIndex = $fullTextIndex;
        return $this;
    }

    /**
     *
     * @return DynamicFieldFilter[]
     */
    public function getDynamicFields()
    {
        return $this->dynamicFields;
    }

    /**
     *
     * @param DynamicFieldFilter[] $dynamicFields
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setDynamicFields($dynamicFields)
    {
        $this->dynamicFields = $dynamicFields;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getArticleCreateTimeOlderMinutes()
    {
        return $this->articleCreateTimeOlderMinutes;
    }

    /**
     *
     * @param int $articleCreateTimeOlderMinutes
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setArticleCreateTimeOlderMinutes($articleCreateTimeOlderMinutes)
    {
        $this->articleCreateTimeOlderMinutes = $articleCreateTimeOlderMinutes;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getArticleCreateTimeNewerMinutes()
    {
        return $this->articleCreateTimeNewerMinutes;
    }

    /**
     *
     * @param int $articleCreateTimeNewerMinutes
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setArticleCreateTimeNewerMinutes($articleCreateTimeNewerMinutes)
    {
        $this->articleCreateTimeNewerMinutes = $articleCreateTimeNewerMinutes;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getArticleCreateTimeNewerDate()
    {
        return $this->articleCreateTimeNewerDate;
    }

    /**
     *
     * @param \DateTime $articleCreateTimeNewerDate
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setArticleCreateTimeNewerDate(\DateTime $articleCreateTimeNewerDate)
    {
        $this->articleCreateTimeNewerDate = $articleCreateTimeNewerDate;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getArticleCreateTimeOlderDate()
    {
        return $this->articleCreateTimeOlderDate;
    }

    /**
     *
     * @param \DateTime $articleCreateTimeOlderDate
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setArticleCreateTimeOlderDate(\DateTime $articleCreateTimeOlderDate)
    {
        $this->articleCreateTimeOlderDate = $articleCreateTimeOlderDate;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTicketCreateTimeOlderMinutes()
    {
        return $this->ticketCreateTimeOlderMinutes;
    }

    /**
     *
     * @param int $ticketCreateTimeOlderMinutes
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketCreateTimeOlderMinutes($ticketCreateTimeOlderMinutes)
    {
        $this->ticketCreateTimeOlderMinutes = $ticketCreateTimeOlderMinutes;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTicketCreateTimeNewerMinutes()
    {
        return $this->ticketCreateTimeNewerMinutes;
    }

    /**
     *
     * @param int $ticketCreateTimeNewerMinutes
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketCreateTimeNewerMinutes($ticketCreateTimeNewerMinutes)
    {
        $this->ticketCreateTimeNewerMinutes = $ticketCreateTimeNewerMinutes;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getTicketCreateTimeNewerDate()
    {
        return $this->ticketCreateTimeNewerDate;
    }

    /**
     *
     * @param \DateTime $ticketCreateTimeNewerDate
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketCreateTimeNewerDate(\DateTime $ticketCreateTimeNewerDate)
    {
        $this->ticketCreateTimeNewerDate = $ticketCreateTimeNewerDate;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getTicketCreateTimeOlderDate()
    {
        return $this->ticketCreateTimeOlderDate;
    }

    /**
     *
     * @param \DateTime $ticketCreateTimeOlderDate
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketCreateTimeOlderDate(\DateTime $ticketCreateTimeOlderDate)
    {
        $this->ticketCreateTimeOlderDate = $ticketCreateTimeOlderDate;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTicketChangeTimeOlderMinutes()
    {
        return $this->ticketChangeTimeOlderMinutes;
    }

    /**
     *
     * @param int $ticketChangeTimeOlderMinutes
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketChangeTimeOlderMinutes($ticketChangeTimeOlderMinutes)
    {
        $this->ticketChangeTimeOlderMinutes = $ticketChangeTimeOlderMinutes;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTicketChangeTimeNewerMinutes()
    {
        return $this->ticketChangeTimeNewerMinutes;
    }

    /**
     *
     * @param int $ticketChangeTimeNewerMinutes
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketChangeTimeNewerMinutes($ticketChangeTimeNewerMinutes)
    {
        $this->ticketChangeTimeNewerMinutes = $ticketChangeTimeNewerMinutes;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getTicketChangeTimeOlderDate()
    {
        return $this->ticketChangeTimeOlderDate;
    }

    /**
     *
     * @param \DateTime $ticketChangeTimeOlderDate
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketChangeTimeOlderDate(\DateTime $ticketChangeTimeOlderDate)
    {
        $this->ticketChangeTimeOlderDate = $ticketChangeTimeOlderDate;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getTicketChangeTimeNewerDate()
    {
        return $this->ticketChangeTimeNewerDate;
    }

    /**
     *
     * @param \DateTime $ticketChangeTimeNewerDate
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketChangeTimeNewerDate(\DateTime $ticketChangeTimeNewerDate)
    {
        $this->ticketChangeTimeNewerDate = $ticketChangeTimeNewerDate;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTicketLastChangeTimeOlderMinutes()
    {
        return $this->ticketLastChangeTimeOlderMinutes;
    }

    /**
     *
     * @param int $ticketLastChangeTimeOlderMinutes
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketLastChangeTimeOlderMinutes($ticketLastChangeTimeOlderMinutes)
    {
        $this->ticketLastChangeTimeOlderMinutes = $ticketLastChangeTimeOlderMinutes;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTicketLastChangeTimeNewerMinutes()
    {
        return $this->ticketLastChangeTimeNewerMinutes;
    }

    /**
     *
     * @param int $ticketLastChangeTimeNewerMinutes
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketLastChangeTimeNewerMinutes($ticketLastChangeTimeNewerMinutes)
    {
        $this->ticketLastChangeTimeNewerMinutes = $ticketLastChangeTimeNewerMinutes;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getTicketLastChangeTimeNewerDate()
    {
        return $this->ticketLastChangeTimeNewerDate;
    }

    /**
     *
     * @param \DateTime $ticketLastChangeTimeNewerDate
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketLastChangeTimeNewerDate(\DateTime $ticketLastChangeTimeNewerDate)
    {
        $this->ticketLastChangeTimeNewerDate = $ticketLastChangeTimeNewerDate;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getTicketLastChangeTimeOlderDate()
    {
        return $this->ticketLastChangeTimeOlderDate;
    }

    /**
     *
     * @param \DateTime $ticketLastChangeTimeOlderDate
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketLastChangeTimeOlderDate(\DateTime $ticketLastChangeTimeOlderDate)
    {
        $this->ticketLastChangeTimeOlderDate = $ticketLastChangeTimeOlderDate;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTicketCloseTimeOlderMinutes()
    {
        return $this->ticketCloseTimeOlderMinutes;
    }

    /**
     *
     * @param int $ticketCloseTimeOlderMinutes
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketCloseTimeOlderMinutes($ticketCloseTimeOlderMinutes)
    {
        $this->ticketCloseTimeOlderMinutes = $ticketCloseTimeOlderMinutes;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTicketCloseTimeNewerMinutes()
    {
        return $this->ticketCloseTimeNewerMinutes;
    }

    /**
     *
     * @param int $ticketCloseTimeNewerMinutes
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketCloseTimeNewerMinutes($ticketCloseTimeNewerMinutes)
    {
        $this->ticketCloseTimeNewerMinutes = $ticketCloseTimeNewerMinutes;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getTicketCloseTimeNewerDate()
    {
        return $this->ticketCloseTimeNewerDate;
    }

    /**
     *
     * @param \DateTime $ticketCloseTimeNewerDate
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketCloseTimeNewerDate(\DateTime $ticketCloseTimeNewerDate)
    {
        $this->ticketCloseTimeNewerDate = $ticketCloseTimeNewerDate;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getTicketCloseTimeOlderDate()
    {
        return $this->ticketCloseTimeOlderDate;
    }

    /**
     *
     * @param \DateTime $ticketCloseTimeOlderDate
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketCloseTimeOlderDate(\DateTime $ticketCloseTimeOlderDate)
    {
        $this->ticketCloseTimeOlderDate = $ticketCloseTimeOlderDate;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTicketPendingTimeOlderMinutes()
    {
        return $this->ticketPendingTimeOlderMinutes;
    }

    /**
     *
     * @param int $ticketPendingTimeOlderMinutes
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketPendingTimeOlderMinutes($ticketPendingTimeOlderMinutes)
    {
        $this->ticketPendingTimeOlderMinutes = $ticketPendingTimeOlderMinutes;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTicketPendingTimeNewerMinutes()
    {
        return $this->ticketPendingTimeNewerMinutes;
    }

    /**
     *
     * @param int $ticketPendingTimeNewerMinutes
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketPendingTimeNewerMinutes($ticketPendingTimeNewerMinutes)
    {
        $this->ticketPendingTimeNewerMinutes = $ticketPendingTimeNewerMinutes;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getTicketPendingTimeNewerDate()
    {
        return $this->ticketPendingTimeNewerDate;
    }

    /**
     *
     * @param \DateTime $ticketPendingTimeNewerDate
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketPendingTimeNewerDate(\DateTime $ticketPendingTimeNewerDate)
    {
        $this->ticketPendingTimeNewerDate = $ticketPendingTimeNewerDate;
        return $this;
    }

    /**
     *
     * @return \DateTime
     */
    public function getTicketPendingTimeOlderDate()
    {
        return $this->ticketPendingTimeOlderDate;
    }

    /**
     *
     * @param \DateTime $ticketPendingTimeOlderDate
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setTicketPendingTimeOlderDate(\DateTime $ticketPendingTimeOlderDate)
    {
        $this->ticketPendingTimeOlderDate = $ticketPendingTimeOlderDate;
        return $this;
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
     * @param boolean $archiveFlag
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setArchiveFlag($archiveFlag)
    {
        $this->archiveFlag = $archiveFlag;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     *
     * @param string[] $orderBy
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }

    /**
     *
     * @param string[] $sortBy
     * @return \Otrs\Model\TicketSearchRequest
     */
    public function setSortBy($sortBy)
    {
        $this->sortBy = $sortBy;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function toArray()
    {
        $result = [];
        if ($this->ticketNumber !== null) {
            $result['TicketNumber'] = $this->ticketNumber;
        }
        if ($this->title !== null) {
            $result['Title'] = $this->title;
        }
        if ($this->queues !== null) {
            $result['Queues'] = $this->queues;
        }
        if ($this->queueIds !== null) {
            $result['QueueIDs'] = $this->queueIds;
        }
        if ($this->useSubQueues !== null) {
            $result['UseSubQueues'] = $this->useSubQueues;
        }
        if ($this->types !== null) {
            $result['Types'] = $this->types;
        }
        if ($this->typeIds !== null) {
            $result['TypeIDs'] = $this->typeIds;
        }
        if ($this->states !== null) {
            $result['States'] = $this->states;
        }
        if ($this->stateIds !== null) {
            $result['StateIDs'] = $this->stateIds;
        }
        if ($this->stateType !== null) {
            $result['StateType'] = $this->stateType;
        }
        if ($this->stateTypeIds !== null) {
            $result['StateTypeIDs'] = $this->stateTypeIds;
        }
        if ($this->priorities !== null) {
            $result['Priorities'] = $this->priorities;
        }
        if ($this->priorityIds !== null) {
            $result['PriorityIDs'] = $this->priorityIds;
        }
        if ($this->services !== null) {
            $result['Services'] = $this->services;
        }
        if ($this->serviceIds !== null) {
            $result['ServiceIDs'] = $this->serviceIds;
        }
        if ($this->slas !== null) {
            $result['SLAs'] = $this->slas;
        }
        if ($this->slaIds !== null) {
            $result['SLAIDs'] = $this->slaIds;
        }
        if ($this->ownerIds !== null) {
            $result['OwnerIDs'] = $this->ownerIds;
        }
        if ($this->responsibleIds !== null) {
            $result['ResponsibleIDs'] = $this->responsibleIds;
        }
        if ($this->customerIds !== null) {
            $result['CustomerID'] = $this->customerIds;
        }
        if ($this->customerUserLogin !== null) {
            $result['CustomerUserLogin'] = $this->customerUserLogin;
        }
        if ($this->createdUserIds !== null) {
            $result['CreatedUserIDs'] = $this->createdUserIds;
        }
        if ($this->from !== null) {
            $result['From'] = $this->from;
        }
        if ($this->to !== null) {
            $result['To'] = $this->to;
        }
        if ($this->cc !== null) {
            $result['Cc'] = $this->cc;
        }
        if ($this->subject !== null) {
            $result['Subject'] = $this->subject;
        }
        if ($this->body !== null) {
            $result['Body'] = $this->body;
        }
        if ($this->attachmentName !== null) {
            $result['AttachmentName'] = $this->attachmentName;
        }
        if ($this->fullTextIndex !== null) {
            $result['FullTextIndex'] = $this->fullTextIndex;
        }
        if ($this->dynamicFields !== null) {
            foreach ($this->dynamicFields as $dynamicField) {
                $result['DynamicField_' . $dynamicField->getName()] = $dynamicField->toArray();
            }
        }
        if ($this->articleCreateTimeOlderMinutes !== null) {
            $result['ArticleCreateTimeOlderMinutes'] = $this->articleCreateTimeOlderMinutes;
        }
        if ($this->articleCreateTimeNewerMinutes !== null) {
            $result['ArticleCreateTimeNewerMinutes'] = $this->articleCreateTimeNewerMinutes;
        }
        if ($this->articleCreateTimeOlderDate !== null) {
            $result['ArticleCreateTimeOlderDate'] = $this->articleCreateTimeOlderDate->format(Client::DATE_FORMAT);
        }
        if ($this->articleCreateTimeNewerDate !== null) {
            $result['ArticleCreateTimeNewerDate'] = $this->articleCreateTimeNewerDate->format(Client::DATE_FORMAT);
        }
        if ($this->ticketCreateTimeOlderMinutes !== null) {
            $result['TicketCreateTimeOlderMinutes'] = $this->ticketCreateTimeOlderMinutes;
        }
        if ($this->ticketCreateTimeNewerMinutes !== null) {
            $result['TicketCreateTimeNewerMinutes'] = $this->ticketCreateTimeNewerMinutes;
        }
        if ($this->ticketCreateTimeOlderDate !== null) {
            $result['TicketCreateTimeOlderDate'] = $this->ticketCreateTimeOlderDate->format(Client::DATE_FORMAT);
        }
        if ($this->ticketCreateTimeNewerDate !== null) {
            $result['TicketCreateTimeNewerDate'] = $this->ticketCreateTimeNewerDate->format(Client::DATE_FORMAT);
        }
        if ($this->ticketChangeTimeOlderMinutes !== null) {
            $result['TicketChangeTimeOlderMinutes'] = $this->ticketChangeTimeOlderMinutes;
        }
        if ($this->ticketChangeTimeNewerMinutes !== null) {
            $result['TicketChangeTimeNewerMinutes'] = $this->ticketChangeTimeNewerMinutes;
        }
        if ($this->ticketChangeTimeOlderDate !== null) {
            $result['TicketChangeTimeOlderDate'] = $this->ticketChangeTimeOlderDate->format(Client::DATE_FORMAT);
        }
        if ($this->ticketChangeTimeNewerDate !== null) {
            $result['TicketChangeTimeNewerDate'] = $this->ticketChangeTimeNewerDate->format(Client::DATE_FORMAT);
        }
        if ($this->ticketLastChangeTimeOlderMinutes !== null) {
            $result['TicketLastChangeTimeOlderMinutes'] = $this->ticketLastChangeTimeOlderMinutes;
        }
        if ($this->ticketLastChangeTimeNewerMinutes !== null) {
            $result['TicketLastChangeTimeNewerMinutes'] = $this->ticketLastChangeTimeNewerMinutes;
        }
        if ($this->ticketLastChangeTimeOlderDate !== null) {
            $result['TicketLastChangeTimeOlderDate'] = $this->ticketLastChangeTimeOlderDate->format(Client::DATE_FORMAT);
        }
        if ($this->ticketLastChangeTimeNewerDate !== null) {
            $result['TicketLastChangeTimeNewerDate'] = $this->ticketLastChangeTimeNewerDate->format(Client::DATE_FORMAT);
        }
        if ($this->ticketCloseTimeOlderMinutes !== null) {
            $result['TicketCloseTimeOlderMinutes'] = $this->ticketCloseTimeOlderMinutes;
        }
        if ($this->ticketCloseTimeNewerMinutes !== null) {
            $result['TicketCloseTimeNewerMinutes'] = $this->ticketCloseTimeNewerMinutes;
        }
        if ($this->ticketCloseTimeOlderDate !== null) {
            $result['TicketCloseTimeOlderDate'] = $this->ticketCloseTimeOlderDate->format(Client::DATE_FORMAT);
        }
        if ($this->ticketCloseTimeNewerDate !== null) {
            $result['TicketCloseTimeNewerDate'] = $this->ticketCloseTimeNewerDate->format(Client::DATE_FORMAT);
        }
        if ($this->ticketPendingTimeOlderMinutes !== null) {
            $result['TicketPendingTimeOlderMinutes'] = $this->ticketPendingTimeOlderMinutes;
        }
        if ($this->ticketPendingTimeNewerMinutes !== null) {
            $result['TicketPendingTimeNewerMinutes'] = $this->ticketPendingTimeNewerMinutes;
        }
        if ($this->ticketPendingTimeOlderDate !== null) {
            $result['TicketPendingTimeOlderDate'] = $this->ticketPendingTimeOlderDate->format(Client::DATE_FORMAT);
        }
        if ($this->ticketPendingTimeNewerDate !== null) {
            $result['TicketPendingTimeNewerDate'] = $this->ticketPendingTimeNewerDate->format(Client::DATE_FORMAT);
        }
        if ($this->archiveFlag !== null) {
            $result['ArchiveFlags'] = $this->archiveFlag;
        }
        if ($this->orderBy !== null) {
            $result['OrderBy'] = $this->orderBy;
        }
        if ($this->sortBy !== null) {
            $result['SortBy'] = $this->sortBy;
        }
        return $result;
    }
}