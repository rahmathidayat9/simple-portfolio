<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillRequest;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        $skills = Skill::get();
        return view('admin.skill.index',['skills' => $skills]);
    }

    public function create()
    {
        return view('admin.skill.create');
    }

    public function store(Request $request)
    {   
        foreach ($request->skills as $skill) {
            Skill::create([
                'name' => $skill
            ]);
        } 
    }

    public function edit(Skill $skill)
    {
        return view('admin.skill.edit',['skill' => $skill]);
    }

    public function update(SkillRequest $request,Skill $skill)
    {
        $skill->update($request->all());
        return redirect()->route('skill.index')->with('success','Data berhasil update');
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('skill.index')->with('success','Data berhasil dihapus');
    }
}
