<?php

namespace app\index\validate;

use think\Validate;

class OrderUpload extends Validate
{
    /**
     * 验证规则
     */
    protected $rule = [
        /*'__token__'     => 'require|token',
        'shenzheng'     => 'require|file|image|fileExt:gif,jpg,jpeg,png,bmp|fileSize:1M',
        'shenfan'       => 'require|file|image|fileExt:gif,jpg,jpeg,png,bmp|fileSize:1M',
        'license'       => 'require|file|image|fileExt:gif,jpg,jpeg,png,bmp|fileSize:1M',
        'screenshots'   => 'require|file|image|fileExt:gif,jpg,jpeg,png,bmp|fileSize:1M',
        'poweratt'      => 'require|file|image|fileExt:gif,jpg,jpeg,png,bmp|fileSize:1M',*/
        '__token__'     => 'require|token',
        'shenzheng'     => 'require',
        'shenfan'       => 'require',
        'license'       => 'require',
        'screenshots'   => 'require',
        'poweratt'      => 'require',
    ];
    /**
     * 提示消息
     */
    protected $message = [
        'shenzheng.require'     => 'shenzheng can not be empty',
        'shenzheng.file'        => 'shenzheng illegal file',
        'shenzheng.image'       => 'shenzheng must be a picture file',
        'shenzheng.fileExt'     => 'shenzheng the suffix error',
        'shenzheng.fileSize'    => 'shenzheng can not be greater than 1024M',
        'shenfan.require'       => 'shenfan can not be empty',
        'shenfan.file'          => 'shenfan illegal file',
        'shenfan.image'         => 'shenfan must be a picture file',
        'shenfan.fileExt'       => 'shenfan the suffix error',
        'shenfan.fileSize'      => 'shenfan can not be greater than 1024M',
        'license.require'       => 'license can not be empty',
        'license.file'          => 'license illegal file',
        'license.image'         => 'license must be a picture file',
        'license.fileExt'       => 'license the suffix error',
        'license.fileSize'      => 'license can not be greater than 1024M',
        'screenshots.require'   => 'screenshots can not be empty',
        'screenshots.file'      => 'screenshots illegal file',
        'screenshots.image'     => 'screenshots must be a picture file',
        'screenshots.fileExt'   => 'screenshots the suffix error',
        'screenshots.fileSize'  => 'screenshots can not be greater than 1024M',
        'poweratt.require'      => 'poweratt can not be empty',
        'poweratt.file'         => 'poweratt illegal file',
        'poweratt.image'        => 'poweratt must be a picture file',
        'poweratt.fileExt'      => 'poweratt the suffix error',
        'poweratt.fileSize'     => 'poweratt can not be greater than 1024M',

    ];
    /**
     * 验证场景
     */
    protected $scene = [
        'add'  => ['shenzheng','shenfan','license','screenshots','poweratt'],
        'edit' => [],
    ];


}

