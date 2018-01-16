<?php
namespace Artbdg\MediaArtbdg\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Dorian Giudice <dorian.giudice@gmail.com>
 * @author Thomas Beaupertuis 
 * @author Anais Rodrigues 
 */
class MediaControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Artbdg\MediaArtbdg\Controller\MediaController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Artbdg\MediaArtbdg\Controller\MediaController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllMediasFromRepositoryAndAssignsThemToView()
    {

        $allMedias = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $mediaRepository = $this->getMockBuilder(\Artbdg\MediaArtbdg\Domain\Repository\MediaRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $mediaRepository->expects(self::once())->method('findAll')->will(self::returnValue($allMedias));
        $this->inject($this->subject, 'mediaRepository', $mediaRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('medias', $allMedias);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenMediaToView()
    {
        $media = new \Artbdg\MediaArtbdg\Domain\Model\Media();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('media', $media);

        $this->subject->showAction($media);
    }
}
