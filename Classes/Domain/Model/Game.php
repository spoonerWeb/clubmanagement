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
 * Game
 */
class Game extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * location
	 *
	 * @var string
	 */
	protected $location = '';

	/**
	 * datetime
	 *
	 * @var \DateTime
	 */
	protected $datetime = NULL;

	/**
	 * halfTimeResult
	 *
	 * @var string
	 */
	protected $halfTimeResult = '';

	/**
	 * finalResult
	 *
	 * @var string
	 */
	protected $finalResult = '';

	/**
	 * gameTimes
	 *
	 * @var integer
	 */
	protected $gameTimes = 0;

	/**
	 * minutesPerGameTime
	 *
	 * @var integer
	 */
	protected $minutesPerGameTime = 0;

	/**
	 * involvedTeams
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Team>
	 */
	protected $involvedTeams = NULL;

	/**
	 * statistics
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Statistics>
	 * @cascade remove
	 */
	protected $statistics = NULL;

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
		$this->involvedTeams = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->statistics = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the location
	 *
	 * @return string $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param string $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Returns the datetime
	 *
	 * @return \DateTime $datetime
	 */
	public function getDatetime() {
		return $this->datetime;
	}

	/**
	 * Sets the datetime
	 *
	 * @param \DateTime $datetime
	 * @return void
	 */
	public function setDatetime(\DateTime $datetime) {
		$this->datetime = $datetime;
	}

	/**
	 * Returns the halfTimeResult
	 *
	 * @return string $halfTimeResult
	 */
	public function getHalfTimeResult() {
		return $this->halfTimeResult;
	}

	/**
	 * Sets the halfTimeResult
	 *
	 * @param string $halfTimeResult
	 * @return void
	 */
	public function setHalfTimeResult($halfTimeResult) {
		$this->halfTimeResult = $halfTimeResult;
	}

	/**
	 * Returns the finalResult
	 *
	 * @return string $finalResult
	 */
	public function getFinalResult() {
		return $this->finalResult;
	}

	/**
	 * Sets the finalResult
	 *
	 * @param string $finalResult
	 * @return void
	 */
	public function setFinalResult($finalResult) {
		$this->finalResult = $finalResult;
	}

	/**
	 * Returns the gameTimes
	 *
	 * @return integer $gameTimes
	 */
	public function getGameTimes() {
		return $this->gameTimes;
	}

	/**
	 * Sets the gameTimes
	 *
	 * @param integer $gameTimes
	 * @return void
	 */
	public function setGameTimes($gameTimes) {
		$this->gameTimes = $gameTimes;
	}

	/**
	 * Returns the minutesPerGameTime
	 *
	 * @return integer $minutesPerGameTime
	 */
	public function getMinutesPerGameTime() {
		return $this->minutesPerGameTime;
	}

	/**
	 * Sets the minutesPerGameTime
	 *
	 * @param integer $minutesPerGameTime
	 * @return void
	 */
	public function setMinutesPerGameTime($minutesPerGameTime) {
		$this->minutesPerGameTime = $minutesPerGameTime;
	}

	/**
	 * Adds a Team
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Team $involvedTeam
	 * @return void
	 */
	public function addInvolvedTeam(\SpoonerWeb\Clubmanagement\Domain\Model\Team $involvedTeam) {
		$this->involvedTeams->attach($involvedTeam);
	}

	/**
	 * Removes a Team
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Team $involvedTeamToRemove The Team to be removed
	 * @return void
	 */
	public function removeInvolvedTeam(\SpoonerWeb\Clubmanagement\Domain\Model\Team $involvedTeamToRemove) {
		$this->involvedTeams->detach($involvedTeamToRemove);
	}

	/**
	 * Returns the involvedTeams
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Team> $involvedTeams
	 */
	public function getInvolvedTeams() {
		return $this->involvedTeams;
	}

	/**
	 * Sets the involvedTeams
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Team> $involvedTeams
	 * @return void
	 */
	public function setInvolvedTeams(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $involvedTeams) {
		$this->involvedTeams = $involvedTeams;
	}

	/**
	 * Adds a Statistics
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Statistics $statistic
	 * @return void
	 */
	public function addStatistic(\SpoonerWeb\Clubmanagement\Domain\Model\Statistics $statistic) {
		$this->statistics->attach($statistic);
	}

	/**
	 * Removes a Statistics
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Statistics $statisticToRemove The Statistics to be removed
	 * @return void
	 */
	public function removeStatistic(\SpoonerWeb\Clubmanagement\Domain\Model\Statistics $statisticToRemove) {
		$this->statistics->detach($statisticToRemove);
	}

	/**
	 * Returns the statistics
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Statistics> $statistics
	 */
	public function getStatistics() {
		return $this->statistics;
	}

	/**
	 * Sets the statistics
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Statistics> $statistics
	 * @return void
	 */
	public function setStatistics(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $statistics) {
		$this->statistics = $statistics;
	}

}