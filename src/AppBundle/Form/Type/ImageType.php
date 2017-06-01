<?php

namespace AppBundle\Form\Type;


use Symfony\Component\Form\AbstractType;

class ImageType extends AbstractType
{

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'app_image';
    }

    public function getParent()
    {
        return 'hidden';
    }


}