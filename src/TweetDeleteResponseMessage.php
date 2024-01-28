<?php
/**
 * TweetDeleteResponseMessage automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use PSX\Schema\Attribute\Description;

#[Description('')]
class TweetDeleteResponseMessage implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?bool $deleted = null;
    public function setDeleted(?bool $deleted) : void
    {
        $this->deleted = $deleted;
    }
    public function getDeleted() : ?bool
    {
        return $this->deleted;
    }
    public function toRecord() : \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('deleted', $this->deleted);
        return $record;
    }
    public function jsonSerialize() : object
    {
        return (object) $this->toRecord()->getAll();
    }
}
