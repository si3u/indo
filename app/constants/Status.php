<?php

namespace app\constants;

class Status {
    const ACTIVE = 1;
    const DEACTIVATED = 0;

    public static function all() {
        return [
          self::ACTIVE => 'Kích hoạt',
          self::DEACTIVATED => 'Ngưng kích hoạt',
        ];
    }

    public static function one($item) {
        $all = self::all();
        return isset($all[$item]) ? $all[$item] : null;
    }
}