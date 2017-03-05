<?php declare(strict_types = 1);
namespace Development\Rest;

use Onion\Framework\Http\Header\Interfaces\AcceptInterface;
use Onion\Framework\Rest\Interfaces\EntityInterface;
use Onion\Framework\Rest\Interfaces\SerializerInterface;

class HtmlSerializer implements SerializerInterface
{

    /**
     * Should return the content type with which the
     * serialized data should be sent to the server
     *
     * @return string The content type
     */
    public function getContentType(): string
    {
        return 'text/html';
    }

    /**
     * Should perform a check if the current serializer is
     * supported by the client's accept header
     *
     * @param AcceptInterface $accept Instance of the header
     *
     * @return bool
     */
    public function supports(AcceptInterface $accept): bool
    {
        return $accept->supports($this->getContentType());
    }

    /**
     * Perform serialization of the provided $entity and
     * return the result as string, serialized by the current
     * strategy.
     *
     * @param EntityInterface $entity Entity to serialize
     *
     * @return string Textual representation of the $entity
     */
    public function serialize(EntityInterface $entity): string
    {
        return <<<HTML
You should make a request with one of the following values in the <code>Accept</code> header<br>
<ul>
<li><code>application/json</code> - for simple JSON</li>
<li><code>application/hal+json</code> - for JSON-HAL</li>
<li><code>application/vnd.api+json</code> - for JSON-API</li>
<li><code>application/ld+json</code> - for JSON-LD</li>
</ul>
<br>
HTML;

    }
}
