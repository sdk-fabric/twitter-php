
# twitter-php

This [SDK](https://github.com/sdk-fabric/twitter-php) is managed by the [SDK Fabric](https://sdk-fabric.org/) project, a global infrastructure to
automatically generate SDKs for every API.

You can find more information about this SDK at [TypeHub](https://typehub.cloud/):
https://app.typehub.cloud/d/sdkfabric/twitter

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$client = new \SdkFabric\Twitter\Client::build('[access_token]');

// Returns a variety of information about the Tweet specified by the requested ID or list of IDs.
$response = $client->tweet()->getall('ids', 'expansions', null);

// Returns a variety of information about a single Tweet specified by the requested ID.
$response = $client->tweet()->get('tweet_id', 'expansions', null);

// Creates a Tweet on behalf of an authenticated user.
$response = $client->tweet()->create(new Tweet());

// Allows a user or authenticated user ID to delete a Tweet.
$response = $client->tweet()->delete('tweet_id');

// Hides or unhides a reply to a Tweet.
$response = $client->tweet()->hidereply('tweet_id', new Hidereply());

// Allows you to get information about a Tweet’s liking users.
$response = $client->tweet()->getlikingusers('tweet_id', 'expansions', 1, 'pagination_token');

// The Usage API in the Twitter API v2 allows developers to programmatically retrieve their project usage.
$response = $client->usage()->gettweets();

// Returns a variety of information about one or more users specified by the requested IDs.
$response = $client->user()->getall('ids', 'expansions', null);

// Returns a variety of information about a single user specified by the requested ID.
$response = $client->user()->get('user_id', 'expansions', null);

// Allows you to retrieve a collection of the most recent Tweets and Retweets posted by you and users you follow.
$response = $client->user()->gettimeline('user_id', 'exclude', 'expansions', null, null);

// Tweets liked by a user.
$response = $client->user()->getlikedtweets('user_id', 'expansions', 1, 'pagination_token', null);

// Allows a user or authenticated user ID to unlike a Tweet.
$response = $client->user()->removelike('user_id', 'tweet_id');

// Causes the user ID identified in the path parameter to Like the target Tweet.
$response = $client->user()->createlike('user_id', new SingleTweet());

// Returns a variety of information about one or more users specified by their usernames.
$response = $client->user()->findbyname('usernames', 'expansions', null);

// Returns information about an authorized user.
$response = $client->user()->getme('expansions', 'fields');

// Allows you to get an authenticated user's 800 most recent bookmarked Tweets.
$response = $client->bookmark()->getall('user_id', 'expansions', 'pagination_token', null);

$response = $client->bookmark()->create('user_id', new SingleTweet());

$response = $client->bookmark()->delete('user_id', 'tweet_id');

$response = $client->search()->getrecent('query', 'sort_order', 'expansions', null, null);

// Returns Quote Tweets for a Tweet specified by the requested Tweet ID.
$response = $client->quote()->getall('tweet_id', 'exclude', 'expansions', 1, 'pagination_token', null);

// The Trends lookup endpoint allow developers to get the Trends for a location, specified using the where-on-earth id (WOEID).
$response = $client->trends()->getbywoeid('woeid');

// Returns the Retweets for a given Tweet ID.
$response = $client->retweet()->getall('tweet_id', 'expansions', 1, null);
```
