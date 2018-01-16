<?php
namespace Artbdg\MediaArtbdg\Domain\Model;

/***
 *
 * This file is part of the "media_artbdg" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Dorian Giudice <dorian.giudice@gmail.com>
 *           Thomas Beaupertuis
 *           Anais Rodrigues
 *
 ***/

/**
 * réseau social
 */
class Social extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Titre
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Identidiant
     *
     * @var string
     * @validate NotEmpty
     */
    protected $accountName = '';

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the accountName
     *
     * @return string $accountName
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Sets the accountName
     *
     * @param string $accountName
     * @return void
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }
}
