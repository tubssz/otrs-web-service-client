<?php
namespace Otrs\Model;

class AttachmentResponse
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
    private $contentAlternative;

    /**
     *
     * @var int
     */
    private $contentId;

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
     *
     * @var string
     */
    private $filesize;

    /**
     *
     * @var int
     */
    private $filesizeRaw;

    /**
     * Constructor.
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->content = isset($data['Content']) ? $data['Content'] : null;
        $this->contentAlternative = isset($data['ContentAlternative']) ? $data['ContentAlternative'] : null;
        $this->contentId = isset($data['ContentID']) ? $data['ContentID'] : null;
        $this->contentType = isset($data['ContentType']) ? $data['ContentType'] : null;
        $this->filename = isset($data['Filename']) ? $data['Filename'] : null;
        $this->filesize = isset($data['Filesize']) ? $data['Filesize'] : null;
        $this->filesizeRaw = isset($data['FilesizeRaw']) ? $data['FilesizeRaw'] : null;
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
     * @return string
     */
    public function getContentAlternative()
    {
        return $this->contentAlternative;
    }

    /**
     *
     * @return string
     */
    public function getContentId()
    {
        return $this->contentId;
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
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     *
     * @return string
     */
    public function getFilesize()
    {
        return $this->filesize;
    }

    /**
     *
     * @return string
     */
    public function getFilesizeRaw()
    {
        return $this->filesizeRaw;
    }
}