<?php
namespace SvenJuergens\T3Slack\Command;

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

use SvenJuergens\T3Slack\Service\T3Slack;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\CommandController;

class TestCommandController extends CommandController
{
        public function testCommand()
        {
            $client = GeneralUtility::makeInstance(T3Slack::class);
            $client->send('hello world');
        }
}