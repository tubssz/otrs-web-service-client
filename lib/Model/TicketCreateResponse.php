<?php
namespace Otrs\Model;

class TicketCreateResponse
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
     * @var int
     */
    private $articleId;

    /**
     * Constructor.
     *
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->ticketId = isset($array['TicketID']) ? $array['TicketID'] : null;
        $this->ticketNumber = isset($array['TicketNumber']) ? $array['TicketNumber'] : null;
        $this->articleId = isset($array['ArticleID']) ? $array['ArticleID'] : null;
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
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     *
     * @return int
     */
    public function getArticleId()
    {
        return $this->articleId;
    }
}