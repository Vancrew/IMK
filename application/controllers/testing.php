<?php
/**
 * Description of halaman
 *
 * @author andhi
 */
class testing extends CI_Controller{
      // constructor
      public function __construct() {
          parent::__construct();
      }

      // index
      public function index(){
          echo "<h1>Belajar Codeigniter Bersama Andhi Ristanta</h1>";
      }

      // halaman2
      public function halaman2(){
          echo "Ini Adalah Halaman 2 Mas Bro...";
      }
}

?>