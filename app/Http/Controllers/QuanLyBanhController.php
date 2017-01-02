<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
class QuanLyBanhController extends Controller
{
     protected $id;

    public function getDanhSach()
    {
        $ds=DB::SELECT('SELECT * FROM banh');
        return view('Admin.banh.DanhSachBanh',['dsbanh'=>$ds]);
    }
	
	public function getThem()
    {
         $loai=DB::SELECT('SELECT * FROM loaibanh');   

        return view('Admin.banh.ThemBanh',['loaibanh'=>$loai]);
    }
	
	
	public function postThem(Request $request)
    {
       $this->validate ($request,
           [
               'tenBanh'=>'required|min:3' ,
               'maLoai'=>'required',
               'soLuong'=>'required',
               'moTa'=>'required',
               'HinhAnh'=>'required',
               'Gia'=>'required',
               
           ],
           [
               'tenBanh.required'=>'Bạn vui lòng nhập tên bánh',
               'tenBanh.min'=>'Tên có độ dài từ 3 đến 100 ký tự',
               'maLoai.required'=>'Bạn chưa chọn mã loại bánh',
               'soLuong.required'=>'Bạn hãy nhập số lượng bánh',
               'moTa.required'=>'Bạn chưa nhập mô tả về loại bánh',
               'HinhAnh.required'=>'Bạn chưa thêm ảnh bánh',
               'Gia.required'=>'Bạn chưa nhập giá bánh vào',
           ]);
    
		$file_name = $request ->file('HinhAnh')->getClientOriginalName();
		$ten=$request->tenBanh;
		$mabanh=$request->maLoai;
		$soluong=$request->soLuong;
		$mota=$request->moTa;
		$hinhanh = $request ->file('HinhAnh')->move('/images/Cake/',$file_name);
		$gia=$request->Gia;
        
         DB::select('insert into banh(tenbanh,maloai,soluong,mota,hinhanh,gia) 
		value(?,?,?,?,?,?)',[$ten,$mabanh,$soluong,$mota,$hinhanh,$gia]);
        
        return redirect('Admin/banh/thembanh')->with('thongbao','Thêm thành công');
        
    }
	 public function getSua($id)
    {
        $loaibanh=DB::SELECT('SELECT * FROM loaibanh');
		$Banh = DB::SELECT('SELECT * FROM banh b  WHERE b.idbanh = ?',[$id]);

       
        return view('Admin.banh.CapNhatBanh',['suaBanh'=>$Banh,'loai'=>$loaibanh]);
    
    }

    public function postSua(Request $request,$id)
    {
		$file_name = $request ->file('HinhAnh')->getClientOriginalName();
		$ten=$request->tenBanh;
		$mabanh=$request->maLoai;
		$soluong=$request->soLuong;
		$mota=$request->moTa;
		$hinhanh = $request ->file('HinhAnh')->move('/images/Cake/',$file_name);
		$gia=$request->Gia;
		
        DB::table('banh')
            ->where('idbanh',$id)
            ->update(['tenbanh' => $ten, 'maloai' => $mabanh, 'soluong' => $soluong, 'mota' => $mota, 'hinhanh' => $hinhanh, 'gia' => $gia]);

            return redirect('Admin/banh/danhsachbanh')->with('thongbao','Sửa thành công');
    }
	
	public function getXoa($id)
    {

        DB::table('banh')->where('idbanh',$id)->delete();
        return redirect('Admin/banh/danhsachbanh')->with('thongbao','Xóa thành công');
    }

	//------------USER----------------
	public function getDanhSachUser()
	{
		$ds=DB::SELECT('SELECT * FROM users');
        return view('Admin.banh.user.DanhSachUser',['ds'=>$ds]);
	}
	
	public function getSuaUser($id)
	{
		$ds= DB::SELECT('SELECT * FROM users  WHERE id = ?',[$id]);

        return view('Admin.banh.user.CapNhatUser',['SuaUser'=>$ds]);
	}
	
	 public function postSuaUser($id,Request $request)
    {
        $this->validate ($request,
            [
                'Ten'=>'required|min:3|max:100' ,
                'quyen'=>'required',
            ],
            [
                'Ten.required'=>'Bạn chưa nhập tên',
                'Ten.min'=>'Tên có độ dài từ 3 đến 100 ký tự',
                'Ten.max'=>'Tên có độ dài từ 3 đến 100 ký tự',
                'quyen.required'=>'Bạn chưa chọn quyền',
            ]);
        if($request->quyen==1)
            $quyen=1;
        else
            $quyen=0;

        
        DB::table('users')
            ->where('id',$id)
            ->update(['name'=>$request->Ten,'Level'=>$quyen]);
            return redirect('Admin/banh/user/danhsachUser')->with('thongbao','Sửa thành công');
    }

	
	
	
	 public function getdangxuat()
  {
      Auth::logout();
      return redirect ('/');
  }
}
