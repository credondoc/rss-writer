<?php
/**
 * Copyright 2019 Bitban Technologies, S.L.
 * Todos los derechos reservados.
 */

namespace Bitban\RssWriter\Entities;

use Bitban\RssWriter\Interfaces\RssInterface;
use Bitban\RssWriter\Traits\RssTrait;
use JMS\Serializer\Annotation as Serializer;

/**
 * @Serializer\AccessType("public_method")
 * @Serializer\XmlRoot("rss")
 * @Serializer\XmlNamespace(uri="http://search.yahoo.com/mrss/", prefix="media")
 * @Serializer\XmlNamespace(uri="http://purl.org/dc/elements/1.1/", prefix="dc")
 */
class Rss implements RssInterface
{
    use RssTrait;
}
