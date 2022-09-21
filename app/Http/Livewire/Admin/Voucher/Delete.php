<?php

namespace App\Http\Livewire\Admin\Voucher;

use App\Models\Voucher;
use LivewireUI\Modal\ModalComponent;

class Delete extends ModalComponent
{
    public ?int $voucherId = null;

    public array $voucherIds = [];

    public string $confirmationTitle = '';

    public string $confirmationDescription = '';

    public static function modalMaxWidth(): string
    {
        return 'md';
    }

    public static function closeModalOnEscape(): bool
    {
        return false;
    }

    public static function closeModalOnClickAway(): bool
    {
        return false;
    }

    public function cancel()
    {
        $this->closeModal();
    }

    public function confirm()
    {
        if ($this->voucherId) {
            Voucher::query()->find($this->voucherId)->delete();
        }

        if ($this->voucherIds) {
            Voucher::query()->whereIn('id', $this->voucherIds)->delete();
        }

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);
    }
    public function render()
    {
        return view('livewire.admin.voucher.delete');
    }
}