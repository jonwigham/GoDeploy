<?php

/**
 * GoDeploy deployment application
 * Copyright (C) 2011 James Titcumb, Simon Wade
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @copyright 2011 GoDeploy
 * @author James Titcumb, Simon Wade, Jon Wigham
 * @link http://www.godeploy.com/
 */
class GD_Model_DeploymentStatus
{
	protected $_id;
	protected $_code;
	protected $_name;

	public function setId($id)
	{
		$this->_id = (int)$id;
		return $this;
	}

	public function getId()
	{
		return $this->_id;
	}

	public function setCode($value)
	{
		$this->_code = (string)$value;
		return $this;
	}

	public function getCode()
	{
		return $this->_code;
	}

	public function setName($value)
	{
		$this->_name = (string)$value;
		return $this;
	}

	public function getName()
	{
		return $this->_name;
	}

	public function getShortName()
	{
		return ucfirst(strtolower($this->getName()));
	}
}
