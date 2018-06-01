<?php

class CategoryModel extends Model
{

    public function categories(){
        /*$sql = 'SELECT id,
                       name_room, 
                       max_capacity_chairs, 
                       current_chairs, 
                       defective_chairs FROM '.$this->table;
                       */
    /*                
    id_categoria_producto int  NOT NULL  AUTO_INCREMENT,
	tipo_producto        varchar(20)  NOT NULL  ,
	caracteristicas_producto varchar(100)    ,
    CONSTRAINT pk_categoria_producto PRIMARY KEY ( id_categoria_producto )


    id_producto          int  NOT NULL  AUTO_INCREMENT,
	t_cat_producto       int  NOT NULL  ,
	nombre_producto      varchar(50)  NOT NULL  ,
	fecha                varchar(10)  NOT NULL  ,
	peso                 varchar(10)  NOT NULL  ,
	CONSTRAINT pk_producto PRIMARY KEY ( id_producto )
    */    
        $sql = 'SELECT c.name_categoria,
                       c.id,
                       p.id,
                       p.id_categoria,
                       p.nombre_producto,
                       p.peso
                FROM categoria AS c, producto AS p
                WHERE c.id = p.id_categoria';
        $categories = $this->db->query($sql)->fetchAll(PDO::FETCH_CLASS, 'Category');
        return $categories;
    }
}
