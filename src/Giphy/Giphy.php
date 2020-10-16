<?php

namespace Giphy;

class Giphy
{
    private $giphy;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function searchGif(string $search)
    {
        $transformed = [];
        $image = $this->client->get('gifs/search?q=' . $search);

        foreach ($image['data'] as $item) {
            $transformed['data'][] = [
                'type' => $item['type'],
                'id' => $item['id'],
                'slug' => $item['slug'],
                'url' => $item['url'],
                'bitly_url' => $item['bitly_url'],
                'embed_url' => $item['embed_url'],
                'title' => $item['title'],
            ];
        }

        $transformed['pagination'] = $image['pagination'];
        $transformed['meta'] = $image['meta'];
        
        return $transformed;
    }

    public function searchSticker(string $search)
    {
        return $this->giphy->get('stickers/search?q=' . $search);
    }

    public function trendingGif(string $trending)
    {
        return $this->client->get('gifs/trending?&' . $trending);
    }

    public function trendingSticker(string $trending)
    {
        return $this->client->get('sticker/trendin?&' . $trending);
    }
}
