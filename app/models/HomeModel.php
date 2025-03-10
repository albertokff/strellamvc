<?php

class HomeModel {
    private $file = '../storage/database/home.json';

    public function getTitleAndSubtitleHome()
    {
        if (!file_exists($file)) {
            return [];
        }

        $data = file_get_contents($this->file);
        return json_decode($data, true) ?? [];
    }
}