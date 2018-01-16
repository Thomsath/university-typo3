<?php
namespace Artbdg\MediaArtbdg\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dorian Giudice <dorian.giudice@gmail.com>
 * @author Thomas Beaupertuis 
 * @author Anais Rodrigues 
 */
class SocialTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Artbdg\MediaArtbdg\Domain\Model\Social
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Artbdg\MediaArtbdg\Domain\Model\Social();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAccountNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAccountName()
        );
    }

    /**
     * @test
     */
    public function setAccountNameForStringSetsAccountName()
    {
        $this->subject->setAccountName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'accountName',
            $this->subject
        );
    }
}
