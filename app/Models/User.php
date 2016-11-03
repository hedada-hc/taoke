<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
	protected $table = "user";
	protected $primaryKey="id";
	public $timestamps=false;
	//设置保护字段可提交  guarded排除那些字段 给个[]空数组就可以了
	protected $guarded=[];


	// public static $rules = array(
 //        'new_password'=>'required|min:6|same:confirm_password',
 //        'confirm_password'=>'required|min:6|same:confirm_password',
 //    );

 //    public static $messages = array(
 //        'new_password.required'=>'新密码不能为空!',
 //        'new_password.min'=>'新密码不得超过10位!',
 //        'new_password.same'=>'两次密码不相同!',
 //        'confirm_password.same'=>'两次密码不相同!',
 //    );
}