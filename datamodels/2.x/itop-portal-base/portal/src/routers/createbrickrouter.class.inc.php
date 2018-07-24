<?php

// Copyright (C) 2010-2018 Combodo SARL
//
//   This file is part of iTop.
//
//   iTop is free software; you can redistribute it and/or modify	
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   iTop is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with iTop. If not, see <http://www.gnu.org/licenses/>

namespace Combodo\iTop\Portal\Router;

/**
 * Class CreateBrickRouter
 *
 * @package Combodo\iTop\Portal\Router
 * @author Guillaume Lajarige <guillaume.lajarige@combodo.com>
 * @since 2.3.0
 */
class CreateBrickRouter extends AbstractRouter
{
	static $aRoutes = array(
		array('pattern' => '/create/{sBrickId}',
			'callback' => 'Combodo\\iTop\\Portal\\Controller\\CreateBrickController::DisplayAction',
			'bind' => 'p_create_brick')
	);

}
