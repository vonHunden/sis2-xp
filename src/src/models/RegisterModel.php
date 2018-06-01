<?php

class RegisterModel extends Model
{
    private $table = 'people';
    public $id;
    public $name;
    public $ci;
    public $day;
    public $hour;
    
    public function linker()
    {
        return $this->db;
    }

    public function registers()
    {
        $sql = 'SELECT id,name,ci,day,hour FROM '.$this->table;
        try {
            $registers = $this->db->query($sql)->fetchAll(
                PDO::FETCH_CLASS,
                'Register'
            );
            return $registers;
        } catch (PDOException $e) {
            throw $e;
        }
    }
    public function add()
    {
        $sql = 'INSERT INTO '.$this->table.'(name, ci, day, hour) VALUES (?, ?, ?, ?)';
        try {
            $this->db->prepare($sql)->execute([$this->name, $this->ci, $this->day, $this->hour]);
            return true;
        } catch (PDOException $e) {
            throw $e;
        }
    }
    public function update()
    {
        $sql = 'UPDATE '.$this->table.' SET persona = ? WHERE id = ?';
        try {
            $this->db->prepare($sql)->execute([$this->category, $this->id]);
            return true;
        } catch (PDOException $e) {
            throw $e;
        }
    }

    public function delete()
    {
        $sql = 'DELETE FROM '.$this->table.' WHERE id = ?';
        try {
            $this->db->prepare($sql)->execute([$this->id]);
            return true;
        } catch (PDOException $e) {
            throw $e;
        }
    }
}
