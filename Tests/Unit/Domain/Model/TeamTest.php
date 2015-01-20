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
 * Test case for class \SpoonerWeb\Clubmanagement\Domain\Model\Team.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Thomas Löffler <loeffler@spooner-web.de>
 */
class TeamTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \SpoonerWeb\Clubmanagement\Domain\Model\Team
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \SpoonerWeb\Clubmanagement\Domain\Model\Team();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getAdvisorsReturnsInitialValueForPerson() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getAdvisors()
		);
	}

	/**
	 * @test
	 */
	public function setAdvisorsForObjectStorageContainingPersonSetsAdvisors() {
		$advisor = new \SpoonerWeb\Clubmanagement\Domain\Model\Person();
		$objectStorageHoldingExactlyOneAdvisors = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneAdvisors->attach($advisor);
		$this->subject->setAdvisors($objectStorageHoldingExactlyOneAdvisors);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneAdvisors,
			'advisors',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addAdvisorToObjectStorageHoldingAdvisors() {
		$advisor = new \SpoonerWeb\Clubmanagement\Domain\Model\Person();
		$advisorsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$advisorsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($advisor));
		$this->inject($this->subject, 'advisors', $advisorsObjectStorageMock);

		$this->subject->addAdvisor($advisor);
	}

	/**
	 * @test
	 */
	public function removeAdvisorFromObjectStorageHoldingAdvisors() {
		$advisor = new \SpoonerWeb\Clubmanagement\Domain\Model\Person();
		$advisorsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$advisorsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($advisor));
		$this->inject($this->subject, 'advisors', $advisorsObjectStorageMock);

		$this->subject->removeAdvisor($advisor);

	}

	/**
	 * @test
	 */
	public function getPlayersReturnsInitialValueForPerson() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getPlayers()
		);
	}

	/**
	 * @test
	 */
	public function setPlayersForObjectStorageContainingPersonSetsPlayers() {
		$player = new \SpoonerWeb\Clubmanagement\Domain\Model\Person();
		$objectStorageHoldingExactlyOnePlayers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOnePlayers->attach($player);
		$this->subject->setPlayers($objectStorageHoldingExactlyOnePlayers);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOnePlayers,
			'players',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addPlayerToObjectStorageHoldingPlayers() {
		$player = new \SpoonerWeb\Clubmanagement\Domain\Model\Person();
		$playersObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$playersObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($player));
		$this->inject($this->subject, 'players', $playersObjectStorageMock);

		$this->subject->addPlayer($player);
	}

	/**
	 * @test
	 */
	public function removePlayerFromObjectStorageHoldingPlayers() {
		$player = new \SpoonerWeb\Clubmanagement\Domain\Model\Person();
		$playersObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$playersObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($player));
		$this->inject($this->subject, 'players', $playersObjectStorageMock);

		$this->subject->removePlayer($player);

	}

	/**
	 * @test
	 */
	public function getReportsReturnsInitialValueForReport() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getReports()
		);
	}

	/**
	 * @test
	 */
	public function setReportsForObjectStorageContainingReportSetsReports() {
		$report = new \SpoonerWeb\Clubmanagement\Domain\Model\Report();
		$objectStorageHoldingExactlyOneReports = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneReports->attach($report);
		$this->subject->setReports($objectStorageHoldingExactlyOneReports);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneReports,
			'reports',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addReportToObjectStorageHoldingReports() {
		$report = new \SpoonerWeb\Clubmanagement\Domain\Model\Report();
		$reportsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$reportsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($report));
		$this->inject($this->subject, 'reports', $reportsObjectStorageMock);

		$this->subject->addReport($report);
	}

	/**
	 * @test
	 */
	public function removeReportFromObjectStorageHoldingReports() {
		$report = new \SpoonerWeb\Clubmanagement\Domain\Model\Report();
		$reportsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$reportsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($report));
		$this->inject($this->subject, 'reports', $reportsObjectStorageMock);

		$this->subject->removeReport($report);

	}
}
