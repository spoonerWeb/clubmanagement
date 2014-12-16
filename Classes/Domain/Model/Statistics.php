<?php
namespace SpoonerWeb\Clubmanagement\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Thomas Löffler <loeffler@spooner-web.de>, Spooner Web
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Statistics
 */
class Statistics extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * minute
	 *
	 * @var integer
	 */
	protected $minute = 0;

	/**
	 * type
	 *
	 * @var \SpoonerWeb\Clubmanagement\Domain\Model\StatisticType
	 */
	protected $type = NULL;

	/**
	 * person
	 *
	 * @var \SpoonerWeb\Clubmanagement\Domain\Model\Person
	 */
	protected $person = NULL;

	/**
	 * Returns the minute
	 *
	 * @return integer $minute
	 */
	public function getMinute() {
		return $this->minute;
	}

	/**
	 * Sets the minute
	 *
	 * @param integer $minute
	 * @return void
	 */
	public function setMinute($minute) {
		$this->minute = $minute;
	}

	/**
	 * Returns the type
	 *
	 * @return \SpoonerWeb\Clubmanagement\Domain\Model\StatisticType $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\StatisticType $type
	 * @return void
	 */
	public function setType(\SpoonerWeb\Clubmanagement\Domain\Model\StatisticType $type) {
		$this->type = $type;
	}

	/**
	 * Returns the person
	 *
	 * @return \SpoonerWeb\Clubmanagement\Domain\Model\Person $person
	 */
	public function getPerson() {
		return $this->person;
	}

	/**
	 * Sets the person
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Person $person
	 * @return void
	 */
	public function setPerson(\SpoonerWeb\Clubmanagement\Domain\Model\Person $person) {
		$this->person = $person;
	}

}