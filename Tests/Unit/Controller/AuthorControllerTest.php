<?php
namespace Artbdg\MediaArtbdg\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Dorian Giudice <dorian.giudice@gmail.com>
 * @author Thomas Beaupertuis 
 * @author Anais Rodrigues 
 */
class AuthorControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Artbdg\MediaArtbdg\Controller\AuthorController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Artbdg\MediaArtbdg\Controller\AuthorController::class)
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
    public function listActionFetchesAllAuthorsFromRepositoryAndAssignsThemToView()
    {

        $allAuthors = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $authorRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $authorRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAuthors));
        $this->inject($this->subject, 'authorRepository', $authorRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('authors', $allAuthors);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAuthorToView()
    {
        $author = new \Artbdg\MediaArtbdg\Domain\Model\Author();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('author', $author);

        $this->subject->showAction($author);
    }
}
