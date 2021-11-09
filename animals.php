<?php

# class animals
class animal {
    # property animals
    public $animals;

    #method  constructor ( mengisi data awal)
    # parameter : data hewan (arrary)
    public function __construct($data) {
        $this-> animals = $data;
    }

    # method index (menampilkan data animals)
    public function index() {
        # Gunakan foreach untuk menampilkan data array (index)
        foreach ($this->animals as  $value) {
            echo $value. ",";
        }
    }

    # method store (menambahkan hewan baru )
    # parameter : hewan baru
    public function store($data) {
        # Gunakan method array_push untuk menambahkan data (store)
        array_push($this->animals, $data);
    }

    # method update (memperbarui data)
    # parameter : index dan hewan baru
    public function update($index, $data) {
        $this->animals[$index] = $data;
    }

    # method destroy (menghapus hewan)
    # parameter : index
    public function destroy($index) {
        # Gunakan method array_splice atau unset untuk menghapus data (destroy)
        array_splice($this->animals, $index, 1);
    }

}

# membuat objek
# kirimkan data array ke dalam constructor
$animal = new Animal(['Ayam', 'Ikan']);

echo 'Index - Menampilkan seluruh hewan  <br>';
$animal->index();
echo '<br>';

echo '<br>';
echo 'Store - Menambahkan hewan baru (burung) <br>';
$animal->store('burung');
$animal->index();
echo '<br>';

echo '<br>';
echo 'Update - Mengupdate hewan <br>';
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo '<br>';

echo '<br>';
echo 'Destroy - Menghapus hewan <br>';
$animal->destroy(1);
$animal->index();
echo '<br>';