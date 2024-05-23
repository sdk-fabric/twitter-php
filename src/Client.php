<?php
/**
 * Client automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\ClientAbstract;
use Sdkgen\Client\Credentials;
use Sdkgen\Client\CredentialsInterface;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TokenStoreInterface;

class Client extends ClientAbstract
{
    public function tweet(): TweetTag
    {
        return new TweetTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function usage(): UsageTag
    {
        return new UsageTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function user(): UserTag
    {
        return new UserTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function bookmark(): BookmarkTag
    {
        return new BookmarkTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function search(): SearchTag
    {
        return new SearchTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function quote(): QuoteTag
    {
        return new QuoteTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function trends(): TrendsTag
    {
        return new TrendsTag(
            $this->httpClient,
            $this->parser
        );
    }

    public function retweet(): RetweetTag
    {
        return new RetweetTag(
            $this->httpClient,
            $this->parser
        );
    }



    public static function build(string $token): self
    {
        return new self('https://api.twitter.com', new Credentials\HttpBearer($token));
    }
}
