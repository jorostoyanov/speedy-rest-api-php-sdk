<?php

namespace Speedy;

final class Config
{
    /**
     * The API Username.
     *
     * @var string
     */
    protected $username = null;

    /**
     * The API Password.
     *
     * @var string
     */
    protected $password = null;

    /**
     * Constructor.
     *
     * @param  string $username
     * @param  string $password
     * @return void
     */
    public function __construct(
        string $username,
        string $password
    ) {
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * Get the config username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get the config password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
