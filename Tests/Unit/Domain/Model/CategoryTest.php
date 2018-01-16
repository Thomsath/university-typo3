<?php
namespace Artbdg\MediaArtbdg\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dorian Giudice <dorian.giudice@gmail.com>
 * @author Thomas Beaupertuis 
 * @author Anais Rodrigues 
 */
class CategoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Artbdg\MediaArtbdg\Domain\Model\Category
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Artbdg\MediaArtbdg\Domain\Model\Category();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }
}
