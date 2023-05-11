<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Categories extends Component
{
    public $categories, $name, $idCategory;
    public $modal = false;

    public function render()
    {
        $this-> categories = Category::all();
        return view('livewire.categories');
    }

    public function crear(){
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function abrirModal(){
        $this->modal = true;
    }

    public function cerrarModal(){
        $this->modal = false;
    }

    public function limpiarCampos(){
        $this->name = '';
        $this->idCategory = '';
    }

    public function editar($id)
    {
        $category = Category::findOrFail($id);
        $this->idCategory = $id;
        $this->name = $category->name;
        $this->abrirModal();
    }

    public function borrar($id)
    {
        Category::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente');
    }

    public function guardar()
    {
        Category::updateOrCreate(['id'=>$this->idCategory],
            [
                'name' => $this->name,
            ]);
         
         session()->flash('message',
            $this->idCategory ? '¡Actualización exitosa!' : '¡Alta Exitosa!');
         
         $this->cerrarModal();
         $this->limpiarCampos();
    }
}
