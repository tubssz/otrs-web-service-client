<?php
namespace Otrs\Model;

class DynamicFieldFilter
{

    /**
     *
     * @var string
     */
    private $name;

    /**
     *
     * @var string[]
     */
    private $equals;

    /**
     *
     * @var string[]
     */
    private $like;

    /**
     *
     * @var string[]
     */
    private $greaterThan;

    /**
     *
     * @var string[]
     */
    private $greaterThanEquals;

    /**
     *
     * @var string[]
     */
    private $smallerThan;

    /**
     *
     * @var string[]
     */
    private $smallerThanEquals;

    /**
     * Constructor.
     *
     * @param string $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @return string[]
     */
    public function getEquals()
    {
        return $this->equals;
    }

    /**
     *
     * @param string[] $equals
     * @return \Otrs\Model\DynamicFieldFilter
     */
    public function setEquals($equals)
    {
        $this->equals = $equals;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getLike()
    {
        return $this->like;
    }

    /**
     *
     * @param string[] $like
     * @return \Otrs\Model\DynamicFieldFilter
     */
    public function setLike($like)
    {
        $this->like = $like;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getGreaterThan()
    {
        return $this->greaterThan;
    }

    /**
     *
     * @param string[] $greaterThan
     * @return \Otrs\Model\DynamicFieldFilter
     */
    public function setGreaterThan($greaterThan)
    {
        $this->greaterThan = $greaterThan;
        return $this;
    }

    /**
     *
     * @return the string
     */
    public function getGreaterThanEquals()
    {
        return $this->greaterThanEquals;
    }

    /**
     *
     * @param string[] $greaterThanEquals
     * @return \Otrs\Model\DynamicFieldFilter
     */
    public function setGreaterThanEquals($greaterThanEquals)
    {
        $this->greaterThanEquals = $greaterThanEquals;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getSmallerThan()
    {
        return $this->smallerThan;
    }

    /**
     *
     * @param string[] $smallerThan
     * @return \Otrs\Model\DynamicFieldFilter
     */
    public function setSmallerThan($smallerThan)
    {
        $this->smallerThan = $smallerThan;
        return $this;
    }

    /**
     *
     * @return string[]
     */
    public function getSmallerThanEquals()
    {
        return $this->smallerThanEquals;
    }

    /**
     *
     * @param string[] $smallerThanEquals
     * @return \Otrs\Model\DynamicFieldFilter
     */
    public function setSmallerThanEquals($smallerThanEquals)
    {
        $this->smallerThanEquals = $smallerThanEquals;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function toArray()
    {
        $result = [];
        if ($this->equals !== null) {
            $result['Equals'] = $this->equals;
        }
        if ($this->like !== null) {
            $result['Like'] = $this->like;
        }
        if ($this->greaterThan !== null) {
            $result['GreaterThan'] = $this->greaterThan;
        }
        if ($this->greaterThanEquals !== null) {
            $result['GreaterThanEquals'] = $this->greaterThanEquals;
        }
        if ($this->smallerThan !== null) {
            $result['SmallerThan'] = $this->smallerThan;
        }
        if ($this->smallerThanEquals !== null) {
            $result['SmallerThanEquals'] = $this->smallerThanEquals;
        }
        return $result;
    }
}