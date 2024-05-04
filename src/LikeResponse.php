<?php
/**
 * LikeResponse automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use PSX\Schema\Attribute\Description;

#[Description('')]
class LikeResponse implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('')]
    protected ?Like $data = null;
    public function setData(?Like $data) : void
    {
        $this->data = $data;
    }
    public function getData() : ?Like
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
