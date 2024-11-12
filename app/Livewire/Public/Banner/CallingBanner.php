<?php

namespace App\Livewire\Public\Banner;

use App\Models\Banner;
use Livewire\Component;

class CallingBanner extends Component
{
    public $backgroundImage;
    public function mount()
    {
        $this->backgroundImage = session('background_image', 'https://img.freepik.com/premium-photo/beautiful-female-model-posing-studio-light-flashes_382934-4673.jpg');
    }

    public function updateBackgroundImage($image)
    {
        session()->put('background_image', $image);

        $this->backgroundImage = $image;
    }
    public function render()
    {
        $data['banners'] = Banner::where('status', 1)->get();
        return view('livewire.public.banner.calling-banner',$data);
    }
}



