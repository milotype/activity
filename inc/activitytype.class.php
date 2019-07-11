<?php

/*
 -------------------------------------------------------------------------
 Activity plugin for GLPI
 Copyright (C) 2013 by the Activity Development Team.
 -------------------------------------------------------------------------

 LICENSE

 This file is part of Activity.

 Activity is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 Activity is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Activity. If not, see <http://www.gnu.org/licenses/>.
 --------------------------------------------------------------------------
*/

if (!defined('GLPI_ROOT')) {
   die("Sorry. You can't access directly to this file");
}

/// ActivityType class
class PluginActivityActivityType extends CommonTreeDropdown {

   var $can_be_translated  = true;
   static $rightname = "dropdown";

   static function canCreate() {
      return Session::haveRight('plugin_activity', CREATE)
               && Session::haveRight("plugin_activity_all_users", 1);
   }

   static function getTypeName($nb = 0) {
      return _n('Activity type', 'Activity types', $nb, 'activity');
   }

}
