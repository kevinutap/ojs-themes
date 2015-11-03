<?php

/**
 * @file plugins/themes/ungdomsforskning/ungdomsforskningThemePlugin.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class ungdomsforskningThemePlugin
 * @ingroup plugins_themes_ungdomsforskning
 *
 * @brief "ungdomsforskning" theme plugin
 */

import('classes.plugins.ThemePlugin');

class ungdomsforskningThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'ungdomsforskningThemePlugin';
	}

	function getDisplayName() {
		return 'ungdomsforskning Theme';
	}

	function getDescription() {
		return 'Responsive theme for Tidsskrift for ungdomsforskning, based on ungdomsforskning theme';
	}

	function getStylesheetFilename() {
		return 'ungdomsforskning.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
