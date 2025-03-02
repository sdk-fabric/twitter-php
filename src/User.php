<?php
/**
 * User automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class User implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Key('created_at')]
    #[Description('')]
    protected ?string $createdAt = null;
    #[Description('')]
    protected ?string $id = null;
    #[Description('')]
    protected ?string $name = null;
    #[Key('pinned_tweet_id')]
    #[Description('')]
    protected ?string $pinnedTweetId = null;
    #[Description('')]
    protected ?string $username = null;
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }
    public function setId(?string $id): void
    {
        $this->id = $id;
    }
    public function getId(): ?string
    {
        return $this->id;
    }
    public function setName(?string $name): void
    {
        $this->name = $name;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setPinnedTweetId(?string $pinnedTweetId): void
    {
        $this->pinnedTweetId = $pinnedTweetId;
    }
    public function getPinnedTweetId(): ?string
    {
        return $this->pinnedTweetId;
    }
    public function setUsername(?string $username): void
    {
        $this->username = $username;
    }
    public function getUsername(): ?string
    {
        return $this->username;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('created_at', $this->createdAt);
        $record->put('id', $this->id);
        $record->put('name', $this->name);
        $record->put('pinned_tweet_id', $this->pinnedTweetId);
        $record->put('username', $this->username);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
