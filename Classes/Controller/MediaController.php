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
 * MediaController
 */
class MediaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
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
        $medias = $this->mediaRepository->findAll();
        $this->view->assign('medias', $medias);
    }

    /**
     * action show
     *
     * @param \Artbdg\MediaArtbdg\Domain\Model\Media $media
     * @return void
     */
    public function showAction(\Artbdg\MediaArtbdg\Domain\Model\Media $media)
    {
        $this->view->assign('media', $media);
    }

    /**
     * action recommend
     *
     * @return void
     */
    public function recommendAction()
    {

    }

    /**
     * action search
     *
     * @return void
     */
    public function searchAction()
    {

    }
}
