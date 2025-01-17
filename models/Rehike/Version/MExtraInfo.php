<?php
namespace Rehike\Model\Rehike\Version;

use Rehike\i18n\i18n;

class MExtraInfo
{
    public string $headingText;

    /** @var string[][] */
    public array $info = [];

    public function __construct()
    {
        $strings = i18n::getNamespace("rehike/version");

        $this->headingText = $strings->get("extraInfo");

        $this->info[] = [
            $strings->get("operatingSystem"),
            php_uname("s") . " " .
            php_uname("r") . " " .
            php_uname("v") . " " .
            php_uname("m")
        ];

        $this->info[] = [
            $strings->get("phpVersion"),
            phpversion()
        ];
    }
}