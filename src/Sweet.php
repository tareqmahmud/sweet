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

    /**
     * Create new flash message
     *
     * @param $title
     * @param $message
     * @param $label
     * @param array $options
     * @internal param $confirmButtonText
     */
    private function create($title, $message, $label, array $options = null)
    {
        $this->session->flash('sweet_message', [
            'title'             => $title,
            'message'           => $message,
            'label'             => $label,
            'options'           => $options
        ]);
    }
}