<?php
/**
 * Created for plugin-api-client
 * Datetime: 26.07.2019 19:00
 * @author Timur Kasumov aka XAKEPEHOK
 */

namespace Leadvertex\Plugin\Components\ApiClient;


class ApiFilterSortPaginate
{

    /**
     * @var array|null
     */
    private $filter;
    /**
     * @var ApiSort|null
     */
    private $sort;
    /**
     * @var int|null
     */
    private $pageSize;

    public function __construct(?array $filter, ?ApiSort $sort, ?int $pageSize)
    {
        $this->filter = $filter;
        $this->pageSize = $pageSize;
        $this->sort = $sort;
    }

    /**
     * @return array|null
     */
    public function getFilter(): ?array
    {
        return $this->filter;
    }

    /**
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }

    /**
     * @return ApiSort|null
     */
    public function getSort(): ?ApiSort
    {
        return $this->sort;
    }


}