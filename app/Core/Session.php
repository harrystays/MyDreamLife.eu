<?php

declare(strict_types=1);

namespace Core;

class Session
{
    /**
     * Sets a session.
     *
     * @param string $key The key
     * @param string|int $value The value
     *
     * @return void
     */
    public static function set(string $key, $value): void
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
    public static function get(string $key)
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
        if (!empty($_SESSION)) {
            $_SESSION = [];
            session_unset();
            session_destroy();
        }
    }

    /**
     * @param string $name The cookie name.
     * @param string|int $value The value of the cookie.
     *
     * @return void
     */
    public static function setCookie(string $name, $value): void
    {
        setcookie($name, $value, time() + 60 * 60 * 24 * 365, '/');
    }

    /**
     * @param string $name The cookie name.
     *
     * @return void
     */
    public static function removeCookie(string $name): void
    {
        // If the cookie is in a multi-dimensional arrays
        $_COOKIE[$name] = [];

        // We ask the browser to delete the cookie
        setcookie($name, '', time() - 60 * 60 * 24 * 365, '/');

        // Then, we delete the cookie value locally to avoid using it by mistake in following our script
        unset($_COOKIE[$name]);
    }

    /**
     * @param $name
     *
     * @return string|bool
     */
    public static function showCookie(string $name)
    {
        return isset($_COOKIE[$name]) ? $_COOKIE[$name] : false;
    }

    public static function isActivated(): bool
    {
        return session_status() === PHP_SESSION_ACTIVE;
    }
}
