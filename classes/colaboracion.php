<?php

class colaboracion extends object_standard {

    //attributes
    protected $autor;
    protected $codigo_publicacion;
    //components
    var $components = array();
    //auxiliars for primary key and for files
    var $auxiliars = array();

    //data about the attributes
    public function metadata() {
        return array("autor" => array("foreign_name" => "c_a", "foreign" => "autor", 
                      "foreign_attribute" => "consecutivo"), "codigo_publicacion" => array("foreign_name" => "c_p",
                          "foreign" => "publicacion", "foreign_attribute" => "codigo_biblioteca"));
    }

    public function primary_key() {
        return array("codigo_biblioteca", "autor");
    }

    public function relational_keys($class, $rel_name) {
        switch ($class) {
            case "autor":
                switch ($rel_name) {
                    case "c_a":
                        return array("autor");
                        break;
                }
                break;
            case "publicacion":
                switch ($rel_name) {
                    case "c_p":
                        return array("publicacion");
                        break;
                }
                break;
            default:
                break;
        }
    }

}

?>
