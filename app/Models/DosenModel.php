<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DosenModel extends Model
{
    use HasFactory;
    protected $table='dosen';

    protected $fillable = [ 
        'nama_dosen',
        'alamat',
        'no_hp',
<<<<<<< HEAD
        'bidang_ahli'
    ];

=======
        'matakuliah'
    ];

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
    //====================//==============================================
>>>>>>> 1430a11525376c6a300807478f88f0194ea3e889
}
