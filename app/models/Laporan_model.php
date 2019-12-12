<?php
class Laporan_model
{
    private $table = 'lapkehilangan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getALLLaporan()
    {
        $this->db->query('select * from ' . $this->table);
        return $this->db->resultSet();
    }
    public function getLaporanById($id)
    {
        $this->db->query('select * from ' . $this->table . ' where id_lap = :id_lap');
        $this->db->bind('id_lap', $id);
        return $this->db->single();
    }
    public function tambahDataLaporan($data)
    {
        $query = "INSERT INTO " . $this->table . " VALUES ('',:id_kehilangan, :no_surat, :tgl_surat, :waktu)";
        $this->db->query($query);
        $this->db->bind('id_kehilangan', $data['id_kehilangan']);
        $this->db->bind('no_surat', $data['no_surat']);
        $this->db->bind('tgl_surat', $data['tgl_surat']);
        $this->db->bind('waktu', $data['waktu']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function editDataLaporan($data)
    {
        $query = "UPDATE lapkehilangan SET 
    	id_kehilangan = :id_kehilangan,
    	no_surat = :no_surat,
    	tgl_surat = :tgl_surat,
    	waktu = :waktu 
    	WHERE id_lap = :id_lap";

        $this->db->query($query);
        $this->db->bind('id_lap', $data['id_lap']);
        $this->db->bind('id_kehilangan', $data['id_kehilangan']);
        $this->db->bind('no_surat', $data['no_surat']);
        $this->db->bind('tgl_surat', $data['tgl_surat']);
        $this->db->bind('waktu', $data['waktu']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function hapusDataLaporan($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE ID_LAP = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
