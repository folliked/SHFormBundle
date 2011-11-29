<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Olivier Chauvel <olivier@generation-multiple.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Genemu\Bundle\FormBundle\Form\Type\JQuery;

use Symfony\Component\Form\AbstractType;

/**
 * ColorType to JQueryLib
 *
 * @author Olivier Chauvel <olivier@generation-multiple.com>
 */
class ColorType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function getParent(array $options)
    {
        return 'genemu_color';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'genemu_jquerycolor';
    }
}