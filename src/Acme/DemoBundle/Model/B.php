<?php

namespace Acme\DemoBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class: B
 *
 */
class B
{
    /**
     * label
     *
     * @var string
     */
    protected $label;

    /**
     * cs
     *
     * @var C[]
     */
    protected $cs;

    public function __construct()
    {
        $this->cs = new ArrayCollection();
    }

    /**
     * Set label
     *
     * @param string $label
     * @return B
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Get cs
     *
     * @return C[]
     */
    public function getCs()
    {
        return $this->cs;
    }
}
