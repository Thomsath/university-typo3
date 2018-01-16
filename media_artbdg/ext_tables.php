<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('media_artbdg', 'Configuration/TypoScript', 'media_artbdg');

    }
);
