<?php
/**
 * ErrorsException automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use Sdkgen\Client\Exception\KnownStatusCodeException;

class ErrorsException extends KnownStatusCodeException
{
    private Errors $payload;

    public function __construct(Errors $payload)
    {
        parent::__construct('The server returned an error');

        $this->payload = $payload;
    }

    /**
     * @return Errors
     */
    public function getPayload(): Errors
    {
        return $this->payload;
    }
}
