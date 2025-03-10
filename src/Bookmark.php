<?php
/**
 * Bookmark automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use PSX\Schema\Attribute\Description;

#[Description('')]
class Bookmark implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Description('Indicates whether the user bookmarks the specified Tweet as a result of this request.')]
    protected ?bool $bookmarked = null;
    public function setBookmarked(?bool $bookmarked): void
    {
        $this->bookmarked = $bookmarked;
    }
    public function getBookmarked(): ?bool
    {
        return $this->bookmarked;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('bookmarked', $this->bookmarked);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
