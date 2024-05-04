<?php
/**
 * TweetCollection automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use PSX\Schema\Attribute\Description;

#[Description('')]
class TweetCollection implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    /**
     * @var array<TweetDetails>|null
     */
    #[Description('')]
    protected ?array $data = null;
    /**
     * @param array<TweetDetails>|null $data
     */
    public function setData(?array $data) : void
    {
        $this->data = $data;
    }
    /**
     * @return array<TweetDetails>|null
     */
    public function getData() : ?array
    {
        return $this->data;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('data', $this->data);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}