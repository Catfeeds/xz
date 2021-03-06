<?php
/**
 * Powerd by ArPHP.
 *
 * Model.
 *
 * @author ycassnr <ycassnr@gmail.com>
 */

/**
 * 消息数据库模型.
 */
class MsgModel extends ArModel
{
    // 表名
    public $tableName = 'h_msg';

    // 初始化model
    static public function model($class = __CLASS__)
    {
        return parent::model($class);

    }

    //注册
    const TYPE_REG = 1;
    // 兑换积分商品
    const YTPE_CHARGE = 2;
    // 开户
    const TYPE_REG_TRUE = 3;
    // 管理员消息
    const TYPE_ADMIN = 4;


    const READED_YES = 1;
    const READED_NO = 0;

    public static $READED_MAP = array(
        0 => '未读',
        1 => '已读',
    );

        // 修改即将写入数据的数据
    public function formatData($data)
    {
        $data['stime'] = time();
        return $data;

    }

}
