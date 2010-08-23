<?php
// Copyright (C) 2010 Combodo SARL
//
//   This program is free software; you can redistribute it and/or modify
//   it under the terms of the GNU General Public License as published by
//   the Free Software Foundation; version 3 of the License.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of the GNU General Public License
//   along with this program; if not, write to the Free Software
//   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

require_once('../application/application.inc.php');
require_once('../application/itopwebpage.class.inc.php');
require_once('../application/wizardhelper.class.inc.php');

require_once('../application/startup.inc.php');
$oAppContext = new ApplicationContext();
$currentOrganization = utils::ReadParam('org_id', '');
$operation = utils::ReadParam('operation', '');

require_once('../application/loginwebpage.class.inc.php');
session_start();
LoginWebPage::ResetSession();
$oPage = new LoginWebPage();
$sVersionShort = Dict::Format('UI:iTopVersion:Short', ITOP_VERSION);
$oPage->add("<div id=\"login-logo\"><a href=\"http://www.combodo.com/itop\"><img title=\"$sVersionShort\" src=\"../images/itop-logo.png\"></a></div>\n");
$oPage->add("<div id=\"login\">\n");
$oPage->add("<h1>".Dict::S('UI:LogOff:ThankYou')."</h1>\n");
$oPage->add("<p><a href=\"../pages/UI.php\">".Dict::S('UI:LogOff:ClickHereToLoginAgain')."</a></p>");
$oPage->add("</div>\n");
$oPage->output();
?>
