<?php
namespace Otrs\Model;

class TicketCreateRequest
{

    /**
     *
     * @var TicketRequest
     */
    private $ticket;

    /**
     *
     * @var ArticleRequest
     */
    private $article;

    /**
     *
     * @var DynamicFieldRequest[]
     */
    private $dynamicFields = [];

    /**
     *
     * @var AttachmentRequest[]
     */
    private $attachments = [];

    /**
     *
     * @return TicketRequest
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     *
     * @param TicketRequest $ticket
     * @return \Otrs\Model\TicketCreateRequest
     */
    public function setTicket(TicketRequest $ticket)
    {
        $this->ticket = $ticket;
        return $this;
    }

    /**
     *
     * @return ArticleRequest
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     *
     * @param ArticleRequest $article
     * @return \Otrs\Model\TicketCreateRequest
     */
    public function setArticle(ArticleRequest $article)
    {
        $this->article = $article;
        return $this;
    }

    /**
     *
     * @return DynamicFieldRequest[]
     */
    public function getDynamicFields()
    {
        return $this->dynamicFields;
    }

    /**
     *
     * @param DynamicFieldRequest $dynamicField
     * @return \Otrs\Model\TicketCreateRequest
     */
    public function addDynamicField(DynamicFieldRequest $dynamicField)
    {
        $this->dynamicFields[] = $dynamicField;
        return $this;
    }

    /**
     *
     * @param DynamicFieldRequest[] $dynamicFields
     * @return \Otrs\Model\TicketCreateRequest
     */
    public function setDynamicFields(array $dynamicFields)
    {
        $this->dynamicFields = $dynamicFields;
        return $this;
    }

    /**
     *
     * @return AttachmentRequest[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     *
     * @param AttachmentRequest $attachment
     * @return \Otrs\Model\TicketCreateRequest
     */
    public function addAttachment(AttachmentRequest $attachment)
    {
        $this->attachments[] = $attachment;
        return $this;
    }

    /**
     *
     * @param AttachmentRequest[] $attachments
     * @return \Otrs\Model\TicketCreateRequest
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function toArray()
    {
        $result = [];
        if (! empty($this->ticket)) {
            $result['Ticket'] = $this->ticket->toArray();
        }
        if (! empty($this->article)) {
            $result['Article'] = $this->article->toArray();
        }
        if (! empty($this->dynamicFields)) {
            $result['DynamicField'] = array_map(function ($v) {
                return $v->toArray();
            }, $this->dynamicFields);
        }
        if (! empty($this->attachments)) {
            $result['Attachment'] = array_map(function ($v) {
                return $v->toArray();
            }, $this->attachments);
        }
        return $result;
    }
}