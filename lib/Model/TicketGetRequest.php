<?php
namespace Otrs\Model;

class TicketGetRequest
{

    const ARTICLE_ORDER_ASC = 'Asc';

    const ARTICLE_ORDER_DESC = 'Desc';

    /**
     *
     * @var int[]
     */
    private $ticketIds = [];

    /**
     *
     * @var boolean
     */
    private $dynamicFields = false;

    /**
     *
     * @var boolean
     */
    private $allArticles = false;

    /**
     *
     * @var string[]
     */
    private $articleSenderTypes;

    /**
     *
     * @var string
     */
    private $articleOrder = self::ARTICLE_ORDER_ASC;

    /**
     *
     * @var int
     */
    private $articleLimit;

    /**
     *
     * @var boolean
     */
    private $attachments = false;

    /**
     *
     * @var boolean
     */
    private $htmlBodyAsAttachment = false;

    /**
     * Constructor.
     *
     * @param int[] $ticketIds
     */
    public function __construct(array $ticketIds)
    {
        $this->ticketIds = $ticketIds;
    }

    /**
     *
     * @return int[]
     */
    public function getTicketIds()
    {
        return $this->ticketIds;
    }

    /**
     *
     * @param int $ticketId
     * @return \Otrs\Model\TicketGetRequest
     */
    public function addTicketId($ticketId)
    {
        $this->ticketIds[] = $ticketId;
        return $this;
    }

    /**
     * Returns whether dynamic fields should be included on the ticket content.
     *
     * @return boolean
     */
    public function getDynamicFields()
    {
        return $this->dynamicFields;
    }

    /**
     *
     * @param boolean $dynamicFields
     * @return \Otrs\Model\TicketGetRequest
     */
    public function setDynamicFields($dynamicFields)
    {
        $this->dynamicFields = $dynamicFields;
        return $this;
    }

    /**
     * Returns whether articles should be included for tickets.
     *
     * @return boolean
     */
    public function getAllArticles()
    {
        return $this->allArticles;
    }

    /**
     *
     * @param boolean $allArticles
     * @return \Otrs\Model\TicketGetRequest
     */
    public function setAllArticles($allArticles)
    {
        $this->allArticles = $allArticles;
        return $this;
    }

    /**
     * Returns which article sender types should be included in the result.
     *
     * @return string[]
     */
    public function getArticleSenderTypes()
    {
        return $this->articleSenderTypes;
    }

    /**
     *
     * @param string $articleSenderType
     * @return \Otrs\Model\TicketGetRequest
     */
    public function addArticleSenderType($articleSenderType)
    {
        $this->articleSenderTypes[] = $articleSenderType;
        return $this;
    }

    /**
     *
     * @param string[] $articleSenderTypes
     * @return \Otrs\Model\TicketGetRequest
     */
    public function setArticleSenderTypes(array $articleSenderTypes)
    {
        $this->articleSenderTypes = $articleSenderTypes;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getArticleOrder()
    {
        return $this->articleOrder;
    }

    /**
     *
     * @param string $articleOrder
     * @return \Otrs\Model\TicketGetRequest
     */
    public function setArticleOrder($articleOrder)
    {
        $this->articleOrder = $articleOrder;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getArticleLimit()
    {
        return $this->articleLimit;
    }

    /**
     *
     * @param int $articleLimit
     * @return \Otrs\Model\TicketGetRequest
     */
    public function setArticleLimit($articleLimit)
    {
        $this->articleLimit = $articleLimit;
        return $this;
    }

    /**
     * Return whether attachments for articles should be included on ticket data.
     *
     * @return boolean
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     *
     * @param boolean $attachments
     * @return \Otrs\Model\TicketGetRequest
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
        return $this;
    }

    /**
     * Returns whether the HTML body version of each article should be added to the attachments list.
     *
     * @return boolean
     */
    public function getHtmlBodyAsAttachment()
    {
        return $this->htmlBodyAsAttachment;
    }

    /**
     *
     * @param boolean $htmlBodyAsAttachment
     * @return \Otrs\Model\TicketGetRequest
     */
    public function setHtmlBodyAsAttachment($htmlBodyAsAttachment)
    {
        $this->htmlBodyAsAttachment = $htmlBodyAsAttachment;
        return $this;
    }

    public function toArray()
    {
        $result = [];
        $result['TicketID'] = $this->ticketIds;
        if ($this->dynamicFields !== null) {
            $result['DynamicFields'] = $this->dynamicFields;
        }
        if ($this->allArticles !== null) {
            $result['AllArticles'] = $this->allArticles;
        }
        if ($this->articleSenderTypes !== null) {
            $result['ArticleSenderType'] = $this->articleSenderTypes;
        }
        if ($this->articleOrder !== null) {
            $result['ArticleOrder'] = $this->articleOrder;
        }
        if ($this->articleLimit !== null) {
            $result['ArticleLimit'] = $this->articleLimit;
        }
        if ($this->attachments !== null) {
            $result['Attachments'] = $this->attachments;
        }
        if ($this->htmlBodyAsAttachment !== null) {
            $result['HTMLBodyAsAttachment'] = $this->htmlBodyAsAttachment;
        }
        return $result;
    }
}