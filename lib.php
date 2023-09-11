<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * @package     local_greetings
 * @category    lib
 * @copyright   2023 Christopher Crouse <mail@amz-x.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Greet logged in / not logged in user message in country locale.
 *
 * @param StdClass $user user object.
 */
function local_greetings_get_greeting($user) {
    if ($user == null || isguestuser()) {
        return get_string('greetinguser', 'local_greetings', 'user');
    }

    $country = isset($user->country) ? $user->country : '';
    switch ($country) {
        case 'ES':
            $langstr = 'greetinguseres';
            break;
        default:
            $langstr = 'greetinguser';
            break;
    }

    return get_string($langstr, 'local_greetings', fullname($user));
}


/**
 * Insert a link to index.php on the site front page navigation menu.
 *
 * @param navigation_node $frontpage Node representing the front page in the navigation tree.
 */
function local_greetings_extend_navigation_frontpage(navigation_node $frontpage) {
    $frontpage->add(
        get_string('pluginname', 'local_greetings'),
        new moodle_url('/local/greetings/index.php'),
        navigation_node::TYPE_CUSTOM,
    );
}

/**
 * Insert a link to index.php on the site sidebar navigation menu.
 *
 * @param global_navigation $root Node representing the root navigation tree.
 */
function local_greetings_extend_navigation(global_navigation $root) {
    $node = navigation_node::create (
        get_string('pluginname', 'local_greetings'),
        new moodle_url('/local/greetings/index.php'),
        navigation_node::TYPE_CUSTOM,
        null,
        null,
        new pix_icon('t/message', '')
    );

    $root->add_node($node);
}
