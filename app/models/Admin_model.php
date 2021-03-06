<?php
class Admin_model
{
	private $table = 'admin';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}
	public function getALLAdmin()
	{
		$this->db->query('select * from ' . $this->table);
		return $this->db->resultSet();
	}
	public function getAdminById($id)
	{
		$this->db->query('select * from ' . $this->table . ' where id_admin = :id_admin');
		$this->db->bind('id_admin', $id);
		return $this->db->single();
	}
	public function tambahDataAdmin($data)
	{
		$query = "INSERT INTO " . $this->table . " VALUES ('',:nm_admin, :username, :password)";
		$this->db->query($query);
		$this->db->bind('nm_admin', $data['nama']);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', md5($data['password']));

		$this->db->execute();

		return $this->db->rowCount();
	}
	public function editDataAdmin($data)
	{
		if ($data['password'] == '') {
			$query = "UPDATE admin SET 
		nm_admin = :nm_admin,
		username = :username
		WHERE id_admin = :id_admin";
		} else {
			$query = "UPDATE admin SET 
			nm_admin = :nm_admin,
			username = :username,
			password = :password 
			WHERE id_admin = :id_admin";
		}


		$this->db->query($query);
		$this->db->bind('id_admin', $data['id_admin']);
		$this->db->bind('nm_admin', $data['nm_admin']);
		$this->db->bind('username', $data['username']);
		if ($data['password'] != '') {
			$this->db->bind('password', md5($data['password']));
		}

		$this->db->execute();

		return $this->db->rowCount();
	}
	public function hapusDataAdmin($id)
	{
		$query = "DELETE FROM " . $this->table . " WHERE id_admin = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);

		$this->db->execute();

		return $this->db->rowCount();
	}
}
