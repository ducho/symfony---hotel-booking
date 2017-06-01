<?php

namespace AppBundle\Entity;


class OptionsTemplate
{
    /** @var  array */
    protected $options;

    /**
     * @param array $options
     * @return OptionsTemplate
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param $name string
     * @return ChannelOption
     */
    public function getOption($name)
    {
        /** @var ChannelOption $option */
        foreach ($this->options as $option) {
            if ($option->getName() === $name) {
                return $option;
            }
        }
        return null;
    }
}