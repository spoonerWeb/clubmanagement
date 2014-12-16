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
 * Test case for class \SpoonerWeb\Clubmanagement\Domain\Model\Person.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Thomas Löffler <loeffler@spooner-web.de>
 */
class PersonTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \SpoonerWeb\Clubmanagement\Domain\Model\Person
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \SpoonerWeb\Clubmanagement\Domain\Model\Person();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
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
	public function getFrontendUserReturnsInitialValueFor() {	}

	/**
	 * @test
	 */
	public function setFrontendUserForSetsFrontendUser() {	}

	/**
	 * @test
	 */
	public function getRoleReturnsInitialValueForRole() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getRole()
		);
	}

	/**
	 * @test
	 */
	public function setRoleForObjectStorageContainingRoleSetsRole() {
		$role = new \SpoonerWeb\Clubmanagement\Domain\Model\Role();
		$objectStorageHoldingExactlyOneRole = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneRole->attach($role);
		$this->subject->setRole($objectStorageHoldingExactlyOneRole);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneRole,
			'role',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addRoleToObjectStorageHoldingRole() {
		$role = new \SpoonerWeb\Clubmanagement\Domain\Model\Role();
		$roleObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$roleObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($role));
		$this->inject($this->subject, 'role', $roleObjectStorageMock);

		$this->subject->addRole($role);
	}

	/**
	 * @test
	 */
	public function removeRoleFromObjectStorageHoldingRole() {
		$role = new \SpoonerWeb\Clubmanagement\Domain\Model\Role();
		$roleObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$roleObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($role));
		$this->inject($this->subject, 'role', $roleObjectStorageMock);

		$this->subject->removeRole($role);

	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueFor() {	}

	/**
	 * @test
	 */
	public function setImageForSetsImage() {	}
}
