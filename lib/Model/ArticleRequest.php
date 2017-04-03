<?php
namespace Otrs\Model;

class ArticleRequest
{

    /**
     *
     * @var int
     */
    private $articleTypeId;

    /**
     *
     * @var string
     */
    private $articleType;

    /**
     *
     * @var int
     */
    private $senderTypeId;

    /**
     *
     * @var string
     */
    private $senderType;

    /**
     *
     * @var string
     */
    private $autoResponseType;

    /**
     *
     * @var string
     */
    private $from;

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
    private $contentType;

    /**
     *
     * @var string
     */
    private $mimeType = 'text/plain';

    /**
     *
     * @var string
     */
    private $charset = 'utf8';

    /**
     *
     * @var string
     */
    private $historyType;

    /**
     *
     * @var string
     */
    private $historyComment;

    /**
     *
     * @var int
     */
    private $timeUnit = 0;

    /**
     *
     * @var boolean
     */
    private $noAgentNotify;

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
    public function getArticleType()
    {
        return $this->articleType;
    }

    /**
     *
     * @param string $articleType
     * @return \Otrs\Model\TicketCreateRequest\Article
     */
    public function setArticleType($articleType)
    {
        $this->articleType = $articleType;
        return $this;
    }

    /**
     *
     * @param int $articleTypeId
     * @return \Otrs\Model\Article
     */
    public function setArticleTypeId($articleTypeId)
    {
        $this->articleTypeId = $articleTypeId;
        return $this;
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
     * @param string $senderType
     * @return \Otrs\Model\TicketCreateRequest\Article
     */
    public function setSenderType($senderType)
    {
        $this->senderType = $senderType;
        return $this;
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
     * @param int $senderTypeId
     * @return \Otrs\Model\Article
     */
    public function setSenderTypeId($senderTypeId)
    {
        $this->senderTypeId = $senderTypeId;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getAutoResponseType()
    {
        return $this->autoResponseType;
    }

    /**
     *
     * @param string $autoResponseType
     * @return \Otrs\Model\Article
     */
    public function setAutoResponseType($autoResponseType)
    {
        $this->autoResponseType = $autoResponseType;
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
     * @return \Otrs\Model\Article
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
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     *
     * @param string $subject
     * @return \Otrs\Model\Article
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
     * @return \Otrs\Model\Article
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
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     *
     * @param string $contentType
     * @return \Otrs\Model\Article
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        return $this;
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
     * @param string $mimeType
     * @return \Otrs\Model\Article
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
        return $this;
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
     * @param string $charset
     * @return \Otrs\Model\Article
     */
    public function setCharset($charset)
    {
        $this->charset = $charset;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getHistoryType()
    {
        return $this->historyType;
    }

    /**
     *
     * @param string $historyType
     * @return \Otrs\Model\Article
     */
    public function setHistoryType($historyType)
    {
        $this->historyType = $historyType;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getHistoryComment()
    {
        return $this->historyComment;
    }

    /**
     *
     * @param string $historyComment
     * @return \Otrs\Model\Article
     */
    public function setHistoryComment($historyComment)
    {
        $this->historyComment = $historyComment;
        return $this;
    }

    /**
     *
     * @return int
     */
    public function getTimeUnit()
    {
        return $this->timeUnit;
    }

    /**
     *
     * @param int $timeUnit
     * @return \Otrs\Model\Article
     */
    public function setTimeUnit($timeUnit)
    {
        $this->timeUnit = $timeUnit;
        return $this;
    }

    /**
     *
     * @return boolean
     */
    public function getNoAgentNotify()
    {
        return $this->noAgentNotify;
    }

    /**
     *
     * @param boolean $noAgentNotify
     * @return \Otrs\Model\Article
     */
    public function setNoAgentNotify($noAgentNotify)
    {
        $this->noAgentNotify = $noAgentNotify;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function toArray()
    {
        $result = [];
        if ($this->articleTypeId !== null) {
            $result['ArticleTypeID'] = $this->articleTypeId;
        }
        if ($this->articleType !== null) {
            $result['ArticleType'] = $this->articleType;
        }
        if ($this->senderTypeId !== null) {
            $result['SenderTypeID'] = $this->senderTypeId;
        }
        if ($this->senderType !== null) {
            $result['SenderType'] = $this->senderType;
        }
        if ($this->autoResponseType !== null) {
            $result['AutoResponseType'] = $this->autoResponseType;
        }
        if ($this->from !== null) {
            $result['From'] = $this->from;
        }
        if ($this->subject !== null) {
            $result['Subject'] = $this->subject;
        }
        if ($this->body !== null) {
            $result['Body'] = $this->body;
        }
        if ($this->contentType !== null) {
            $result['ContentType'] = $this->contentType;
        }
        if ($this->mimeType !== null) {
            $result['MimeType'] = $this->mimeType;
        }
        if ($this->charset !== null) {
            $result['Charset'] = $this->charset;
        }
        if ($this->historyType !== null) {
            $result['HistoryType'] = $this->historyType;
        }
        if ($this->historyComment !== null) {
            $result['HistoryComment'] = $this->historyComment;
        }
        if ($this->timeUnit !== null) {
            $result['TimeUnit'] = $this->timeUnit;
        }
        if ($this->noAgentNotify !== null) {
            $result['NoAgentNotify'] = $this->noAgentNotify;
        }
        return $result;
    }
}