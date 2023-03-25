<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Project extends Component
{
    public string $name;
    public string $pathToImage;
    public string $summary;
    public string $projectNr;
    /**
     * Create a new component instance.
     */
    public function __construct($pathToImage, $name, $summary, $projectNr)
    {
        $this->pathToImage = $pathToImage;
        $this->name = $name;
        $this->summary = $summary;
        $this->projectNr = $projectNr;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.project');
    }
}
