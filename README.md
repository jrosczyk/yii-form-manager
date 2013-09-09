yii-form-manager
=======

Form builder module for the Yii framework.

## Overview
This module provides an interface to build forms within Yii and dynamically builds database tables for each of the forms. It also allows the forms to be populated and managed. I built this for another app and decided to open source the skeleton. You'll most likely need to theme it, add permissions, and probably create public views for your forms. Feel free to fork it, add to it, and commit it back... perhaps it will grow.

## Setup

 * Copy the fm directory inside your modules folder.
 * Inside your app's config/main.php add the following:
	* 'modules' => array(
		...
		'fm',
		...
	   ),
	* 'urlManager' => array(
		// uncomment the following if you have enabled Apache's Rewrite module.
		'urlFormat' => 'path',
		'showScriptName' => false,
		'caseSensitive' => false,
		'rules' => array(
			// default rules
			'<controller:\w+>/<id:\d+>' => '<controller>/view',
			'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
			'<controller:\w+>/<action:\w+>' => '<controller>/<action>',
			// formManager rules
			'fm/forms/<form:\d+>/fields/new' => 'fm/fields/new',
			'fm/forms/<form:\d+>/fields/<field:\d+>/view' => 'fm/fields/view',
			'fm/forms/<form:\d+>/fields/<field:\d+>/edit' => 'fm/fields/edit',
			'fm/forms/<form:\d+>/fields/<field:\d+>/delete' => 'fm/fields/delete',
			'fm/forms/<form:\d+>/fields/all' => 'fm/fields/index',
			'fm/forms/new' => 'fm/forms/new',
			'fm/forms/<form:\d+>/view' => 'fm/forms/view',
			'fm/forms/<form:\d+>/edit' => 'fm/forms/edit',
			'fm/forms/<form:\d+>/delete' => 'fm/forms/delete',
			'fm/forms/all' => 'fm/forms/index',
			'fm/types/new' => 'fm/types/new',
			'fm/types/<type:\d+>/view' => 'fm/types/view',
			'fm/types/<type:\d+>/edit' => 'fm/types/edit',
			'fm/types/<type:\d+>/delete' => 'fm/types/delete',
			'fm/types/all' => 'fm/types/index',
			'fm/form/<form:\d+>/entry/<entry:\d+>/view' => 'fm/entry/view',
			'fm/form/<form:\d+>/entry/<entry:\d+>/edit' => 'fm/entry/edit',
			'fm/form/<form:\d+>/entry/<entry:\d+>/delete' => 'fm/entry/delete',
			'fm/form/<form:\d+>/entry/all' => 'fm/entry/index',
			'fm/form/<form:\d+>/entry/new' => 'fm/entry/new',
		  ),
		),
 * Run the migration inside the modules/fm/migrations folder.
 * Login to your app as admin.
 * Navigate to `/index.php/fm` to create and manage forms.

