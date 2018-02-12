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
   * authorRepository
   *
   * @var \Artbdg\MediaArtbdg\Domain\Repository\AuthorRepository
   * @inject
   */
  protected $authorRepository = null;


  /**
   * mediaRepository
   *
   * @var \Artbdg\MediaArtbdg\Domain\Repository\MediaRepository
   * @inject
   */
  protected $mediaRepository = null;


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
     * action showMedia
     *
     * @param \Artbdg\MediaArtbdg\Domain\Model\Media $media
     * @return void
     */
    public function showMediaAction(\Artbdg\MediaArtbdg\Domain\Model\Media $media)
    {


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
        $medias = $this->mediaRepository->findByAuhtor($author);
        $this->view->assign('medias', $medias);

    }



}
