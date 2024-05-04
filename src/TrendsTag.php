<?php
/**
 * TrendsTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class TrendsTag extends TagAbstract
{
    /**
     * The Trends lookup endpoint allow developers to get the Trends for a location, specified using the where-on-earth id (WOEID).
     *
     * @param string $woeid
     * @return TrendCollection
     * @throws ClientException
     */
    public function getByWoeid(string $woeid): TrendCollection
    {
        $url = $this->parser->url('/2/trends/by/woeid/:woeid', [
            'woeid' => $woeid,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, TrendCollection::class);
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