<?php
/**
 * UserTag automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use GuzzleHttp\Exception\BadResponseException;
use Sdkgen\Client\Exception\ClientException;
use Sdkgen\Client\Exception\UnknownStatusCodeException;
use Sdkgen\Client\TagAbstract;

class UserTag extends TagAbstract
{
    /**
     * Returns a variety of information about one or more users specified by the requested IDs.
     *
     * @param string|null $ids
     * @param string|null $expansions
     * @param Fields|null $fields
     * @return UserCollection
     * @throws ClientException
     */
    public function getAll(?string $ids = null, ?string $expansions = null, ?Fields $fields = null): UserCollection
    {
        $url = $this->parser->url('/2/users', [
        ]);

        $options = [
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
            $data = (string) $response->getBody();

            return $this->parser->parse($data, UserCollection::class);
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

    /**
     * Returns a variety of information about a single user specified by the requested ID.
     *
     * @param string $userId
     * @param string|null $expansions
     * @param Fields|null $fields
     * @return User
     * @throws ClientException
     */
    public function get(string $userId, ?string $expansions = null, ?Fields $fields = null): User
    {
        $url = $this->parser->url('/2/users/:user_id', [
            'user_id' => $userId,
        ]);

        $options = [
            'query' => $this->parser->query([
                'expansions' => $expansions,
                'fields' => $fields,
            ], [
                'fields',
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, User::class);
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

    /**
     * Allows you to retrieve a collection of the most recent Tweets and Retweets posted by you and users you follow. This endpoint can return every Tweet created on a timeline over the last 7 days as well as the most recent 800 regardless of creation date.
     *
     * @param string $userId
     * @param string|null $exclude
     * @param string|null $expansions
     * @param Pagination|null $pagination
     * @param Fields|null $fields
     * @return TweetCollection
     * @throws ClientException
     */
    public function getTimeline(string $userId, ?string $exclude = null, ?string $expansions = null, ?Pagination $pagination = null, ?Fields $fields = null): TweetCollection
    {
        $url = $this->parser->url('/2/users/:user_id/timelines/reverse_chronological', [
            'user_id' => $userId,
        ]);

        $options = [
            'query' => $this->parser->query([
                'exclude' => $exclude,
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

    /**
     * Tweets liked by a user
     *
     * @param string $userId
     * @param string|null $expansions
     * @param int|null $maxResults
     * @param string|null $paginationToken
     * @param Fields|null $fields
     * @return TweetCollection
     * @throws ClientException
     */
    public function getLikedTweets(string $userId, ?string $expansions = null, ?int $maxResults = null, ?string $paginationToken = null, ?Fields $fields = null): TweetCollection
    {
        $url = $this->parser->url('/2/users/:user_id/liked_tweets', [
            'user_id' => $userId,
        ]);

        $options = [
            'query' => $this->parser->query([
                'expansions' => $expansions,
                'max_results' => $maxResults,
                'pagination_token' => $paginationToken,
                'fields' => $fields,
            ], [
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

    /**
     * Allows a user or authenticated user ID to unlike a Tweet.
     *
     * @param string $userId
     * @param string $tweetId
     * @return LikeResponse
     * @throws ClientException
     */
    public function removeLike(string $userId, string $tweetId): LikeResponse
    {
        $url = $this->parser->url('/2/users/:user_id/likes/:tweet_id', [
            'user_id' => $userId,
            'tweet_id' => $tweetId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('DELETE', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, LikeResponse::class);
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

    /**
     * Causes the user ID identified in the path parameter to Like the target Tweet.
     *
     * @param string $userId
     * @param SingleTweet $payload
     * @return LikeResponse
     * @throws ClientException
     */
    public function createLike(string $userId, SingleTweet $payload): LikeResponse
    {
        $url = $this->parser->url('/2/users/:user_id/likes', [
            'user_id' => $userId,
        ]);

        $options = [
            'query' => $this->parser->query([
            ], [
            ]),
            'json' => $payload
        ];

        try {
            $response = $this->httpClient->request('POST', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, LikeResponse::class);
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

    /**
     * Returns a variety of information about one or more users specified by their usernames.
     *
     * @param string|null $usernames
     * @param string|null $expansions
     * @param Fields|null $fields
     * @return UserCollection
     * @throws ClientException
     */
    public function findByName(?string $usernames = null, ?string $expansions = null, ?Fields $fields = null): UserCollection
    {
        $url = $this->parser->url('/2/users/by', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'usernames' => $usernames,
                'expansions' => $expansions,
                'fields' => $fields,
            ], [
                'fields',
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, UserCollection::class);
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

    /**
     * Returns information about an authorized user.
     *
     * @param string|null $expansions
     * @param string|null $fields
     * @return User
     * @throws ClientException
     */
    public function getMe(?string $expansions = null, ?string $fields = null): User
    {
        $url = $this->parser->url('/2/users/me', [
        ]);

        $options = [
            'query' => $this->parser->query([
                'expansions' => $expansions,
                'fields' => $fields,
            ], [
            ]),
        ];

        try {
            $response = $this->httpClient->request('GET', $url, $options);
            $data = (string) $response->getBody();

            return $this->parser->parse($data, User::class);
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
