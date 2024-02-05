<?php
/**
 * TweetMedia automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class TweetMedia implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<string>|null
     */
    #[Key('media_ids')]
    #[Description('A list of Media IDs being attached to the Tweet. This is only required if the request includes the tagged_user_ids.')]
    protected ?array $mediaIds = null;
    /**
     * @var array<string>|null
     */
    #[Key('tagged_user_ids')]
    #[Description('A list of User IDs being tagged in the Tweet with Media. If the user you\'re tagging doesn\'t have photo-tagging enabled, their names won\'t show up in the list of tagged users even though the Tweet is successfully created.')]
    protected ?array $taggedUserIds = null;
    /**
     * @param array<string>|null $mediaIds
     */
    public function setMediaIds(?array $mediaIds) : void
    {
        $this->mediaIds = $mediaIds;
    }
    /**
     * @return array<string>|null
     */
    public function getMediaIds() : ?array
    {
        return $this->mediaIds;
    }
    /**
     * @param array<string>|null $taggedUserIds
     */
    public function setTaggedUserIds(?array $taggedUserIds) : void
    {
        $this->taggedUserIds = $taggedUserIds;
    }
    /**
     * @return array<string>|null
     */
    public function getTaggedUserIds() : ?array
    {
        return $this->taggedUserIds;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('media_ids', $this->mediaIds);
        $record->put('tagged_user_ids', $this->taggedUserIds);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}