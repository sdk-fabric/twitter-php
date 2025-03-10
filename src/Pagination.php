<?php
/**
 * Pagination automatically generated by SDKgen please do not edit this file manually
 * @see https://sdkgen.app
 */

namespace SdkFabric\Twitter;

use PSX\Schema\Attribute\Description;
use PSX\Schema\Attribute\Key;

#[Description('')]
class Pagination implements \JsonSerializable, \PSX\Record\RecordableInterface
{
    #[Key('start_time')]
    #[Description('')]
    protected ?string $startTime = null;
    #[Key('end_time')]
    #[Description('')]
    protected ?string $endTime = null;
    #[Key('since_id')]
    #[Description('')]
    protected ?string $sinceId = null;
    #[Key('until_id')]
    #[Description('')]
    protected ?string $untilId = null;
    #[Key('max_results')]
    #[Description('')]
    protected ?int $maxResults = null;
    #[Key('pagination_token')]
    #[Description('')]
    protected ?string $paginationToken = null;
    public function setStartTime(?string $startTime): void
    {
        $this->startTime = $startTime;
    }
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }
    public function setEndTime(?string $endTime): void
    {
        $this->endTime = $endTime;
    }
    public function getEndTime(): ?string
    {
        return $this->endTime;
    }
    public function setSinceId(?string $sinceId): void
    {
        $this->sinceId = $sinceId;
    }
    public function getSinceId(): ?string
    {
        return $this->sinceId;
    }
    public function setUntilId(?string $untilId): void
    {
        $this->untilId = $untilId;
    }
    public function getUntilId(): ?string
    {
        return $this->untilId;
    }
    public function setMaxResults(?int $maxResults): void
    {
        $this->maxResults = $maxResults;
    }
    public function getMaxResults(): ?int
    {
        return $this->maxResults;
    }
    public function setPaginationToken(?string $paginationToken): void
    {
        $this->paginationToken = $paginationToken;
    }
    public function getPaginationToken(): ?string
    {
        return $this->paginationToken;
    }
    public function toRecord(): \PSX\Record\RecordInterface
    {
        /** @var \PSX\Record\Record<mixed> $record */
        $record = new \PSX\Record\Record();
        $record->put('start_time', $this->startTime);
        $record->put('end_time', $this->endTime);
        $record->put('since_id', $this->sinceId);
        $record->put('until_id', $this->untilId);
        $record->put('max_results', $this->maxResults);
        $record->put('pagination_token', $this->paginationToken);
        return $record;
    }
    public function jsonSerialize(): object
    {
        return (object) $this->toRecord()->getAll();
    }
}
