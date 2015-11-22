<?php

namespace C1\C1FceGrid\Controller;

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Manuel Munz <munz@comuno.net>
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
 * ************************************************************* */

use FluidTYPO3\Flux\Controller\AbstractFluxController;
use FluidTYPO3\Flux\Utility\RecursiveArrayUtility;

/**
 * Content Controller
 *
 * @route off
 */
class ContentController extends AbstractFluxController {

    /**
     * @return void
     */
    protected function initializeViewVariables() {
        $row = $this->getRecord();
        $form = $this->provider->getForm($row);
       
        $generalSettings = $this->configurationService->convertFlexFormContentToArray($row['pi_flexform'], $form);
        $contentSettings = $this->configurationService->convertFlexFormContentToArray($row['content_options'], $form);
        $this->settings = RecursiveArrayUtility::merge($this->settings, $generalSettings, FALSE, FALSE);
        if (FALSE === isset($this->settings['content'])) {
            $this->settings['content'] = $contentSettings;
        } else {
            $this->settings['content'] = RecursiveArrayUtility::merge($this->settings['content'], $contentSettings);
        }
        parent::initializeViewVariables();
    }

    public function rowAction() {
    }
}
