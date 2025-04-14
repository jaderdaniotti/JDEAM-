<?php

namespace App\Livewire\Apigames;

use App\Models\Apigame;
use App\Models\Category;
use Livewire\Component;

use function Laravel\Prompts\search;

class Index extends Component
{
    public $filterCategory = "";
    public $search = "";

    public function render()
    {
            $categories = Category::all();
            

            if ($this->search || $this->filterCategory) {

                if($this->search){
                    $apigames = Apigame::where('Title', 'LIKE', '%' . $this->search . '%')->paginate(20);
                }
                if($this->filterCategory){
                    $apigames = Apigame::where(strtolower('genre'), 'LIKE',   strtolower($this->filterCategory) )->paginate(1000);
                }
            } else {
                $apigames = Apigame::paginate(20);
            }

            return view('livewire.apigames.index', compact( 'apigames', 'categories'));
        }
        


}
