<?php

class ProjetModel extends CI_Model
{
	private ?string $titre;


	private ?string $description;

	private $createdAt;


	public function getTitre()
	{
		return $this->titre;
	}

	public function setTitre($titre) 
	{
		$this->titre = $titre;
		return $this;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}

	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	public function setCreateAt($createdAt)
	{
		$this->createdAt = $createdAt;
		return $this;
	}

	public function __construct()
	{
		$this->createdAt = new DateTimeImmutable();
	}

	//query

	public function insertProjet($data)
	{
		
		return $this->db->insert('projet', $data);
	}

	public function getAllProjet()
	{
		$query = $this->db->get('projet');
		return $query->result();
	}


}


