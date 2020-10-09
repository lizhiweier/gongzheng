<?php

namespace app\index\validate;

use think\Validate;

class OrderForm extends Validate
{
    /**
     * 验证规则
     */
    protected $rule = [
        '__token__'     => 'require|token',
        'orginid'       => 'require',
        'types'         => 'require',
        'subname'       => 'require',
        'enterinfo'     => 'require',
        'realname'      => 'require|length:2,5',
        'idnumber'      => 'require|checkIdcard:',
        'mobile'        => 'require|regex:/^1\d{10}$/',
        'email'         => 'require|email',
        'address'       => 'require',
        'management'    => 'require|length:2,5',
        'manageid'      => 'require|checkIdcard:',
    ];
    /**
     * 提示消息
     */
    protected $message = [
        'orginid.require'       => 'orginid can not be empty',
        'types.require'         => 'types can not be empty',
        'subname.require'       => 'subname can not be empty',
        'enterinfo.require'     => 'enterinfo can not be empty',
        'realname.require'      => 'realname can not be empty',
        'realname.length'       => 'realname must be 2 to 5 characters',
        'idnumber.require'      => 'idnumber can not be empty',
        'idnumber.checkIdcard'  => 'idnumber must be id number',
        'mobile.require'        => 'mobile can not be empty',
        'mobile.regex'          => 'mobile must be a cell phone number',
        'email.require'         => 'email can not be empty',
        'email.email'           => 'email must be email',
        'address.require'       => 'address can not be empty',
        'management.require'    => 'management can not be empty',
        'management.length'     => 'management must be 2 to 5 characters',
        'manageid.require'      => 'manageid can not be empty',
        'manageid.checkIdcard'  => 'manageid must be id number',
    ];
    /**
     * 验证场景
     */
    protected $scene = [
        'add'  => ['orginid','types','subname','enterinfo','realname','idnumber','mobile','email','address','management','manageid'],
        'edit' => [],
    ];

    /***
     * 身份证真实性验证规则
     */
    function checkIdcard($id_card)
    {
        if (strlen($id_card) == 18) {
            return $this->idcard_checksum18($id_card);
        } elseif ((strlen($id_card) == 15)) {
            $id_card = $this->idcard_15to18($id_card);
            return $this->idcard_checksum18($id_card);
        } else {
            return false;
        }
    }

// 计算身份证校验码，根据国家标准GB 11643-1999
    function idcard_verify_number($idcard_base)
    {
        if (strlen($idcard_base) != 17) {
            return false;
        }
        //加权因子
        $factor = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
        //校验码对应值
        $verify_number_list = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
        $checksum = 0;
        for ($i = 0; $i < strlen($idcard_base); $i++) {
            $checksum += substr($idcard_base, $i, 1) * $factor[$i];
        }
        $mod = $checksum % 11;
        $verify_number = $verify_number_list[$mod];
        return $verify_number;
    }

// 将15位身份证升级到18位
    function idcard_15to18($idcard)
    {
        if (strlen($idcard) != 15) {
            return false;
        } else {
            // 如果身份证顺序码是996 997 998 999，这些是为百岁以上老人的特殊编码
            if (array_search(substr($idcard, 12, 3), array('996', '997', '998', '999')) !== false) {
                $idcard = substr($idcard, 0, 6) . '18' . substr($idcard, 6, 9);
            } else {
                $idcard = substr($idcard, 0, 6) . '19' . substr($idcard, 6, 9);
            }
        }
        $idcard = $idcard . $this->idcard_verify_number($idcard);
        return $idcard;
    }

// 18位身份证校验码有效性检查
    function idcard_checksum18($idcard)
    {
        if (strlen($idcard) != 18) {
            return false;
        }
        $idcard_base = substr($idcard, 0, 17);
        if ($this->idcard_verify_number($idcard_base) != strtoupper(substr($idcard, 17, 1))) {
            return false;
        } else {
            return true;
        }
    }

}

