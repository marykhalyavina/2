<?php
// This file is part of Moodle - http://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * plagkh under maintenance exception
 * @package   plagiarism_plagkh
 * @copyright 2023 plagkh
 * @author    Masha Khalyavina
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/** plagkh under maintenance exception */
class plagiarism_plagkh_under_maintenance_exception extends Exception {
    /**
     * constructor
     */
    public function __construct() {
        parent::__construct("plagkh plugin is under maintenance, to learn more please visit https://status.plagkh.com", 503);
    }
}
