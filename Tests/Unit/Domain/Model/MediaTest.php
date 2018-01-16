<?php
namespace Artbdg\MediaArtbdg\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dorian Giudice <dorian.giudice@gmail.com>
 * @author Thomas Beaupertuis 
 * @author Anais Rodrigues 
 */
class MediaTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Artbdg\MediaArtbdg\Domain\Model\Media
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Artbdg\MediaArtbdg\Domain\Model\Media();
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

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'image',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPublishedReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getPublished()
        );
    }

    /**
     * @test
     */
    public function setPublishedForDateTimeSetsPublished()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setPublished($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'published',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFilesReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getFiles()
        );
    }

    /**
     * @test
     */
    public function setFilesForFileReferenceSetsFiles()
    {
        $file = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneFiles = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneFiles->attach($file);
        $this->subject->setFiles($objectStorageHoldingExactlyOneFiles);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneFiles,
            'files',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addFileToObjectStorageHoldingFiles()
    {
        $file = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $filesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $filesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($file));
        $this->inject($this->subject, 'files', $filesObjectStorageMock);

        $this->subject->addFile($file);
    }

    /**
     * @test
     */
    public function removeFileFromObjectStorageHoldingFiles()
    {
        $file = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $filesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $filesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($file));
        $this->inject($this->subject, 'files', $filesObjectStorageMock);

        $this->subject->removeFile($file);
    }

    /**
     * @test
     */
    public function getReviewsReturnsInitialValueForReview()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getReviews()
        );
    }

    /**
     * @test
     */
    public function setReviewsForObjectStorageContainingReviewSetsReviews()
    {
        $review = new \Artbdg\MediaArtbdg\Domain\Model\Review();
        $objectStorageHoldingExactlyOneReviews = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneReviews->attach($review);
        $this->subject->setReviews($objectStorageHoldingExactlyOneReviews);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneReviews,
            'reviews',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addReviewToObjectStorageHoldingReviews()
    {
        $review = new \Artbdg\MediaArtbdg\Domain\Model\Review();
        $reviewsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($review));
        $this->inject($this->subject, 'reviews', $reviewsObjectStorageMock);

        $this->subject->addReview($review);
    }

    /**
     * @test
     */
    public function removeReviewFromObjectStorageHoldingReviews()
    {
        $review = new \Artbdg\MediaArtbdg\Domain\Model\Review();
        $reviewsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $reviewsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($review));
        $this->inject($this->subject, 'reviews', $reviewsObjectStorageMock);

        $this->subject->removeReview($review);
    }

    /**
     * @test
     */
    public function getAuthorReturnsInitialValueForAuthor()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAuthor()
        );
    }

    /**
     * @test
     */
    public function setAuthorForObjectStorageContainingAuthorSetsAuthor()
    {
        $author = new \Artbdg\MediaArtbdg\Domain\Model\Author();
        $objectStorageHoldingExactlyOneAuthor = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAuthor->attach($author);
        $this->subject->setAuthor($objectStorageHoldingExactlyOneAuthor);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAuthor,
            'author',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addAuthorToObjectStorageHoldingAuthor()
    {
        $author = new \Artbdg\MediaArtbdg\Domain\Model\Author();
        $authorObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $authorObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($author));
        $this->inject($this->subject, 'author', $authorObjectStorageMock);

        $this->subject->addAuthor($author);
    }

    /**
     * @test
     */
    public function removeAuthorFromObjectStorageHoldingAuthor()
    {
        $author = new \Artbdg\MediaArtbdg\Domain\Model\Author();
        $authorObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $authorObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($author));
        $this->inject($this->subject, 'author', $authorObjectStorageMock);

        $this->subject->removeAuthor($author);
    }

    /**
     * @test
     */
    public function getCategoriesReturnsInitialValueForCategory()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCategories()
        );
    }

    /**
     * @test
     */
    public function setCategoriesForObjectStorageContainingCategorySetsCategories()
    {
        $category = new \Artbdg\MediaArtbdg\Domain\Model\Category();
        $objectStorageHoldingExactlyOneCategories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCategories->attach($category);
        $this->subject->setCategories($objectStorageHoldingExactlyOneCategories);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCategories,
            'categories',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCategoryToObjectStorageHoldingCategories()
    {
        $category = new \Artbdg\MediaArtbdg\Domain\Model\Category();
        $categoriesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoriesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($category));
        $this->inject($this->subject, 'categories', $categoriesObjectStorageMock);

        $this->subject->addCategory($category);
    }

    /**
     * @test
     */
    public function removeCategoryFromObjectStorageHoldingCategories()
    {
        $category = new \Artbdg\MediaArtbdg\Domain\Model\Category();
        $categoriesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $categoriesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($category));
        $this->inject($this->subject, 'categories', $categoriesObjectStorageMock);

        $this->subject->removeCategory($category);
    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForType()
    {
        self::assertEquals(
            null,
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForTypeSetsType()
    {
        $typeFixture = new \Artbdg\MediaArtbdg\Domain\Model\Type();
        $this->subject->setType($typeFixture);

        self::assertAttributeEquals(
            $typeFixture,
            'type',
            $this->subject
        );
    }
}
