<?php
/**
 * UsageTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class UsageTag extends TagAbstract
{
    /**
     * The Usage API in the Twitter API v2 allows developers to programmatically retrieve their project usage. Using thie endpoint, developers can keep a track and monitor of the number of Tweets they have pulled for a given billing cycle.
     *
     * @return TweetUsageResponse
     * @throws ClientException
     */
    public function getTweets(): TweetUsageResponse
    {
        $url = $this->parser->url('/2/usage/tweets', [
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, TweetUsageResponse::class);
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $data = (string) $e->getResponse()->getBody();

            switch ($e->getResponse()->getStatusCode()) {
                default:
                    throw new UnknownStatusCodeException('The server returned an unknown status code');
            }
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }


}
