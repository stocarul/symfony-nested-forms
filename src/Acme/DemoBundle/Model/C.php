<?php

namespace Acme\DemoBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class: C
 *
 */
class C
{
    /**
     * label
     *
     * @var string
     */
    protected $label;

    /**
     * Set label
     *
     * @param string $label
     * @return C
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
}
