<?php
namespace Otrs\Model;

class ArticleResponse
{

    /**
     *
     * @var int
     */
    private $articleId;

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
    private $replyTo;

    /**
     *
     * @var int
     */
    private $messageId;

    /**
     *
     * @var string
     */
    private $inReplyTo;

    /**
     *
     * @var string
     */
    private $references;

    /**
     *
     * @var string
     */
    private $senderType;

    /**
     *
     * @var int
     */
    private $senderTypeId;

    /**
     *
     * @var string
     */
    private $articleType;

    /**
     *
     * @var int
     */
    private $articleTypeId;

    /**
     *
     * @var string
     */
    private $contentType;

    /**
     *
     * @var string
     */
    private $charset;

    /**
     *
     * @var string
     */
    private $mimeType;

    /**
     *
     * @var string
     */
    private $incomingType;

    /**
     *
     * @var DynamicFieldResponse[]
     */
    private $dynamicFields = [];

    /**
     *
     * @var AttachmentResponse[]
     */
    private $attachments = [];

    /**
     * Constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->articleId = isset($data['ArticleID']) ? $data['ArticleID'] : null;
        $this->from = isset($data['From']) ? $data['From'] : null;
        $this->to = isset($data['To']) ? $data['To'] : null;
        $this->cc = isset($data['Cc']) ? $data['Cc'] : null;
        $this->subject = isset($data['Subject']) ? $data['Subject'] : null;
        $this->body = isset($data['Body']) ? $data['Body'] : null;
        $this->replyTo = isset($data['ReplyTo']) ? $data['ReplyTo'] : null;
        $this->messageId = isset($data['MessageID']) ? $data['MessageID'] : null;
        $this->inReplyTo = isset($data['InReplyTo']) ? $data['InReplyTo'] : null;
        $this->references = isset($data['References']) ? $data['References'] : null;
        $this->senderType = isset($data['SenderType']) ? $data['SenderType'] : null;
        $this->senderTypeId = isset($data['SenderTypeID']) ? $data['SenderTypeID'] : null;
        $this->articleType = isset($data['ArticleType']) ? $data['ArticleType'] : null;
        $this->articleTypeId = isset($data['ArticleTypeID']) ? $data['ArticleTypeID'] : null;
        $this->contentType = isset($data['ContentType']) ? $data['ContentType'] : null;
        $this->charset = isset($data['Charset']) ? $data['Charset'] : null;
        $this->mimeType = isset($data['MimeType']) ? $data['MimeType'] : null;
        $this->incomingType = isset($data['IncomingTime']) ? $data['IncomingTime'] : null;
        if (isset($data['DynamicField'])) {
            if (is_array($data['DynamicField'])) {
                $this->dynamicFields = array_map(function ($v) {
                    return new DynamicFieldResponse(get_object_vars($v));
                }, $data['DynamicField']);
            } else {
                $this->dynamicFields = [
                    new DynamicFieldResponse(get_object_vars($data['DynamicField']))
                ];
            }
        }
        if (isset($data['Attachment'])) {
            if (is_array($data['Attachment'])) {
                $this->attachments = array_map(function ($v) {
                    return new AttachmentResponse(get_object_vars($v));
                }, $data['Attachment']);
            } else {
                $this->attachments = [
                    new AttachmentResponse(get_object_vars($data['Attachment']))
                ];
            }
        }
    }

    /**
     *
     * @return int
     */
    public function getArticleId()
    {
        return $this->articleId;
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
     * @return string
     */
    public function getTo()
    {
        return $this->to;
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
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
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
     * @return string
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     *
     * @return int
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     *
     * @return string
     */
    public function getInReplyTo()
    {
        return $this->inReplyTo;
    }

    /**
     *
     * @return string
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     *
     * @return string
     */
    public function getSenderType()
    {
        return $this->senderType;
    }

    /**
     *
     * @return int
     */
    public function getSenderTypeId()
    {
        return $this->senderTypeId;
    }

    /**
     *
     * @return string
     */
    public function getArticleType()
    {
        return $this->articleType;
    }

    /**
     *
     * @return int
     */
    public function getArticleTypeId()
    {
        return $this->articleTypeId;
    }

    /**
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     *
     * @return string
     */
    public function getCharset()
    {
        return $this->charset;
    }

    /**
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     *
     * @return string
     */
    public function getIncomingType()
    {
        return $this->incomingType;
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
     * @return AttachmentResponse[]
     */
    public function getAttachments()
    {
        return $this->attachments;
    }
}