<?php

namespace SpoonerWeb\Clubmanagement\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Thomas Löffler <loeffler@spooner-web.de>, Spooner Web
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \SpoonerWeb\Clubmanagement\Domain\Model\Report.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Thomas Löffler <loeffler@spooner-web.de>
 */
class ReportTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \SpoonerWeb\Clubmanagement\Domain\Model\Report
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \SpoonerWeb\Clubmanagement\Domain\Model\Report();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getHeaderReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getHeader()
		);
	}

	/**
	 * @test
	 */
	public function setHeaderForStringSetsHeader() {
		$this->subject->setHeader('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'header',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBodytextReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBodytext()
		);
	}

	/**
	 * @test
	 */
	public function setBodytextForStringSetsBodytext() {
		$this->subject->setBodytext('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'bodytext',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDatetimeReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getDatetime()
		);
	}

	/**
	 * @test
	 */
	public function setDatetimeForDateTimeSetsDatetime() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setDatetime($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'datetime',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTypeReturnsInitialValueForReportType() {
		$this->assertEquals(
			NULL,
			$this->subject->getType()
		);
	}

	/**
	 * @test
	 */
	public function setTypeForReportTypeSetsType() {
		$typeFixture = new \SpoonerWeb\Clubmanagement\Domain\Model\ReportType();
		$this->subject->setType($typeFixture);

		$this->assertAttributeEquals(
			$typeFixture,
			'type',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGamesReturnsInitialValueForGame() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getGames()
		);
	}

	/**
	 * @test
	 */
	public function setGamesForObjectStorageContainingGameSetsGames() {
		$game = new \SpoonerWeb\Clubmanagement\Domain\Model\Game();
		$objectStorageHoldingExactlyOneGames = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneGames->attach($game);
		$this->subject->setGames($objectStorageHoldingExactlyOneGames);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneGames,
			'games',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addGameToObjectStorageHoldingGames() {
		$game = new \SpoonerWeb\Clubmanagement\Domain\Model\Game();
		$gamesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$gamesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($game));
		$this->inject($this->subject, 'games', $gamesObjectStorageMock);

		$this->subject->addGame($game);
	}

	/**
	 * @test
	 */
	public function removeGameFromObjectStorageHoldingGames() {
		$game = new \SpoonerWeb\Clubmanagement\Domain\Model\Game();
		$gamesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$gamesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($game));
		$this->inject($this->subject, 'games', $gamesObjectStorageMock);

		$this->subject->removeGame($game);

	}

	/**
	 * @test
	 */
	public function getImagesReturnsInitialValueFor() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getImages()
		);
	}

	/**
	 * @test
	 */
	public function setImagesForObjectStorageContainingSetsImages() {
		$image = new ();
		$objectStorageHoldingExactlyOneImages = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneImages->attach($image);
		$this->subject->setImages($objectStorageHoldingExactlyOneImages);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneImages,
			'images',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addImageToObjectStorageHoldingImages() {
		$image = new ();
		$imagesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$imagesObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($image));
		$this->inject($this->subject, 'images', $imagesObjectStorageMock);

		$this->subject->addImage($image);
	}

	/**
	 * @test
	 */
	public function removeImageFromObjectStorageHoldingImages() {
		$image = new ();
		$imagesObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$imagesObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($image));
		$this->inject($this->subject, 'images', $imagesObjectStorageMock);

		$this->subject->removeImage($image);

	}
}
