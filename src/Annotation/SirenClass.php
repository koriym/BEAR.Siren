<?php
/**
 * This file is part of the BEAR.SirenRenderer package
 *
 * @license http://opensource.org/licenses/MIT MIT
 */

namespace BEAR\SirenRenderer\Annotation;

/**
 * @Annotation
 * @Target("METHOD")
 */
final class SirenClass
{
    /**
     * name
     *
     * @var string
     */
    public $name = '';
}