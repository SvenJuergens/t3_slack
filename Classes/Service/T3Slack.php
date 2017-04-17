<?php
namespace SvenJuergens\T3Slack\Service;

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
use SvenJuergens\T3Slack\Utility\EmConfiguration;
use \Maknz\Slack\Client;

class T3Slack extends Client{

    /**
     * client
     *
     * @var \Maknz\Slack\Client $client;
     */
    protected $client;

    /** @var  EmConfiguration */
    protected $emConfiguration;

    public function __construct()
    {
        $settings = $this->getConfiguration();
        parent::__construct($settings['webHookUrl'],$settings);
    }

    public function getConfiguration()
    {
        $tmp = EmConfiguration::getSettings();
        $settings = [];
        if(!isset($tmp['webHookUrl']) || empty($tmp['webHookUrl'])){
            throw new \UnexpectedValueException('webHookUrl is missing');
        }else{
            $settings['webHookUrl'] = $tmp['webHookUrl'];
        }
        if(isset($tmp['username']) && !empty($tmp['username'])){
            $settings['username'] = (string)$tmp['username'];
        }
        if(isset($tmp['channel']) && !empty($tmp['channel'])){
            $settings['channel'] = (string)$tmp['channel'];
        }
        if(isset($tmp['icon']) && !empty($tmp['icon'])){
            $settings['icon'] = (string)$tmp['icon'];
        }
        if(isset($tmp['link_names'])){
            $settings['link_names'] = (bool)$tmp['link_names'];
        }
        if(isset($tmp['unfurl_links'])){
            $settings['unfurl_links'] = (bool)$tmp['unfurl_links'];
        }
        if(isset($tmp['unfurl_media'])){
            $settings['unfurl_media'] = (bool)$tmp['unfurl_media'];
        }
        if(isset($tmp['allow_markdown'])){
            $settings['allow_markdown'] = (bool)$tmp['allow_markdown'];
        }
        return $settings;
    }

}