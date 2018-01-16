<?php
namespace Artbdg\MediaArtbdg\Controller;

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
 * AuthorController
 */
class AuthorController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $authors = $this->authorRepository->findAll();
        $this->view->assign('authors', $authors);
    }

    /**
     * action show
     *
     * @param \Artbdg\MediaArtbdg\Domain\Model\Author $author
     * @return void
     */
    public function showAction(\Artbdg\MediaArtbdg\Domain\Model\Author $author)
    {
        $this->view->assign('author', $author);
    }
}
