<?php
/**
 * TweetTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\Payload;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class TweetTag extends TagAbstract
{
    /**
     * Returns a variety of information about the Tweet specified by the requested ID or list of IDs.
     *
     * @param string|null $ids
     * @param string|null $expansions
     * @param Fields|null $fields
     * @return TweetCollection
     * @throws ErrorsException
     * @throws ClientException
     */
    public function getAll(?string $ids = null, ?string $expansions = null, ?Fields $fields = null): TweetCollection
    {
        $url = $this->parser->url('/2/tweets', [
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
                'ids' => $ids,
                'expansions' => $expansions,
                'fields' => $fields,
            ], [
                'fields',
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(TweetCollection::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(Errors::class));

                throw new ErrorsException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Returns a variety of information about a single Tweet specified by the requested ID.
     *
     * @param string $tweetId
     * @param string|null $expansions
     * @param Fields|null $fields
     * @return TweetEntity
     * @throws ErrorsException
     * @throws ClientException
     */
    public function get(string $tweetId, ?string $expansions = null, ?Fields $fields = null): TweetEntity
    {
        $url = $this->parser->url('/2/tweets/:tweet_id', [
            'tweet_id' => $tweetId,
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
                'expansions' => $expansions,
                'fields' => $fields,
            ], [
                'fields',
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(TweetEntity::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(Errors::class));

                throw new ErrorsException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Creates a Tweet on behalf of an authenticated user.
     *
     * @param Tweet $payload
     * @return TweetCreateResponse
     * @throws ErrorsException
     * @throws ClientException
     */
    public function create(Tweet $payload): TweetCreateResponse
    {
        $url = $this->parser->url('/2/tweets', [
        ]);

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload,
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(TweetCreateResponse::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(Errors::class));

                throw new ErrorsException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Allows a user or authenticated user ID to delete a Tweet.
     *
     * @param string $tweetId
     * @return TweetDeleteResponse
     * @throws ErrorsException
     * @throws ClientException
     */
    public function delete(string $tweetId): TweetDeleteResponse
    {
        $url = $this->parser->url('/2/tweets/:tweet_id', [
            'tweet_id' => $tweetId,
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('DELETE', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(TweetDeleteResponse::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(Errors::class));

                throw new ErrorsException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Hides or unhides a reply to a Tweet.
     *
     * @param string $tweetId
     * @param HideReply $payload
     * @return HideReplyResponse
     * @throws ErrorsException
     * @throws ClientException
     */
    public function hideReply(string $tweetId, HideReply $payload): HideReplyResponse
    {
        $url = $this->parser->url('/2/tweets/:tweet_id/hidden', [
            'tweet_id' => $tweetId,
        ]);

        $options = [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload,
        ];

        try {
            $response = $this->httpClient->request('PUT', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(HideReplyResponse::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(Errors::class));

                throw new ErrorsException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }

    /**
     * Allows you to get information about a Tweet’s liking users.
     *
     * @param string $tweetId
     * @param string|null $expansions
     * @param int|null $maxResults
     * @param string|null $paginationToken
     * @return UserCollection
     * @throws ErrorsException
     * @throws ClientException
     */
    public function getLikingUsers(string $tweetId, ?string $expansions = null, ?int $maxResults = null, ?string $paginationToken = null): UserCollection
    {
        $url = $this->parser->url('/2/tweets/:tweet_id/liking_users', [
            'tweet_id' => $tweetId,
        ]);

        $options = [
            'headers' => [
            ],
            'query' => $this->parser->query([
                'expansions' => $expansions,
                'max_results' => $maxResults,
                'pagination_token' => $paginationToken,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $body = $response->getBody();

            $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(UserCollection::class));

            return $data;
        } catch (ClientException $e) {
            throw $e;
        } catch (BadResponseException $e) {
            $body = $e->getResponse()->getBody();
            $statusCode = $e->getResponse()->getStatusCode();

            if ($statusCode >= 0 && $statusCode <= 999) {
                $data = $this->parser->parse((string) $body, \PSX\Schema\SchemaSource::fromClass(Errors::class));

                throw new ErrorsException($data);
            }

            throw new UnknownStatusCodeException('The server returned an unknown status code: ' . $statusCode);
        } catch (\Throwable $e) {
            throw new ClientException('An unknown error occurred: ' . $e->getMessage());
        }
    }



}
