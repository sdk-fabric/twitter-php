<?php
/**
 * Fields automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class Fields implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Key('media.fields')]
    #[Description('')]
    protected ?string $mediaFields = null;
    #[Key('place.fields')]
    #[Description('')]
    protected ?string $placeFields = null;
    #[Key('poll.fields')]
    #[Description('')]
    protected ?string $pollFields = null;
    #[Key('tweet.fields')]
    #[Description('')]
    protected ?string $tweetFields = null;
    #[Key('user.fields')]
    #[Description('')]
    protected ?string $userFields = null;
    public function setMediaFields(?string $mediaFields): void
    {
        $this->mediaFields = $mediaFields;
    }
    public function getMediaFields(): ?string
    {
        return $this->mediaFields;
    }
    public function setPlaceFields(?string $placeFields): void
    {
        $this->placeFields = $placeFields;
    }
    public function getPlaceFields(): ?string
    {
        return $this->placeFields;
    }
    public function setPollFields(?string $pollFields): void
    {
        $this->pollFields = $pollFields;
    }
    public function getPollFields(): ?string
    {
        return $this->pollFields;
    }
    public function setTweetFields(?string $tweetFields): void
    {
        $this->tweetFields = $tweetFields;
    }
    public function getTweetFields(): ?string
    {
        return $this->tweetFields;
    }
    public function setUserFields(?string $userFields): void
    {
        $this->userFields = $userFields;
    }
    public function getUserFields(): ?string
    {
        return $this->userFields;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('media.fields', $this->mediaFields);
        $record->put('place.fields', $this->placeFields);
        $record->put('poll.fields', $this->pollFields);
        $record->put('tweet.fields', $this->tweetFields);
        $record->put('user.fields', $this->userFields);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
