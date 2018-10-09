<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(sinhvien::class);
    }
}
class role extends Seeder
{
	 public function run()
    {
       DB::table('role')->insert([
       							  ['rolename'=>'sinhvien','mission'=>'1'],
       							  ['rolename'=>'lop','mission'=>'1'],
       							  ['rolename'=>'nhanvien','mission'=>'1'],
       							  ['rolename'=>'diem','mission'=>'1'],
       							  ['rolename'=>'monhoc','mission'=>'1'],
       							  ['rolename'=>'phancong','mission'=>'1'],
       							  ['rolename'=>'diemdanh','mission'=>'1']
   		]);
    }
}
class admin extends Seeder{
	 public function run(){
	DB::table('admin')->insert([
		['fullname'=>'Dương Văn Toản','email'=>'36.edu.vn@gmail.com','password'=>bcrypt('toanmay123'),'sdt'=>'0963882976','avata'=>'duongtoan.jpg']
	]);
	}
}
class sinhvien extends Seeder{
	public function run(){
		DB::table('sinhvien')->insert([
			['masv'=>'sv01','tensv'=>'Lê Thành Nam','gioitinh'=>0,'email'=>'namlefpt@gmail.com','password'=>bcrypt('nam1234'),'ngaysinh'=>'1989-04-20','diachi'=>'Từ Ninh, Phú Thọ','sdt'=>'0914371372','avata'=>'namle.jpg']
		]);
	}
}