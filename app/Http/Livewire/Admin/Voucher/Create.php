<?php

namespace App\Http\Livewire\Admin\Voucher;

use App\Models\Voucher;
use Livewire\Component;

class Create extends Component
{

    public $name, $phone, $campus;

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'campus' => 'required|string',
        ];
    }

    public function generate()
    {
        $this->validate();
        $voucher = Voucher::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'campus' => $this->campus,
        ]);

        session()->flash('message', 'Addimssion Voucher was successfull Generated!');

        return redirect()->route('vouchers.show', $voucher);
    }

    public function render()
    {
        return view('livewire.admin.voucher.create');
    }
}
