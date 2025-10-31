<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Requests\Question\QuestionRequest;
use App\Services\QuestionTypeService;
use App\Models\Exam;

class CreateQuestion extends Component
{
    public Exam $exam;

    public $exam_id = '';
    public $type = '';
    public $questionText = '';
    public $questionText2 = '';
    public $score = '';
    public $order = '';
    public $options= [];
    public $keywords=[];


    protected $listeners = [
    ];
    public  function  mount(Exam $exam)
    {
        $this->exam = $exam;
        $this->exam_id = $exam->id;
        $this->score = 0;
        $this->order = ($exam->questions()->max('order') ?? 0)+1;
    }
    public function save()
    {
        $rules = (new QuestionRequest())->rules();
        $validated = $this->validate($rules);
        $services = app(QuestionTypeService::class);
        $question = $services->store($validated , $this->exam);
        $this->resetForm();
        session()->flash('message', 'Question successfully created.');
        $this->emit('questionAdded', $question->id);

        return ;
    }


    public function resetForm()
    {
        $this->type = '';
        $this->questionText = '';
        $this->questionText2 = '';
        $this->score = 0;
        $this->order = ($this->exam->questions()->max('order') ?? 0) + 1;
        $this->options = [];
        $this->keywords = [];
    }

    public function render()
    {
        $questions = $this->exam->questions()->with(['options','keywords'])->orderBy('order')->get();

        return view('livewire.create-question' ,  compact('questions'));
    }
}
