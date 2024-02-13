<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageIndex extends Component
{
    use WithFileUploads;

    public $photo;

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // Adjust validation rules as needed
        ]);

        $name = $this->photo->getClientOriginalName();
        $path = $this->photo->storeAs('images', $name, 'public');

        Image::create([
            'image' => $name,
            'path' => $path
        ]);

        $this->reset('photo');

        // Emit event to refresh images after uploading
        $this->emit('refreshImages');
    }

    public function render()
    {
        $images = Image::all(); // Retrieve images
        return view('livewire.image-index', compact('images'))->layout('layouts.app');
    }
}



