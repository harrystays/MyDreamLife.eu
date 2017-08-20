<?php

namespace Core;

class Session
{
    /**
     * Sets a session.
     *
     * @param string $key The key
     * @param string $value The value
     *
     * @return void
     */
    public static function set($key, $value): void
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Returns the value of a session.
     *
     * @param string $key The key
     *
     * @return string|bool The value
     */
    public static function get($key)
    {
        return isset($_SESSION[$key]) ? $_SESSION[$key] : false;
    }

    /**
     * Destroys the session.
     *
     * @return void
     */
    public static function destroy(): void
    {
        session_destroy();
    }

    /**
     * @param string $name The cookie name.
     * @param string $value The value of the cookie.
     *
     * @return void
     */
    public static function setCookie($name, $value): void
    {
        setcookie($name, $value, time() + 60 * 60 * 24 * 365, '/', false);
    }

    /**
     * @param string $name The cookie name.
     *
     * @return void
     */
    public static function removeCookie($name): void
    {
        setcookie($name, '', time() - 60 * 60 * 24 * 365, '/', false);
    }

    /**
     * @param $name
     *
     * @return string|bool
     */
    public static function showCookie($name)
    {
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : false;
    }
}