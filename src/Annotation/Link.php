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
final class Link
{
    /**
     * rel
     *
     * @var string
     */
    public $rel = '';

    /**
     * uri to get href
     *
     * @var string
     */
    public $uri = '';
}