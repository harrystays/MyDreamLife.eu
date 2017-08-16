<?php
/**
 * @author         Pierre-Henry Soria <hi@ph7.me>
 * @copyright      (c) 2017, Pierre-Henry Soria. All Rights Reserved.
 * @license        GNU General Public License; <https://www.gnu.org/licenses/gpl-3.0.en.html>
 */

namespace Controller;

use Core\View;

class Base
{
    public function __construct()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            @session_start();
        }
    }

    public function notFound()
    {
        header('HTTP/1.1 404 Not Found');

        View::create('not-found', 'Page Not Found');
    }

    public function modelFunction($func, array $vars = array())
    {
        $className = $this->name . '_model';
        return call_user_func_array(array(new $className, $func), $vars);
    }
}