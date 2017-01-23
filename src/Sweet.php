<?php

namespace Tareqmahmud\Sweet;

use Illuminate\Session\Store;

class Sweet
{
    /**
     * Store session instance
     *
     * @var Store
     */
    private $session;

    /**
     * Sweet constructor.
     *
     * @param Store $session
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }
}