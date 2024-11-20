<?php

namespace App\Livewire\Public\Banner;

use App\Models\Banner;
use Livewire\Component;

class CallingBanner extends Component
{
    public $backgroundImage;
    public function mount()
    {
        $this->backgroundImage = session('background_image', $this->getDefaultImage());
    }

    public function updateBackgroundImage($image)
    {
        session()->put('background_image', $image);

        $this->backgroundImage = $image;
    }

    public function getDefaultImage()
    {
        $banner = Banner::where('status', 1)->first();

        if (!$banner){
            return 'https://img.freepik.com/premium-photo/beautiful-female-model-posing-studio-light-flashes_382934-4673.jpg';
        }

        return asset('images/banner/' . $banner->b_image);
    }
    public function render()
    {
        $data['banners'] = Banner::where('status', 1)->inRandomOrder()->limit(10)->get();
        return view('livewire.public.banner.calling-banner',$data);
    }
}



