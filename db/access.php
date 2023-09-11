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
 * @category    db/access
 * @copyright   2023 Christopher Crouse <mail@amz-x.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(
    'local/greetings:deleteanymessage' => array(
        'riskbitmask'               => RISK_DATALOSS,
        'captype'                   => 'delete',
        'contextlevel'              => CONTEXT_SYSTEM,
        'archetypes' => array(
            'manager'               => CAP_ALLOW,
            'coursecreator'         => CAP_PREVENT,
            'editingteacher'        => CAP_PREVENT,
            'teacher'               => CAP_PREVENT,
            'student'               => CAP_PREVENT,
            'user'                  => CAP_PREVENT,
        )
    ),
    'local/greetings:deleteownmessage' => array(
        'riskbitmask'               => RISK_DATALOSS,
        'captype'                   => 'delete',
        'contextlevel'              => CONTEXT_SYSTEM,
        'archetypes' => array(
            'manager'               => CAP_ALLOW,
            'coursecreator'         => CAP_ALLOW,
            'editingteacher'        => CAP_ALLOW,
            'teacher'               => CAP_ALLOW,
            'student'               => CAP_ALLOW,
            'user'                  => CAP_ALLOW,
        )
    ),
    'local/greetings:editanymessage' => array(
        'riskbitmask'               => RISK_DATALOSS,
        'captype'                   => 'edit',
        'contextlevel'              => CONTEXT_SYSTEM,
        'archetypes' => array(
            'manager'               => CAP_ALLOW,
            'coursecreator'         => CAP_PREVENT,
            'editingteacher'        => CAP_PREVENT,
            'teacher'               => CAP_PREVENT,
            'student'               => CAP_PREVENT,
            'user'                  => CAP_PREVENT,
        )
    ),
    'local/greetings:editownmessage' => array(
        'riskbitmask'               => RISK_DATALOSS,
        'captype'                   => 'edit',
        'contextlevel'              => CONTEXT_SYSTEM,
        'archetypes' => array(
            'manager'               => CAP_ALLOW,
            'coursecreator'         => CAP_ALLOW,
            'editingteacher'        => CAP_ALLOW,
            'teacher'               => CAP_ALLOW,
            'student'               => CAP_ALLOW,
            'user'                  => CAP_ALLOW,
        )
    ),
    'local/greetings:postmessages' => array(
        'riskbitmask'           => RISK_SPAM,
        'captype'               => 'write',
        'contextlevel'          => CONTEXT_SYSTEM,
        'archetypes' => array(
            'user'              => CAP_ALLOW,
        )
    ),
    'local/greetings:viewmessages' => array(
        'riskbitmask' => RISK_SPAM,
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'user' => CAP_ALLOW,
        )
    ),
);
