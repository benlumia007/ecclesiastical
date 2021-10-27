/**
 * Theme Export Script
 *
 * Exports the production-ready theme with only the files and folders needed for
 * uploading to a site or zipping. Edit the `files` or `folders` variables if
 * you need to change something.
 *
 * @package   Ecclesiastical
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2016-2021. Benjamin Lu
 * @link      https://luthemes.com/portfolio/ecclesiastical
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 */

// Import required packages.
const mix     = require( 'laravel-mix' );
const rimraf  = require( 'rimraf' );
const fs      = require( 'fs' );

// Folder name to export the files to.
let exportPath = 'ecclesiastical';

// Theme root-level files to include.
let files = [
	'changelog.md',
	'functions.php',
	'index.php',
	'readme.txt',
	'screenshot.png',
	'style.css'
];

// Folders to include.
let folders = [
	'app',
	'languages',
	'public',
	'vendor'
];

// Delete the previous export to start clean.
rimraf.sync( exportPath );

// Loop through the root files and copy them over.
files.forEach( file => {

	if ( fs.existsSync( file ) ) {
		mix.copy( file, `${exportPath}/${file}` );
	}
} );

// Loop through the folders and copy them over.
folders.forEach( folder => {

	if ( fs.existsSync( folder ) ) {
		mix.copyDirectory( folder, `${exportPath}/${folder}` );
	}
} );

// Delete the `vendor/bin` and `vendor/composer/installers` folder, which can
// get left over, even in production. Mix will also create an additional
// `mix-manifest.json` file in the root, which we don't need.
mix.then( () => {

	let files = [
		`${exportPath}/vendor/bin`,
	 	`${exportPath}/vendor/composer/installers`
	];

	files.forEach( file => {
		rimraf.sync( file );
	} );
} );