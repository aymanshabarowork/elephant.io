<?php
/**
 * This file is part of the Elephant.io package
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 *
 * @copyright Wisembly
 * @license   http://www.opensource.org/licenses/MIT-License MIT License
 */

namespace ElephantIO;

/**
 * Represents an engine used within ElephantIO to send / receive messages from
 * a websocket real time server
 *
 * @author Baptiste Clavié <baptiste@wisembly.com>
 */
interface EngineInterface
{
    /** Connect to the targeted server */
    public function connect();

    /** Closes the connection to the websocket */
    public function close();

    /** Read data from the socket */
    public function read();

    /** Sends data through the websocket */
    public function send();

    /** Keeps alive the connection */
    public function keepAlive();
}

