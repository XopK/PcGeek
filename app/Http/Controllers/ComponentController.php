<?php

namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ComponentController extends Controller
{
    public function showAddComponent()
    {
        return view('admin.addComponent');
    }

    public function addComponent(Request $request)
    {
        $request->validate([
            'title_component' => 'required',
            'config_component' => 'required',
            'image_components' => 'required|image',
            'sale' => 'required|numeric',
        ], [
            'title_component.required' => 'Поле обязательно для заполнения!',
            'config_component.required' => 'Поле обязательно для заполнения!',
            'image_components.required' => 'Поле обязательно для заполнения!',
            'image_components.image' => 'Файл должен быть изображением!',
            'sale.required' => 'Поле обязательно для заполнения!',
            'sale.numeric' => "Поле должно быть числовым значением!",
        ]);

        $name = $request->file('image_components')->hashName();
        $store = $request->file('image_components')->store('public/imgComponents');

        $data_component = $request->all();

        Component::create([
            'title_component' => $data_component['title_component'],
            'config_component' => $data_component['config_component'],
            'image_components' => $name,
            'sale' => $data_component['sale'],
        ]);

        return redirect()->back()->with('succes', 'Компонент добавлен!');
    }

    public function showComponents()
    {
        $all_component = Component::all();

        return view('admin.allComponent', ['components' => $all_component]);
    }

    public function editComponent($edit)
    {
        $edit_data = Component::find($edit);

        return view('admin.editComponent', ['edits' => $edit_data]);
    }

    public function updateComponent(Request $request, Component $component)
    {
        $update_data = $request->all();

        if ($request->hasFile('updateComponent')) {
            $name = $request->file('updateComponent')->hashName();
            $store = $request->file('updateComponent')->store('public/imgComponents');

            $component->fill([
                'title_component' => $update_data['title_component'],
                'config_component' => $update_data['config_component'],
                'image_components' => $name,
                'sale' => $update_data['sale'],
            ]);
            $component->save();
        } else {

            $currentPhoto = $component->image_components;

            $component->fill([
                'title_component' => $update_data['title_component'],
                'config_component' => $update_data['config_component'],
                'image_components' => $currentPhoto,
                'sale' => $update_data['sale'],
            ]);
            $component->save();
        }
        return redirect()->back()->with('succes', 'Компонент обновлен!');
    }

    public function deleteComponent(Component $component)
    {
        $filePath = '/storage/imgComponents/' . $component->image_components;

        $component->delete();

        if (Storage::exists($filePath)) {
            Storage::delete($filePath);
        }

        return redirect()->back();
    }
}
