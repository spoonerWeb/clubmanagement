<?php
namespace SpoonerWeb\Clubmanagement\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Thomas Löffler <loeffler@spooner-web.de>, Spooner Web
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
 * Club
 */
class Club extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * address
	 *
	 * @var string
	 */
	protected $address = '';

	/**
	 * zip
	 *
	 * @var string
	 */
	protected $zip = '';

	/**
	 * city
	 *
	 * @var string
	 */
	protected $city = '';

	/**
	 * responsiblePersons
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Person>
	 * @cascade remove
	 */
	protected $responsiblePersons = NULL;

	/**
	 * teams
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Team>
	 * @cascade remove
	 */
	protected $teams = NULL;

	/**
	 * logo
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $logo = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->responsiblePersons = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->teams = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the address
	 *
	 * @return string $address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Sets the address
	 *
	 * @param string $address
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * Returns the zip
	 *
	 * @return string $zip
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * Sets the zip
	 *
	 * @param string $zip
	 * @return void
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}

	/**
	 * Returns the city
	 *
	 * @return string $city
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Sets the city
	 *
	 * @param string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * Adds a Person
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Person $responsiblePerson
	 * @return void
	 */
	public function addResponsiblePerson(\SpoonerWeb\Clubmanagement\Domain\Model\Person $responsiblePerson) {
		$this->responsiblePersons->attach($responsiblePerson);
	}

	/**
	 * Removes a Person
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Person $responsiblePersonToRemove The Person to be removed
	 * @return void
	 */
	public function removeResponsiblePerson(\SpoonerWeb\Clubmanagement\Domain\Model\Person $responsiblePersonToRemove) {
		$this->responsiblePersons->detach($responsiblePersonToRemove);
	}

	/**
	 * Returns the responsiblePersons
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Person> $responsiblePersons
	 */
	public function getResponsiblePersons() {
		return $this->responsiblePersons;
	}

	/**
	 * Sets the responsiblePersons
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Person> $responsiblePersons
	 * @return void
	 */
	public function setResponsiblePersons(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $responsiblePersons) {
		$this->responsiblePersons = $responsiblePersons;
	}

	/**
	 * Adds a Team
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Team $team
	 * @return void
	 */
	public function addTeam(\SpoonerWeb\Clubmanagement\Domain\Model\Team $team) {
		$this->teams->attach($team);
	}

	/**
	 * Removes a Team
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Team $teamToRemove The Team to be removed
	 * @return void
	 */
	public function removeTeam(\SpoonerWeb\Clubmanagement\Domain\Model\Team $teamToRemove) {
		$this->teams->detach($teamToRemove);
	}

	/**
	 * Returns the teams
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Team> $teams
	 */
	public function getTeams() {
		return $this->teams;
	}

	/**
	 * Sets the teams
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Team> $teams
	 * @return void
	 */
	public function setTeams(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $teams) {
		$this->teams = $teams;
	}

	/**
	 * Returns the logo
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
	 */
	public function getLogo() {
		if (!is_object($this->logo)){
			return null;
		} elseif ($this->logo instanceof \TYPO3\CMS\Extbase\Persistence\Generic\LazyLoadingProxy) {
			$this->logo->_loadRealInstance();
		}
		return $this->logo->getOriginalResource();
	}

	/**
	 * Sets the logo
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $logo
	 * @return void
	 */
	public function setLogo($logo) {
		$this->logo = $logo;
	}

}