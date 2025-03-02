<?php
/**
 * TweetDetails automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class TweetDetails implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.')]
    protected ?string $id = null;
    #[Description('The content of the Tweet.')]
    protected ?string $text = null;
    #[Key('created_at')]
    #[Description('Creation time of the Tweet.')]
    protected ?\PSX\DateTime\LocalDateTime $createdAt = null;
    #[Key('author_id')]
    #[Description('Unique identifier of this user. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.')]
    protected ?string $authorId = null;
    /**
     * @var array<string>|null
     */
    #[Key('edit_history_tweet_ids')]
    #[Description('Unique identifiers indicating all versions of an edited Tweet. For Tweets with no edits, there will be one ID. For Tweets with an edit history, there will be multiple IDs, arranged in ascending order reflecting the order of edit, with the most recent version in the last position of the array.')]
    protected ?array $editHistoryTweetIds = null;
    #[Key('conversation_id')]
    #[Description('The Tweet ID of the original Tweet of the conversation (which includes direct replies, replies of replies).')]
    protected ?string $conversationId = null;
    #[Key('in_reply_to_user_id')]
    #[Description('If this Tweet is a Reply, indicates the user ID of the parent Tweet\'s author. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.')]
    protected ?string $inReplyToUserId = null;
    public function setId(?string $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?string
    {
        return $this->id;
    }
    public function setText(?string $text): void
    {
        $this->text = $text;
    }
    public function getText(): ?string
    {
        return $this->text;
    }
    public function setCreatedAt(?\PSX\DateTime\LocalDateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    public function getCreatedAt(): ?\PSX\DateTime\LocalDateTime
    {
        return $this->createdAt;
    }
    public function setAuthorId(?string $authorId): void
    {
        $this->authorId = $authorId;
    }
    public function getAuthorId(): ?string
    {
        return $this->authorId;
    }
    /**
     * @param array<string>|null $editHistoryTweetIds
     */
    public function setEditHistoryTweetIds(?array $editHistoryTweetIds): void
    {
        $this->editHistoryTweetIds = $editHistoryTweetIds;
    }
    /**
     * @return array<string>|null
     */
    public function getEditHistoryTweetIds(): ?array
    {
        return $this->editHistoryTweetIds;
    }
    public function setConversationId(?string $conversationId): void
    {
        $this->conversationId = $conversationId;
    }
    public function getConversationId(): ?string
    {
        return $this->conversationId;
    }
    public function setInReplyToUserId(?string $inReplyToUserId): void
    {
        $this->inReplyToUserId = $inReplyToUserId;
    }
    public function getInReplyToUserId(): ?string
    {
        return $this->inReplyToUserId;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('id', $this->id);
        $record->put('text', $this->text);
        $record->put('created_at', $this->createdAt);
        $record->put('author_id', $this->authorId);
        $record->put('edit_history_tweet_ids', $this->editHistoryTweetIds);
        $record->put('conversation_id', $this->conversationId);
        $record->put('in_reply_to_user_id', $this->inReplyToUserId);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
