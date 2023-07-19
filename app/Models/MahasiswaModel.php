<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MahasiswaModel extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table='mahasiswa';

    protected $fillable = [ 
        'nama',
        'alamat',
=======
    protected $table='mhs';

    protected $fillable = [ 
        'nama_mhs',
        'alamat_mhs',
>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889
        'no_hp',
        'jurusan'
    ];

<<<<<<< HEAD
    // 
=======
    public function mahasiswa()
    {
        return $this->belongsTo(MahasiswaModel::class, 'id_mahasiswa');
        // return $this->hasMany(MahasiswaModel::class, 'id_mahasiswa');
    }
    //====================//==============================================
    
    //=========relasi tabel matakulia =====================================
        public function matkul()
    {
        return $this->belongsTo(MatkulModel::class, 'id_matakuliah');
    }
    //====================//==============================================
    
    //=========relasi tabel dosen =====================================
        public function dosen()
    {
        return $this->belongsTo(DosenModel::class, 'id_dosen');
    }
>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889
    //====================//==============================================
}
