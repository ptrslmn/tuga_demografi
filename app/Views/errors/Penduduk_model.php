p

space App/Models;

CodeIgniter/Model;

s Penduduk_model extends Model

protected $table              = 'tab_penduduk';

public function data_penduduk_json(){
    $query = $this->db->query("select a.nik,a.no_kk,a.nama_lengkap,a.tempat_lahir,a.tgl_lahir,
    a.jenis_kelamin,b.pendidikan,c.pendapatan,
    d.agama,a.alamat_lengkap,e.kelurahan,a.penduduk_asli from tab_penduduk as a 
    left join tab_pendidikan as b on a.pendidikan = b.id
    left join tab_pendapatan as c on a.pendapatan = c.id
    left join tab_agama as d on a.agama = d.id
    left join tab_kelurahan as e on a.kelurahan = e.id");
    return $query->getResult();

}