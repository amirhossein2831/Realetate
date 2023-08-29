<?php

namespace App\View\Components;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProfileInfo extends Component
{
    public string $label;
    public mixed $value;

    /**
     * @param string $label
     * @param mixed $value
     */
    public function __construct(string $label, mixed $value)
    {
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.profile-info');
    }
}
