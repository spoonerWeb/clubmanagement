<?php
namespace SpoonerWeb\Clubmanagement\Controller;


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
 * ReportController
 */
class ReportController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * reportRepository
	 *
	 * @var \SpoonerWeb\Clubmanagement\Domain\Repository\ReportRepository
	 * @inject
	 */
	protected $reportRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$reports = $this->reportRepository->findAll();
		$this->view->assign('reports', $reports);
	}

	/**
	 * action show
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Report $report
	 * @return void
	 */
	public function showAction(\SpoonerWeb\Clubmanagement\Domain\Model\Report $report) {
		$this->view->assign('report', $report);
	}

	/**
	 * action new
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Report $newReport
	 * @ignorevalidation $newReport
	 * @return void
	 */
	public function newAction(\SpoonerWeb\Clubmanagement\Domain\Model\Report $newReport = NULL) {
		$this->view->assign('newReport', $newReport);
	}

	/**
	 * action create
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Report $newReport
	 * @return void
	 */
	public function createAction(\SpoonerWeb\Clubmanagement\Domain\Model\Report $newReport) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->reportRepository->add($newReport);
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Report $report
	 * @ignorevalidation $report
	 * @return void
	 */
	public function editAction(\SpoonerWeb\Clubmanagement\Domain\Model\Report $report) {
		$this->view->assign('report', $report);
	}

	/**
	 * action update
	 *
	 * @param \SpoonerWeb\Clubmanagement\Domain\Model\Report $report
	 * @return void
	 */
	public function updateAction(\SpoonerWeb\Clubmanagement\Domain\Model\Report $report) {
		$this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->reportRepository->update($report);
		$this->redirect('list');
	}

}