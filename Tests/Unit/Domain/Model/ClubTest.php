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
 * Test case for class \SpoonerWeb\Clubmanagement\Domain\Model\Club.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Thomas Löffler <loeffler@spooner-web.de>
 */
class ClubTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \SpoonerWeb\Clubmanagement\Domain\Model\Club
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \SpoonerWeb\Clubmanagement\Domain\Model\Club();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName() {
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAddressReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAddress()
		);
	}

	/**
	 * @test
	 */
	public function setAddressForStringSetsAddress() {
		$this->subject->setAddress('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'address',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZipReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getZip()
		);
	}

	/**
	 * @test
	 */
	public function setZipForStringSetsZip() {
		$this->subject->setZip('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'zip',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCity()
		);
	}

	/**
	 * @test
	 */
	public function setCityForStringSetsCity() {
		$this->subject->setCity('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'city',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getResponsiblePersonsReturnsInitialValueForPerson() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getResponsiblePersons()
		);
	}

	/**
	 * @test
	 */
	public function setResponsiblePersonsForObjectStorageContainingPersonSetsResponsiblePersons() {
		$responsiblePerson = new \SpoonerWeb\Clubmanagement\Domain\Model\Person();
		$objectStorageHoldingExactlyOneResponsiblePersons = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneResponsiblePersons->attach($responsiblePerson);
		$this->subject->setResponsiblePersons($objectStorageHoldingExactlyOneResponsiblePersons);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneResponsiblePersons,
			'responsiblePersons',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addResponsiblePersonToObjectStorageHoldingResponsiblePersons() {
		$responsiblePerson = new \SpoonerWeb\Clubmanagement\Domain\Model\Person();
		$responsiblePersonsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$responsiblePersonsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($responsiblePerson));
		$this->inject($this->subject, 'responsiblePersons', $responsiblePersonsObjectStorageMock);

		$this->subject->addResponsiblePerson($responsiblePerson);
	}

	/**
	 * @test
	 */
	public function removeResponsiblePersonFromObjectStorageHoldingResponsiblePersons() {
		$responsiblePerson = new \SpoonerWeb\Clubmanagement\Domain\Model\Person();
		$responsiblePersonsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$responsiblePersonsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($responsiblePerson));
		$this->inject($this->subject, 'responsiblePersons', $responsiblePersonsObjectStorageMock);

		$this->subject->removeResponsiblePerson($responsiblePerson);

	}

	/**
	 * @test
	 */
	public function getTeamsReturnsInitialValueForTeam() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getTeams()
		);
	}

	/**
	 * @test
	 */
	public function setTeamsForObjectStorageContainingTeamSetsTeams() {
		$team = new \SpoonerWeb\Clubmanagement\Domain\Model\Team();
		$objectStorageHoldingExactlyOneTeams = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneTeams->attach($team);
		$this->subject->setTeams($objectStorageHoldingExactlyOneTeams);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneTeams,
			'teams',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addTeamToObjectStorageHoldingTeams() {
		$team = new \SpoonerWeb\Clubmanagement\Domain\Model\Team();
		$teamsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$teamsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($team));
		$this->inject($this->subject, 'teams', $teamsObjectStorageMock);

		$this->subject->addTeam($team);
	}

	/**
	 * @test
	 */
	public function removeTeamFromObjectStorageHoldingTeams() {
		$team = new \SpoonerWeb\Clubmanagement\Domain\Model\Team();
		$teamsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$teamsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($team));
		$this->inject($this->subject, 'teams', $teamsObjectStorageMock);

		$this->subject->removeTeam($team);

	}

	/**
	 * @test
	 */
	public function getLogoReturnsInitialValueFor() {	}

	/**
	 * @test
	 */
	public function setLogoForSetsLogo() {	}
}
