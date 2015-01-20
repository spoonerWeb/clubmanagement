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
 * Team
 */
class Team extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * advisors
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Person>
	 */
	protected $advisors = NULL;

	/**
	 * players
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Person>
	 */
	protected $players = NULL;

	/**
	 * reports
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Report>
	 * @cascade remove
	 */
	protected $reports = NULL;

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
		$this->advisors = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->players = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->reports = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Adds a Person
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Person $advisor
	 * @return void
	 */
	public function addAdvisor(\SpoonerWeb\Clubmanagement\Domain\Model\Person $advisor) {
		$this->advisors->attach($advisor);
	}

	/**
	 * Removes a Person
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Person $advisorToRemove The Person to be removed
	 * @return void
	 */
	public function removeAdvisor(\SpoonerWeb\Clubmanagement\Domain\Model\Person $advisorToRemove) {
		$this->advisors->detach($advisorToRemove);
	}

	/**
	 * Returns the advisors
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Person> $advisors
	 */
	public function getAdvisors() {
		return $this->advisors;
	}

	/**
	 * Sets the advisors
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Person> $advisors
	 * @return void
	 */
	public function setAdvisors(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $advisors) {
		$this->advisors = $advisors;
	}

	/**
	 * Adds a Person
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Person $player
	 * @return void
	 */
	public function addPlayer(\SpoonerWeb\Clubmanagement\Domain\Model\Person $player) {
		$this->players->attach($player);
	}

	/**
	 * Removes a Person
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Person $playerToRemove The Person to be removed
	 * @return void
	 */
	public function removePlayer(\SpoonerWeb\Clubmanagement\Domain\Model\Person $playerToRemove) {
		$this->players->detach($playerToRemove);
	}

	/**
	 * Returns the players
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Person> $players
	 */
	public function getPlayers() {
		return $this->players;
	}

	/**
	 * Sets the players
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Person> $players
	 * @return void
	 */
	public function setPlayers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $players) {
		$this->players = $players;
	}

	/**
	 * Adds a Report
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Report $report
	 * @return void
	 */
	public function addReport(\SpoonerWeb\Clubmanagement\Domain\Model\Report $report) {
		$this->reports->attach($report);
	}

	/**
	 * Removes a Report
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Report $reportToRemove The Report to be removed
	 * @return void
	 */
	public function removeReport(\SpoonerWeb\Clubmanagement\Domain\Model\Report $reportToRemove) {
		$this->reports->detach($reportToRemove);
	}

	/**
	 * Returns the reports
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Report> $reports
	 */
	public function getReports() {
		return $this->reports;
	}

	/**
	 * Sets the reports
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Report> $reports
	 * @return void
	 */
	public function setReports(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $reports) {
		$this->reports = $reports;
	}

}