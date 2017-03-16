<?php

/**
 * @file plugins/themes/Form_Akademisk/Form_AkademiskThemePlugin.inc.php
 *
 * Copyright (c) 2013-2014 Simon Fraser University Library
 * Copyright (c) 2003-2014 John Willinsky
 * Copyright (c) 2014 Eirik Hanssen, Oslo and Akershus University College of Applied Sciences
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class Form_AkademiskThemePlugin
 * @ingroup plugins_themes_Form_Akademisk
 *
 * @brief "Form_Akademisk" theme plugin
 */

import('classes.plugins.ThemePlugin');

class Form_AkademiskThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'Form_AkademiskThemePlugin';
	}

	function getDisplayName() {
		return 'Form_Akademisk Theme';
	}

	function getDescription() {
		return 'fluid layout for Form Akademisk, based on uncommon theme';
	}

	function getStylesheetFilename() {
		return 'Form_Akademisk.css';
	}
	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
