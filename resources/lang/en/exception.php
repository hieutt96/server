<?php

return 
	
	[
		\App\Exceptions\AppException::ERR_NONE => 'Thành công',
		\App\Exceptions\AppException::ERR_ACCOUNT_NOT_FOUND => 'Không tìm thấy tài khoản',
		\App\Exceptions\AppException::ERR_SYSTEM => 'Lỗi hệ thống',
		\App\Exceptions\AppException::ERR_NOT_USER => 'Không tìm thấy người dùng',
		\App\Exceptions\AppException::ERR_INVALID_TOKEN => 'Hết phiên đăng nhập',
		\App\Exceptions\AppException::EMAIL_EXIST => 'Email đã tồn tại trên hệ thống',
		\App\Exceptions\AppException::ACCOUNT_NO_EXIST => 'Không tìm thấy tài khoản hợp lệ',
		\App\Exceptions\AppException::ACCOUNT_NOT_ACTIVE => 'Sai thông tin đăng nhập hoặc tài khoản chưa được Active !',
		\App\Exceptions\AppException::USER_NOT_EXIST => 'Không tìm thấy người dùng với thông tin này',
		\App\Exceptions\AppException::ERR_PASSWORD_INVAILD => 'Sai mật khẩu đăng nhập',
		\App\Exceptions\AppException::ERR_NOTIFICATION_NOT_FOUND => 'Không tìm thấy thông báo',
		\App\Exceptions\AppException::ERR_GOOGLE2FA_INVAILD => 'Sai mã Google Authenticate',
	];
