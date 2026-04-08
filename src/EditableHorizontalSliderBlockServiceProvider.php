<?php

namespace GIS\EditableHorizontalSliderBlock;

use GIS\EditableBlocks\Traits\ExpandBlocksTrait;
use GIS\EditableHorizontalSliderBlock\Livewire\Admin\Types\SlidesWire;
use GIS\Fileable\Traits\ExpandTemplatesTrait;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class EditableHorizontalSliderBlockServiceProvider extends ServiceProvider
{
    use ExpandBlocksTrait, ExpandTemplatesTrait;

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . "/config/editable-horizontal-slider-block.php", 'editable-horizontal-slider-block');
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . "/resources/views", "ehsb");
        $this->addLivewireComponents();
        $this->expandConfiguration();
    }

    protected function addLivewireComponents(): void
    {
        $component = config("editable-horizontal-slider-block.customSlidesComponent");
        Livewire::component(
            "ehsb-slides",
            $component ?? SlidesWire::class
        );
    }

    protected function expandConfiguration(): void
    {
        $ehsb = app()->config["editable-horizontal-slider-block"];
        $this->expandTemplates($ehsb);
        $this->expandBlocks($ehsb);
    }
}
