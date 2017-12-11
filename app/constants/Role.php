<?php

namespace app\constants;

class Role {
    const EMPLOYEE = 10;
    const SALES = 50;
    const DESIGNER = 60;
    const PRINTER = 70;
    const SHIPPER = 80;
    const MANAGER = 90;
    const ADMIN = 100;

    public static function all() {
        return [
          self::EMPLOYEE => 'Nhân viên',
          self::SALES => 'Kinh doanh',
          self::DESIGNER => 'Thiết kế',
          self::PRINTER => 'In ấn',
          self::SHIPPER => 'Giao hàng',
          self::MANAGER => 'Quản lý',
          self::ADMIN => 'Giám đốc',
        ];
    }

    public static function one($item) {
        $all = self::all();
        return isset($all[$item]) ? $all[$item] : null;
    }
}