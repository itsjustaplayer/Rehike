<?php
namespace Rehike\Model\Rehike\Version;

use Rehike\Controller\Version\GetVersionController as Controller;
use Rehike\i18n\i18n;
use YukisCoffee\CoffeeTranslation\DateTimeFormats;

class MNightlyInfo
{
    public $headingText;
    public $branch;
    public $commitHash;
    public $fullCommitHash;
    public $isPreviousHash = false;
    public $commitName;
    public $commitDateTime;
    public $ghButton;

    public function __construct(&$data)
    {
        $strings = i18n::getNamespace("rehike/version");

        if ($branch = @$data["branch"])
        {
			$this->headingText = $strings->get("subheaderNightlyInfo");
            $this->branch = $branch;
        }

        if ($hash = @$data["currentHash"])
        {
            $this->commitHash = self::trimHash($hash);
            $this->fullCommitHash = $hash;
        }
        else if ($hash = @$data["previousHash"])
        {
            $this->commitHash = self::trimHash($hash);
            $this->fullCommitHash = $hash;
            $this->isPreviousHash = true;
        }

        if ($name = @$data["subject"])
        {
            $this->commitName = $name;
        }

        if ($time = @$data["time"])
        {
            $this->commitDateTime = $strings->formatDate(
                DateTimeFormats::EXPANDED_DATE_WITH_TIME,
                $time
            );
        }

        if (Controller::GH_ENABLED && @$this->fullCommitHash)
        {
            $this->ghButton = (object)[];
            $this->ghButton->label = $strings->get("viewOnGithub");
            $this->ghButton->endpoint = "//github.com/" . Controller::GH_REPO . "/tree/{$this->fullCommitHash}";
        }
    }

    private static function trimHash($hash)
    {
        return substr($hash, 0, 7);
    }
}