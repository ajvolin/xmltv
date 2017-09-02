<?php

namespace XmlTv\Tv;

use XmlTv\Tv\Channel\DisplayName;
use XmlTv\Tv\Channel\Icon;

class Channel
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var Icon
     */
    public $icon;

    /**
     * @var string
     */
    public $url;

    /**
     * @var DisplayName[]
     */
    private $displayName = [];

    /**
     * Channel constructor.
     *
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    /**
     * Add a display name.
     *
     * @param DisplayName $displayName
     */
    public function addDisplayName(DisplayName $displayName)
    {
        array_push($this->displayName, $displayName);
    }

    /**
     * Get all display names.
     *
     * @return DisplayName[]
     */
    public function getDisplayNames(): array
    {
        return $this->displayName;
    }
}
