<?php

namespace app\models;

class HomeModel {
    public $file = '../storage/database/home.json';

    public function getTitleAndSubtitleHome()
    {
        if (!file_exists($this->file)) {
            return [];
        }

        $data = file_get_contents($this->file);
        return json_decode($data, true) ?? [];
    }
}