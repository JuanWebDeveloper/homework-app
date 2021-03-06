<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HomeworkRequest;
use App\Models\Homework;

class HomeworkController extends Controller
{
    public function index() {
        $homeworks = Homework::paginate(5);
        return view('homework.index', compact('homeworks'));
    }

    public function create() {
        return view('homework.create');
    }

    public function store(HomeworkRequest $request) {
        $request['slug'] = str_replace(" ", "-", $request->name);
        $homework = Homework::create($request->all());
        return redirect()->route('homework.index');
    }

    public function show(Homework $homework) {
        return view('homework.show', compact('homework'));
    }

    public function edit(Homework $homework) {
        return view('homework.edit', compact('homework'));
    }

    public function update(HomeworkRequest $request, Homework $homework) {
        $request['slug'] = str_replace(" ", "-", $request->name);
        $homework->update($request->all());
        return redirect()->route('homework.show', $homework);
    }

    public function destroy(Homework $homework) {
        $homework->delete();
        return redirect()->route('homework.index');
    }
}
