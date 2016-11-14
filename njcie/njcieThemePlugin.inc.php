<?php

/**
 * @file plugins/themes/njcie/njcieThemePlugin.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class njcieThemePlugin
 * @ingroup plugins_themes_njcie
 *
 * @brief "njcie" theme plugin
 */

import('classes.plugins.ThemePlugin');

class njcieThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'njcieThemePlugin';
	}

	function getDisplayName() {
		return 'NJCIE Theme';
	}

	function getDescription() {
		return 'Responsive theme for Nordisk Barnehageforskning, based on Vanilla theme';
	}

	function getStylesheetFilename() {
		return 'njcie.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
