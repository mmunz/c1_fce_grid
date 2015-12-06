<?php

namespace C1\C1FceGrid\Controller;


/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 info@augsburg.freifunk.net <>
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

use FluidTYPO3\Fluidcontent\Controller\ContentController as AbstractController;
//use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Content Controller
 *
 * @route off
 */
class ContentController extends AbstractController {
	/**
	 * @return void
	 */
	public function containerAction() {
        //$this->includeStylesheets();
    }

    /**
	 * @return void
	 */
    public function rowAction() {
        $cssClasses = str_replace(",", " ", $this->settings['additionalCssClasses']);
        $this->view->assign('cssClasses', $cssClasses);
    }
}
