<?php
/**
 * Created for plugin-api-client
 * Datetime: 29.07.2019 17:19
 * @author Timur Kasumov aka XAKEPEHOK
 */

namespace Leadvertex\Plugin\Components\ApiClient;


use InvalidArgumentException;

class ApiSort
{

    const ASC = 'ASC';
    const DESC = 'DESC';

    /**
     * @var string
     */
    private $field;
    /**
     * @var string
     */
    private $direction;

    public function __construct(string $field, string $direction)
    {
        $this->field = $field;
        $this->direction = $direction;

        if (!in_array($direction, [self::ASC, self::DESC])) {
            throw new InvalidArgumentException("Sort direction should be '" . self::ASC . "' or '" . self::DESC . "'");
        }
    }

    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }

}