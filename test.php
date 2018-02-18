<?php
use PHPUnit\Framework\TestCase;
include("fonksiyonlar.php");
class StackTest extends TestCase
{
    public function testLoginNull()
    {
        $kadi=null;
		$sifre=null;
        $this->assertEquals(null, login($kadi,$sifre));

        $this->assertEquals(null, login($kadi,"sifre123"));

        $this->assertEquals(null, login("kullanici123",$sifre));
    }
	
	public function testPersonelEkleNull()
    {
        $adi=null;
		$soyadi=null;
        $this->assertEquals(null, personelEkle($adi,$soyadi));

        $this->assertEquals(null, personelEkle($adi,"soyad"));

        $this->assertEquals(null, personelEkle("adi",$soyadi));
    }
	
	public function testKullaniciEkleNull()
    {
        $kadi=null;
		$sifre=null;
		$yetki=0;
        $this->assertEquals(null, kullaniciEkle($kadi,$sifre,$yetki));

        $this->assertEquals(null, kullaniciEkle("kullanici","sifre",$yetki));

        $this->assertEquals(null, kullaniciEkle("kullanici123",$sifre,$yetki));
		
		$this->assertEquals(null, kullaniciEkle($kadi,"sifre123",$yetki));
		
		$this->assertEquals(null, kullaniciEkle("alksdfh","sifre123",$yetki));
    }
}
?>