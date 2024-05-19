<?php
/**
 * SearchTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class SearchTag extends TagAbstract
{
    /**
     * @param string|null $query
     * @param string|null $sortOrder
     * @param string|null $expansions
     * @param Pagination|null $pagination
     * @param Fields|null $fields
     * @return TweetCollection
     * @throws ClientException
     */
    public function getRecent(?string $query = null, ?string $sortOrder = null, ?string $expansions = null, ?Pagination $pagination = null, ?Fields $fields = null): TweetCollection
    {
        $url = $this->parser->url('/2/tweets/search/recent', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'query' => $query,
                'sort_order' => $sortOrder,
                'expansions' => $expansions,
                'pagination' => $pagination,
                'fields' => $fields,
            ], [
                'pagination',
                'fields',
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, TweetCollection::class);
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
