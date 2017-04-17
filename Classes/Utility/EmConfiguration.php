<?php
namespace SvenJuergens\T3Slack\Utility;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

class EmConfiguration
{
    /**
     * Parse settings and return it as array
     *
     * @return array unserialized extconf settings
     */
    public static function getSettings()
    {
        $settings = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['t3_slack']);
        if (!is_array($settings)) {
            $settings = [];
        }
        return $settings;
    }
}