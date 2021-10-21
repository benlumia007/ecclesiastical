<?php
/**
 * Boot the framework
 *
 * @package   Ecclesiastical
 * @author    Benjamin Lu ( benlumia007@gmail.com )
 * @copyright Copyright (C) 2016-2021. Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/ecclesiastical
 */

/**
 * Create a new framework instance
 *x
 * This will create an instance of the framework allowing you to initialize the theme.
 */
$ecclesiastical = new Benlumia007\Backdrop\Framework();

/**
 * Register default providers
 */
$ecclesiastical->provider( Benlumia007\Backdrop\FontAwesome\Provider::class );
$ecclesiastical->provider( Benlumia007\Backdrop\GoogleFonts\Provider::class );
$ecclesiastical->provider( Benlumia007\Backdrop\Template\Hierarchy\Provider::class );
$ecclesiastical->provider( Benlumia007\Backdrop\Template\Manager\Provider::class );
$ecclesiastical->provider( Benlumia007\Backdrop\Template\View\Provider::class );

/**
 * Register Service Provider with the Framework
 */
$ecclesiastical->provider( Ecclesiastical\Menu\Provider::class );
$ecclesiastical->provider( Ecclesiastical\Sidebar\Provider::class );

/**
 * Boot the Framework
 */
$ecclesiastical->boot();