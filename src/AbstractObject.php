<?php
/**
 * ActivityPub protocol library for PHP.
 * Copyright (C) 2018 Evan Duncan
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with this program.
 * If not, see <https://www.gnu.org/licenses/>.
 */
namespace ActivityPub;

abstract class AbstractObject implements ObjectInterface
{
    private $id;
    private $type;

    public function setID(string $id)
    {
        $this->id = $id;
    }

    public function getID(): string
    {
        return $this->id ?: '';
    }

    public function setType(string $type)
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }
}
