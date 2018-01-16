<?php
namespace Artbdg\MediaArtbdg\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dorian Giudice <dorian.giudice@gmail.com>
 * @author Thomas Beaupertuis 
 * @author Anais Rodrigues 
 */
class ReviewTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Artbdg\MediaArtbdg\Domain\Model\Review
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Artbdg\MediaArtbdg\Domain\Model\Review();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getMarkReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getMark()
        );
    }

    /**
     * @test
     */
    public function setMarkForIntSetsMark()
    {
        $this->subject->setMark(12);

        self::assertAttributeEquals(
            12,
            'mark',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAuthorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAuthor()
        );
    }

    /**
     * @test
     */
    public function setAuthorForStringSetsAuthor()
    {
        $this->subject->setAuthor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'author',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCommentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getComment()
        );
    }

    /**
     * @test
     */
    public function setCommentForStringSetsComment()
    {
        $this->subject->setComment('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'comment',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'date',
            $this->subject
        );
    }
}
