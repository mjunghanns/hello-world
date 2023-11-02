<?php

/**
 * This file is part of mjunghanns/hello-world
 *
 * mjunghanns/hello-world is free software: you can redistribute it
 * and/or modify it under the terms of the GNU Affero General Public
 * License as published by the Free Software Foundation, either version
 * 3 of the License, or (at your option) any later version.
 *
 * mjunghanns/hello-world is distributed in the hope that it will be
 * useful, but WITHOUT ANY WARRANTY; without even the implied warranty
 * of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public
 * License along with mjunghanns/hello-world.
 * If not, see <https://www.gnu.org/licenses/>.
 *
 * @copyright Copyright (c) Mark Junghanns <mark@markjunghanns.de>
 * @license https://opensource.org/license/agpl-v3/ GNU Affero General Public License version 3 or later
 */

declare(strict_types=1);

namespace Mjunghanns\Hello\World;

/**
 * An example class to act as a starting point for developing your library
 */
class Example
{
    /**
     * Returns a greeting statement using the provided name
     */
    public function greet(string $name = 'World'): string
    {
        return "Hello, {$name}!";
    }
}
