<?php
namespace Otrs\Model;

class DynamicFieldRequest
{

    /**
     *
     * @var string
     */
    private $name;

    /**
     *
     * @var string
     */
    private $value;

    /**
     * Constructor.
     *
     * @param string $name
     * @param string $value
     */
    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
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
     * @param string $name
     * @return \Otrs\Model\DynamicField
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     *
     * @param string $value
     * @return \Otrs\Model\DynamicField
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     *
     * @return array
     */
    public function toArray()
    {
        return [
            'Name' => $this->getName(),
            'Value' => $this->getValue()
        ];
    }
}