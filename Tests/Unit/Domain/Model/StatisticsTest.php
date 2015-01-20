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
 * Test case for class \SpoonerWeb\Clubmanagement\Domain\Model\Statistics.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Thomas Löffler <loeffler@spooner-web.de>
 */
class StatisticsTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \SpoonerWeb\Clubmanagement\Domain\Model\Statistics
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \SpoonerWeb\Clubmanagement\Domain\Model\Statistics();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getMinuteReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getMinute()
		);
	}

	/**
	 * @test
	 */
	public function setMinuteForIntegerSetsMinute() {
		$this->subject->setMinute(12);

		$this->assertAttributeEquals(
			12,
			'minute',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTypeReturnsInitialValueForStatisticType() {
		$this->assertEquals(
			NULL,
			$this->subject->getType()
		);
	}

	/**
	 * @test
	 */
	public function setTypeForStatisticTypeSetsType() {
		$typeFixture = new \SpoonerWeb\Clubmanagement\Domain\Model\StatisticType();
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
	public function getPersonReturnsInitialValueForPerson() {
		$this->assertEquals(
			NULL,
			$this->subject->getPerson()
		);
	}

	/**
	 * @test
	 */
	public function setPersonForPersonSetsPerson() {
		$personFixture = new \SpoonerWeb\Clubmanagement\Domain\Model\Person();
		$this->subject->setPerson($personFixture);

		$this->assertAttributeEquals(
			$personFixture,
			'person',
			$this->subject
		);
	}
}
