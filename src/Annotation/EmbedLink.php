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
final class EmbedLink
{
    /**
     * Relation
     *
     * @var string
     */
    public $rel;
    
    /**
     * Embed resource uri
     *
     * @var string
     */
    public $src;
}