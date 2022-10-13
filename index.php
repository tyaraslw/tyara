<?php

  class Siswa {
      public  $nama       = "Tyara Salwa Mihallie";
      public $kelas       = "XI";
      protected  $jurusan = "PPLG";
      private $nis        = "040052";
      function tampilkanDataSiswa(){
          echo "nama    : $this->nama    <br>";
          echo "kelas   : $this->kelas   <br>";
          echo "jurusan : $this->jurusan <br>";
          echo "nis     : $this->nis     <br>";
      }
  }  
  
  class rpl extends siswa{
      
  }
  
  $siswa1 = new Siswa("");
  $siswa1->tampilkanDataSiswa();
?>
