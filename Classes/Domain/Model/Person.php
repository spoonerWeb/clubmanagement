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
 * Person
 */
class Person extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * frontendUser
	 *
	 * @var
	 */
	protected $frontendUser = NULL;

	/**
	 * role
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Role>
	 */
	protected $role = NULL;

	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image = NULL;

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
		$this->role = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
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
	 * Returns the frontendUser
	 *
	 * @return  $frontendUser
	 */
	public function getFrontendUser() {
		return $this->frontendUser;
	}

	/**
	 * Sets the frontendUser
	 *
	 * @param string $frontendUser
	 * @return void
	 */
	public function setFrontendUser($frontendUser) {
		$this->frontendUser = $frontendUser;
	}

	/**
	 * Adds a Role
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Role $role
	 * @return void
	 */
	public function addRole(\SpoonerWeb\Clubmanagement\Domain\Model\Role $role) {
		$this->role->attach($role);
	}

	/**
	 * Removes a Role
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Role $roleToRemove The Role to be removed
	 * @return void
	 */
	public function removeRole(\SpoonerWeb\Clubmanagement\Domain\Model\Role $roleToRemove) {
		$this->role->detach($roleToRemove);
	}

	/**
	 * Returns the role
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Role> $role
	 */
	public function getRole() {
		return $this->role;
	}

	/**
	 * Sets the role
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\SpoonerWeb\Clubmanagement\Domain\Model\Role> $role
	 * @return void
	 */
	public function setRole(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $role) {
		$this->role = $role;
	}

	/**
	 * Returns the image
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		if (!is_object($this->image)){
			return null;
		} elseif ($this->image instanceof \TYPO3\CMS\Extbase\Persistence\Generic\LazyLoadingProxy) {
			$this->image->_loadRealInstance();
		}
		return $this->image->getOriginalResource();
	}

	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

}