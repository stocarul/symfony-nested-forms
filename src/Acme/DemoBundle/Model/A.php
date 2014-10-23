<?php

namespace Acme\DemoBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class: A
 *
 */
class A
{
    protected $label;

    protected $bs;

    /**
     * __construct
     *
     */
    public function __construct()
    {
        $this->bs = new ArrayCollection();
    }

    /**
     * Set label
     *
     * @param string $label
     * @return A
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
     * Get bs
     *
     * @return B[]
     */
    public function getBs()
    {
        return $this->bs;
    }
}
