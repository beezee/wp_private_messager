<?php
/*
Plugin Name: Private Messager 
Plugin URI: https://github.com/beezee/wp-private-messager
Description: Adds private messaging to wp-admin
Version: 0.0.1
Author: beezeee
Author URI: https://github.com/beezee
Text Domain: pods-geo-field
License: GPL v2 or later
*/

/**
 * Copyright (c) YEAR Brian Zeligson. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * **********************************************************************
 */

require_once('vendor/autoload.php');

\PM\Service::register_adapter(new \WP_PM\Adapter());
\WP_PM\Controller::register_callbacks();
