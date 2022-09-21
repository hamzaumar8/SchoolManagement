<?php

namespace App\Http\Livewire\Admin\Addmissions;

use App\Models\Addmission;
use Exception;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class Addmit extends ModalComponent
{
    use Actions;

    public $addmissionId;
    public $date_entrance_exam;
    public $class_approved;

    public static function modalMaxWidth(): string
    {
        return 'lg';
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

    protected function rules()
    {
        return [
            'date_entrance_exam' => 'required|date',
            'class_approved' => 'required',
        ];
    }

    public function addmit()
    {
        $this->validate();

        try {

            $addmission = Addmission::find($this->addmissionId);


            session()->flash('success', 'Property was assigned to owners successfully');

            if ($this->routeId === 'show') {
                return redirect()->route('property.show', $this->propertyId);
            }
            return redirect()->route('property.index');

            // $this->closeModalWithEvents([
            //     'pg:eventRefresh-default',
            // ]);

        } catch (Exception $e) {
            $message = $e->getMessage();
            $this->addError('Exception Message: ', $message);
            $this->notification()->error(
                'Error !!!',
                'Exception Message: ' . $message,
            );
        }
    }

    public function render()
    {
        $addmission = Addmission::findOrFail($this->addmissionId);
        return view('livewire.admin.addmissions.addmit', compact('addmission'));
    }
}