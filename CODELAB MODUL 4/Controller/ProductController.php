<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include " Controller/controller.php";

use Traits\ResponseFormatter;

// DISIMULASIKAN INI ADALAH CLASS CONTROLLER PRODUCT
class ProductController extends Controller
{
    // gunakan trait yang sudah dibuat
    use ResponseFormatter;

    //MAGIC METHOD, Method ini akan diakses pada saat pembuatan object.
    public function _construct()
    {
        // SET ATRIBUT controllerNmae PADA PARENT CLASS CONTROLLER
        $this->controllerName = "Get All Product";
        // SET ATRIBUT controllerMethod PADA PARENT CLASS CONTROLLER
        $this->controllerMethod = "GET";
    }
    
    // DISIMULASIKAN INI METHOD UNTUK GET DATA PRODUCT
    public function getAllproduct()
    {
        // ARRAY DUMMY DATA
        $dummyData = [
            "Air Mineral",
            "Kebab",
            "Spagetti",
            "Jus Jambu",
        ];

        $response = [
            "controller_attribute" => $this->getControllerAttribute(), // ambil method getContollerAttribute dari parent class
            "product" => $dummyData
        ];

        // gunakan method dari trait yang sudah di buat
        return $this->responseFormatter(200, "Success", $response);
    } 
}