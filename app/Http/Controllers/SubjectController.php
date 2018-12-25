<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\SubjectInterface;
use App\Http\Requests\SubjectFormRequest;
use Illuminate\Support\Facades\Auth;

class SubjectController extends Controller
{
    private $subject;

    public function __construct(SubjectInterface $subject)
    {
        $this->subject = $subject;
        view()->share('subject', $subject);
    }

    public function showCreateForm()
    {
//        dd(Auth::user());
        return view('subjects.create');
    }

    public function create(SubjectFormRequest $request)
    {
        $attribute = $request->all();
        $subject = $this->subject->create($attribute);

        return view('subjects.create', compact('subject'));
    }

    public function getAllSubjects()
    {
        $subject = $this->subject->getAllSubjects();

        return view('subjects.index')->with(['subject' => $subject]);
    }
}
