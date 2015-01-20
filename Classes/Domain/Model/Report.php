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
 * Report
 */
class Report extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * header
	 *
	 * @var string
	 */
	protected $header = '';

	/**
	 * bodytext
	 *
	 * @var string
	 */
	protected $bodytext = '';

	/**
	 * datetime
	 *
	 * @var \DateTime
	 */
	protected $datetime = NULL;

	/**
	 * type
	 *
	 * @var \SpoonerWeb\Clubmanagement\Domain\Model\ReportType
	 */
	protected $type = NULL;

	/**
	 * games
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Game>
	 * @cascade remove
	 */
	protected $games = NULL;

	/**
	 * images
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<>
	 * @cascade remove
	 */
	protected $images = NULL;

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
		$this->games = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the header
	 *
	 * @return string $header
	 */
	public function getHeader() {
		return $this->header;
	}

	/**
	 * Sets the header
	 *
	 * @param string $header
	 * @return void
	 */
	public function setHeader($header) {
		$this->header = $header;
	}

	/**
	 * Returns the bodytext
	 *
	 * @return string $bodytext
	 */
	public function getBodytext() {
		return $this->bodytext;
	}

	/**
	 * Sets the bodytext
	 *
	 * @param string $bodytext
	 * @return void
	 */
	public function setBodytext($bodytext) {
		$this->bodytext = $bodytext;
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
	 * Returns the type
	 *
	 * @return \SpoonerWeb\Clubmanagement\Domain\Model\ReportType $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\ReportType $type
	 * @return void
	 */
	public function setType(\SpoonerWeb\Clubmanagement\Domain\Model\ReportType $type) {
		$this->type = $type;
	}

	/**
	 * Adds a Game
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Game $game
	 * @return void
	 */
	public function addGame(\SpoonerWeb\Clubmanagement\Domain\Model\Game $game) {
		$this->games->attach($game);
	}

	/**
	 * Removes a Game
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Game $gameToRemove The Game to be removed
	 * @return void
	 */
	public function removeGame(\SpoonerWeb\Clubmanagement\Domain\Model\Game $gameToRemove) {
		$this->games->detach($gameToRemove);
	}

	/**
	 * Returns the games
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Game> $games
	 */
	public function getGames() {
		return $this->games;
	}

	/**
	 * Sets the games
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Game> $games
	 * @return void
	 */
	public function setGames(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $games) {
		$this->games = $games;
	}

	/**
	 * Adds a
	 *
	 * @param  $image
	 * @return void
	 */
	public function addImage($image) {
		$this->images->attach($image);
	}

	/**
	 * Removes a
	 *
	 * @param $imageToRemove The  to be removed
	 * @return void
	 */
	public function removeImage($imageToRemove) {
		$this->images->detach($imageToRemove);
	}

	/**
	 * Returns the images
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $images
	 */
	public function getImages() {
		return $this->images;
	}

	/**
	 * Sets the images
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $images
	 * @return void
	 */
	public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images) {
		$this->images = $images;
	}

}