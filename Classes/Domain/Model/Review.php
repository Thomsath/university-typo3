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
 * Review
 */
class Review extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Note
     *
     * @var int
     * @validate NotEmpty
     */
    protected $mark = 0;

    /**
     * Auteur
     *
     * @var string
     * @validate NotEmpty
     */
    protected $author = '';

    /**
     * Commentaire
     *
     * @var string
     * @validate NotEmpty
     */
    protected $comment = '';

    /**
     * Date
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $date = null;

    /**
     * Returns the mark
     *
     * @return int $mark
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * Sets the mark
     *
     * @param int $mark
     * @return void
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    }

    /**
     * Returns the author
     *
     * @return string $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param string $author
     * @return void
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * Returns the comment
     *
     * @return string $comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets the comment
     *
     * @param string $comment
     * @return void
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }
}
