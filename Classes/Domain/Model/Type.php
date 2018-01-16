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
 * Type
 */
class Type extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     *
     * @var string
     * @validate NotEmpty
     */
    protected $name = '';

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
