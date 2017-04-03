<?php
namespace Otrs\Model;

class AttachmentRequest
{

    /**
     *
     * @var string
     */
    private $content;

    /**
     *
     * @var string
     */
    private $contentType;

    /**
     *
     * @var string
     */
    private $filename;

    /**
     * Constructor.
     *
     * @param string $content
     * @param string $contentType
     * @param string $filename
     */
    public function __construct($content, $contentType, $filename)
    {
        $this->content = $content;
        $this->contentType = $contentType;
        $this->filename = $filename;
    }

    /**
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     *
     * @param string $content
     * @return \Otrs\Model\Attachment
     */
    public function setContent($content)
    {
        $this->content = $content;
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
     * @return \Otrs\Model\Attachment
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
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     *
     * @param string $filename
     * @return \Otrs\Model\Attachment
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'Content' => $this->getContent(),
            'ContentType' => $this->getContentType(),
            'Filename' => $this->getFilename()
        ];
    }
}