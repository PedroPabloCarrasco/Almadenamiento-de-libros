<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Libro;

class Libros extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $isbn, $titulo, $numero_paginas, $descripcion, $portada;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.libros.view', [
            'libros' => Libro::latest()
						->orWhere('isbn', 'LIKE', $keyWord)
						->orWhere('titulo', 'LIKE', $keyWord)
						->orWhere('numero_paginas', 'LIKE', $keyWord)
						->orWhere('descripcion', 'LIKE', $keyWord)
						->orWhere('portada', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->isbn = null;
		$this->titulo = null;
		$this->numero_paginas = null;
		$this->descripcion = null;
		$this->portada = null;
    }

    public function store()
    {
        $this->validate([
		'isbn' => 'required',
		'titulo' => 'required',
		'numero_paginas' => 'required',
		'descripcion' => 'required',
		'portada' => 'required',
        ]);

        Libro::create([ 
			'isbn' => $this-> isbn,
			'titulo' => $this-> titulo,
			'numero_paginas' => $this-> numero_paginas,
			'descripcion' => $this-> descripcion,
			'portada' => $this-> portada
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Libro Successfully created.');
    }

    public function edit($id)
    {
        $record = Libro::findOrFail($id);

        $this->selected_id = $id; 
		$this->isbn = $record-> isbn;
		$this->titulo = $record-> titulo;
		$this->numero_paginas = $record-> numero_paginas;
		$this->descripcion = $record-> descripcion;
		$this->portada = $record-> portada;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'isbn' => 'required',
		'titulo' => 'required',
		'numero_paginas' => 'required',
		'descripcion' => 'required',
		'portada' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Libro::find($this->selected_id);
            $record->update([ 
			'isbn' => $this-> isbn,
			'titulo' => $this-> titulo,
			'numero_paginas' => $this-> numero_paginas,
			'descripcion' => $this-> descripcion,
			'portada' => $this-> portada
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Libro Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Libro::where('id', $id);
            $record->delete();
        }
    }
}
