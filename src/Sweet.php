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
            'title'   => $title,
            'message' => $message,
            'label'   => $label,
            'options' => $options
        ]);
    }

    /**
     * Create info message
     *
     * @param $title
     * @param null $message
     * @param array|null $options
     * @return $this
     * @internal param string $confirmButtonText
     * @internal param string $buttonText
     */
    public function info($title, $message = null, array $options = null)
    {
        $this->create($title, $message, 'info', $options);

        return $this;
    }

    /**
     * Create success message
     *
     * @param $title
     * @param null $message
     * @param array|null $options
     * @return $this
     * @internal param string $confirmButtonText
     * @internal param string $buttonText
     */
    public function success($title, $message = null, array $options = null)
    {
        $this->create($title, $message, 'success', $options);

        return $this;
    }

    /**
     * Create warning message
     *
     * @param $title
     * @param null $message
     * @param array|null $options
     * @return $this
     * @internal param string $confirmButtonText
     * @internal param string $buttonText
     */
    public function warning($title, $message = null, array $options = null)
    {
        $this->create($title, $message, 'warning', $options);

        return $this;
    }

    /**
     * Create error message
     *
     * @param $title
     * @param null $message
     * @param array|null $options
     * @return $this
     * @internal param string $confirmButtonText
     * @internal param string $buttonText
     */
    public function error($title, $message = null, array $options = null)
    {
        $this->create($title, $message, 'error', $options);

        return $this;
    }

    /**
     * Create universal sweet message
     *
     * @param $title
     * @param null $message
     * @param string $label
     * @return $this
     */
    public function message($title, $message = null, $label = 'info')
    {
        $this->create($title, $message, $label);

        return $this;
    }

    /**
     * Define is message auto hide or not
     *
     * @param int $timer
     */
    public function autoHide($timer = 1500)
    {
        $this->session->flash('sweet_message.autoHide', true);
        $this->session->flash('sweet_message.timer', $timer);
    }
}