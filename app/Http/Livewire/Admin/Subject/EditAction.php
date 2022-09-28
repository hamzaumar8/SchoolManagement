<?php

namespace App\Http\Livewire\Admin\Subject;

use App\Models\Subject;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class EditAction extends ModalComponent
{
    use Actions;

    public $subjectId;
    public $name;
    public $code;
    public $description;


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

    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'code' => 'nullable|string|max:255',
        ];
    }


    public function editSubject()
    {
        $this->validate();

        if ($this->subjectId) {
            Subject::query()->find($this->subjectId)->update([
                'name' => $this->name,
            ]);
        }

        $this->closeModalWithEvents([
            'pg:eventRefresh-default',
        ]);

        $this->notification()->success(
            'Success !!!',
            'Subject was editted successfully',
        );
    }
    public function render()
    {
        $subject = Subject::find($this->subjectId);
        $this->name = $subject->name;
        $this->code = $subject->code;
        return view('livewire.admin.subject.edit-action', compact('subject'));
    }
}