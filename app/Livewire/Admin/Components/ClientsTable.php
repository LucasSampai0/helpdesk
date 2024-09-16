<?php

namespace App\Livewire\Admin\Components;

use Livewire\Component;
use App\Models\Client;
use App\Models\Workspace;
use Livewire\WithPagination;

class ClientsTable extends Component
{

    use WithPagination;

       public $clients;

    public function mount(){
        $this->clients = Client::all();
    }

    public function render()
    {
        return view('livewire.admin.components.clients-table');
    }
}
