<?php

namespace SpoonerWeb\Clubmanagement\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Thomas Löffler <loeffler@spooner-web.de>, Spooner Web
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
 * Test case for class \SpoonerWeb\Clubmanagement\Domain\Model\Game.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Thomas Löffler <loeffler@spooner-web.de>
 */
class GameTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \SpoonerWeb\Clubmanagement\Domain\Model\Game
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \SpoonerWeb\Clubmanagement\Domain\Model\Game();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getLocationReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLocation()
		);
	}

	/**
	 * @test
	 */
	public function setLocationForStringSetsLocation() {
		$this->subject->setLocation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'location',
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
	public function getHalfTimeResultReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getHalfTimeResult()
		);
	}

	/**
	 * @test
	 */
	public function setHalfTimeResultForStringSetsHalfTimeResult() {
		$this->subject->setHalfTimeResult('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'halfTimeResult',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFinalResultReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFinalResult()
		);
	}

	/**
	 * @test
	 */
	public function setFinalResultForStringSetsFinalResult() {
		$this->subject->setFinalResult('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'finalResult',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGameTimesReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getGameTimes()
		);
	}

	/**
	 * @test
	 */
	public function setGameTimesForIntegerSetsGameTimes() {
		$this->subject->setGameTimes(12);

		$this->assertAttributeEquals(
			12,
			'gameTimes',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMinutesPerGameTimeReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getMinutesPerGameTime()
		);
	}

	/**
	 * @test
	 */
	public function setMinutesPerGameTimeForIntegerSetsMinutesPerGameTime() {
		$this->subject->setMinutesPerGameTime(12);

		$this->assertAttributeEquals(
			12,
			'minutesPerGameTime',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInvolvedTeamsReturnsInitialValueForTeam() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getInvolvedTeams()
		);
	}

	/**
	 * @test
	 */
	public function setInvolvedTeamsForObjectStorageContainingTeamSetsInvolvedTeams() {
		$involvedTeam = new \SpoonerWeb\Clubmanagement\Domain\Model\Team();
		$objectStorageHoldingExactlyOneInvolvedTeams = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneInvolvedTeams->attach($involvedTeam);
		$this->subject->setInvolvedTeams($objectStorageHoldingExactlyOneInvolvedTeams);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneInvolvedTeams,
			'involvedTeams',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addInvolvedTeamToObjectStorageHoldingInvolvedTeams() {
		$involvedTeam = new \SpoonerWeb\Clubmanagement\Domain\Model\Team();
		$involvedTeamsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$involvedTeamsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($involvedTeam));
		$this->inject($this->subject, 'involvedTeams', $involvedTeamsObjectStorageMock);

		$this->subject->addInvolvedTeam($involvedTeam);
	}

	/**
	 * @test
	 */
	public function removeInvolvedTeamFromObjectStorageHoldingInvolvedTeams() {
		$involvedTeam = new \SpoonerWeb\Clubmanagement\Domain\Model\Team();
		$involvedTeamsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$involvedTeamsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($involvedTeam));
		$this->inject($this->subject, 'involvedTeams', $involvedTeamsObjectStorageMock);

		$this->subject->removeInvolvedTeam($involvedTeam);

	}

	/**
	 * @test
	 */
	public function getStatisticsReturnsInitialValueForStatistics() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getStatistics()
		);
	}

	/**
	 * @test
	 */
	public function setStatisticsForObjectStorageContainingStatisticsSetsStatistics() {
		$statistic = new \SpoonerWeb\Clubmanagement\Domain\Model\Statistics();
		$objectStorageHoldingExactlyOneStatistics = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneStatistics->attach($statistic);
		$this->subject->setStatistics($objectStorageHoldingExactlyOneStatistics);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneStatistics,
			'statistics',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addStatisticToObjectStorageHoldingStatistics() {
		$statistic = new \SpoonerWeb\Clubmanagement\Domain\Model\Statistics();
		$statisticsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$statisticsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($statistic));
		$this->inject($this->subject, 'statistics', $statisticsObjectStorageMock);

		$this->subject->addStatistic($statistic);
	}

	/**
	 * @test
	 */
	public function removeStatisticFromObjectStorageHoldingStatistics() {
		$statistic = new \SpoonerWeb\Clubmanagement\Domain\Model\Statistics();
		$statisticsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$statisticsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($statistic));
		$this->inject($this->subject, 'statistics', $statisticsObjectStorageMock);

		$this->subject->removeStatistic($statistic);

	}
}
