<?php
namespace Otrs\Model;

class DynamicFieldResponse
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
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->name = isset($data['Name']) ? $data['Name'] : null;
        $this->value = isset($data['Value']) ? $data['Value'] : null;
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
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}