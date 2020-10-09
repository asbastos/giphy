<?php

namespace Giphy;

class Giphy {
    private $giphy;

    public function __construct()
    {
        $this->giphy = new Client ();
    }

    public function searchGif(string $search)
    {
        return $this->giphy->get('gifs/search?=q' . $search);
    }

    public function searchSticker(string $search)
    {
        return $this->giphy->get('stickers/search?q=' . $search);
    }
}