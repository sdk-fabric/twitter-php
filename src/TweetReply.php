<?php
/**
 * TweetReply automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class TweetReply implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    #[Key('exclude_reply_user_ids')]
    #[Description('A list of User IDs to be excluded from the reply Tweet thus removing a user from a thread.')]
    protected ?array $excludeReplyUserIds = null;
    #[Key('in_reply_to_tweet_id')]
    #[Description('Tweet ID of the Tweet being replied to. Please note that in_reply_to_tweet_id needs to be in the request if exclude_reply_user_ids is present.')]
    protected ?string $inReplyToTweetId = null;
    /**
     * @param array<string>|null $excludeReplyUserIds
     */
    public function setExcludeReplyUserIds(?array $excludeReplyUserIds) : void
    {
        $this->excludeReplyUserIds = $excludeReplyUserIds;
    }
    /**
     * @return array<string>|null
     */
    public function getExcludeReplyUserIds() : ?array
    {
        return $this->excludeReplyUserIds;
    }
    public function setInReplyToTweetId(?string $inReplyToTweetId) : void
    {
        $this->inReplyToTweetId = $inReplyToTweetId;
    }
    public function getInReplyToTweetId() : ?string
    {
        return $this->inReplyToTweetId;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('exclude_reply_user_ids', $this->excludeReplyUserIds);
        $record->put('in_reply_to_tweet_id', $this->inReplyToTweetId);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
