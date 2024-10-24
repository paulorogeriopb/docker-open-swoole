<?php

$urls = [
    'https://webhook.site/f97f3e46-e341-4af0-a3f5-e7387b1ef6c6?prm4',
    'https://webhook.site/f97f3e46-e341-4af0-a3f5-e7387b1ef6c6?prm5',
    'https://webhook.site/f97f3e46-e341-4af0-a3f5-e7387b1ef6c6?prm6',
    'https://webhook.site/f97f3e46-e341-4af0-a3f5-e7387b1ef6c6?prm4',
    'https://webhook.site/f97f3e46-e341-4af0-a3f5-e7387b1ef6c6?prm5',
    'https://webhook.site/f97f3e46-e341-4af0-a3f5-e7387b1ef6c6?prm6',
    'https://webhook.site/f97f3e46-e341-4af0-a3f5-e7387b1ef6c6?prm4',
    'https://webhook.site/f97f3e46-e341-4af0-a3f5-e7387b1ef6c6?prm5',
    'https://webhook.site/f97f3e46-e341-4af0-a3f5-e7387b1ef6c6?prm6',
    'https://webhook.site/f97f3e46-e341-4af0-a3f5-e7387b1ef6c6?prm4',
    'https://webhook.site/f97f3e46-e341-4af0-a3f5-e7387b1ef6c6?prm5',
    'https://webhook.site/f97f3e46-e341-4af0-a3f5-e7387b1ef6c6?prm6',
];

// foreach ($urls as $url) {
//     file_get_contents($url);
//     echo 'curl success ' . $url . PHP_EOL;
// }
use Swoole\Coroutine\Http\Client;

foreach ($urls as $url) {
    go(function () use ($url) {
        $pareUrl = parse_url($url);
        $host = $pareUrl['host'];
        $path = $pareUrl['path'] . (isset($pareUrl['query']) ? '?' . $pareUrl['query'] : '/');
        $client = new Client($host, 80);
        $client->get($path);
        $client->close();
        echo 'request success ' . $url . PHP_EOL;
    });
}
Swoole\Event::wait();