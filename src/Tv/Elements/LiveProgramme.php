<?php

namespace XmlTv\Tv\Elements;

use XmlTv\XmlElement;
use XmlTv\XmlSerializable;

class LiveProgramme implements XmlSerializable
{
    public function xmlSerialize(): XmlElement
    {
        return (new XmlElement('live'));
    }
}
