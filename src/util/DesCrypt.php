<?php


namespace sffi\phlegethon\util;


class DesCrypt
{
//    public static function des_encryptb($str,$key)
//    {
//        $str = self::pkcsPadding($str, 8);
////        $v = pack('H*', "1234567890abcdef");
//        $key = str_pad($key, 8, 0);
//        $sign = openssl_encrypt($str, 'DES-ECB', $key, OPENSSL_ZERO_PADDING|OPENSSL_RAW_DATA);
//        $sign = base64_encode($sign);
//        return $sign;
//    }

    //des解密（cbc模式）
    public function des_decryptb($encrypted,$key)
    {
        $encrypted = base64_decode($encrypted);
//        $v = pack('H*', "1234567890abcdef");
        $key = str_pad($key, 8, '0');
        $sign = @openssl_decrypt($encrypted, 'DES-ECB', $key);
        $sign = $this->unPkcsPadding($sign);
        $sign = rtrim($sign);
        return $sign;
    }

    public static function des_encrypt($input, $key, $method = 'DES-ECB')
    {
        $ivlen = openssl_cipher_iv_length($method);    // 获取密码iv长度
        $iv = openssl_random_pseudo_bytes($ivlen);        // 生成一个伪随机字节串
        $data = openssl_encrypt($input, $method, $key, $options=OPENSSL_RAW_DATA, $iv);    // 加密
        return bin2hex($data);
    }


    public static function des_decrypt($input, $key, $method = 'DES-ECB')
    {
        $ivlen = openssl_cipher_iv_length($method);    // 获取密码iv长度
        $iv = openssl_random_pseudo_bytes($ivlen);        // 生成一个伪随机字节串
        $data = openssl_encrypt(hex2bin($input), $method, $key, $options=OPENSSL_RAW_DATA, $iv);    // 加密
        return $data;
    }



    /**
     * 填充
     *
     * @param $str
     * @param $blocksize
     * @return string
     */
    private static function pkcsPadding($str, $blocksize)
    {
        $pad = $blocksize - (strlen($str) % $blocksize);
        return $str . str_repeat(chr($pad), $pad);
    }

        /**
     * 去填充
     *
     * @param $str
     * @return string
     */
    private static function unPkcsPadding($str)
    {
        $pad = ord($str{strlen($str) - 1});
        if ($pad > strlen($str)) {
            return false;
        }
        return substr($str, 0, -1 * $pad);
    }
}