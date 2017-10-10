<?php

/**
 * @file plugins/themes/Seminar/SeminarThemePlugin.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Copyright (c) 2014 Eirik Hanssen, Oslo and Akershus University College of Applied Sciences
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class SeminarThemePlugin
 * @ingroup plugins_themes_Seminar
 *
 * @brief "Seminar" theme plugin
 */

import('classes.plugins.ThemePlugin');

class SeminarThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'SeminarThemePlugin';
	}

	function getDisplayName() {
		return 'Seminar Theme';
	}

	function getDescription() {
		return 'fluid layout for Seminar, based on uncommon theme';
	}

	function getStylesheetFilename() {
		return 'Seminar.css';
	}
	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
