<?php
namespace App\Http\Controllers;
//取回密码 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;//crypt加密服务命名空间
use PhpSms;
use Cache;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Retrieve;
use Illuminate\Support\Facades\Validator;//自动验证空间
class RetrieveController extends Controller{
	//显示页面
	public function index(){
		return view('retrieve.first');
	}
	//第一步
	public function first(){
		//数据库手机号码
		$phone = Retrieve::where('mobile', Request()->input('phone'))->first();

		if(!$phone){
			//否认返回错误信息
			$msg=[
                'status' => 'error',
                'msg' => '手机号码未注册！'
            ];
            //返回错误信息
			return back()->withErrors($msg);
		}
			
			Session::put('phone',$phone->mobile);

		    //手机通过后显示第二步
			return view('retrieve.second');

        }

			


		//第二步
		public function second(){
			$code=Request()->input('code');
			
			if(!$code){
				//否认返回错误信息
				$msg=[
	                'status' => 'error',
	                'msg' => '验证码错误！'
	            ];	
				return back()->withErrors($msg);
			}

			if($code==Session::get('user_code')){
				return view('retrieve.third');
			}
			return view('retrieve.second');
		}



		//第三步
		public function third(){
			//接受用户密码
			$new_pwd=Request()->input('new_password');
			$confirm_pwd=Request()->input('confirm_password');
			//获取手机号码 
			if($new_pwd){
				$data=Request()->except('_token');

				// Validator验证
				//验证规则
				$rules=[
					'new_password'=>'required|min:6|same:confirm_password',
					'confirm_password'=>'required|min:6|same:confirm_password',
				];

				//验证错误提示
				$message=[
					'new_password.required'=>'新密码不能为空!',
					'new_password.min'=>'新密码不得超过10位!',
					'new_password.same'=>'两次密码不相同!',
					'confirm_password.same'=>'两次密码不相同!',
				];

				//提交数据验证
				$validator=Validator::make($data,$rules,$message);
				if($validator->passes()){

					//验证通过后修改密码  Crypt::encrypt加密
					$data['new_password']=Crypt::encrypt($new_pwd);
					$arr=['password'=>$data['new_password']];
					$re=User::where('mobile',Session::get('phone'))->update($arr);

					if($re){
						return redirect('/four');
					}else{

						//否认返回错误信息
						$msg=[
		                    'status' => 'error',
		                    'msg' => '验证码错误！'
		                ];
						return back()->withErrors($msg);
					}
				}
			}
			
			return view('retrieve.third');
		}

		//第四步
		public function four(){
			//判断不允许直接进来
			if(Session::get('phone')){
				return view('retrieve.four');
			}else{
				return redirect('/retrieve');
			}
			
		}
		
		//找回密码发送短信
		public function findPassword(){
			$phone=Session::get('phone');
			// 生成验证码 缓存5分钟
			$user_code = Cache::remember('find_password:'.$phone, 5, function(){
				return rand(1000,9999);
			});
			Session::put('user_code',$user_code);
			//发送验证码
			$re=PhpSms::make()->to(Session::get('phone'))->template(['Alidayu' => 'SMS_16150008'])->data(['verify' => $user_code])->send();

			if($re){
				$phone=substr_replace(Session::get('phone'),'****',3,4); 
				$msg=[
			                    'status' => 'success',
			                    'msg' => $phone,
			                    'code'=>$user_code
			            ];
			        return $msg;
			}


			$msg=[
		                    'status' => 'success',
		                    'msg' => "验证码错误！"
		            ];
        	//发送验证码
			return $msg;	
    	}
}