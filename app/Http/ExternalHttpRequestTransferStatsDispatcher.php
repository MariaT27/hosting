<?php namespace App\Http;

use App\Events\ExternalHttpRequestMade;
use GuzzleHttp\TransferStats;

class ExternalHttpRequestTransferStatsDispatcher
{
    private $serviceName;

    public function __construct(string $serviceName)
    {
        $this->serviceName = $serviceName;
    }

    public function __invoke(TransferStats $stats)
    {
        $request = $stats->getRequest();
        $response = $stats->getResponse();
        $uri = $request->getUri();

        if ($stats->hasResponse()) {
            event(new ExternalHttpRequestMade(
                $this->serviceName,
                $request->getMethod(),
                $uri->getScheme(),
                $uri->getHost(),
                $uri->getPath(),
                $uri->getQuery(),
                json_encode($request->getHeaders(), JSON_UNESCAPED_UNICODE),
                (string) $request->getBody(),
                json_encode($response->getHeaders(), JSON_UNESCAPED_UNICODE),
                (string) $response->getBody(),
                $stats->getHandlerStat('download_content_length'),
                $stats->getHandlerStat('total_time_us') ?? $stats->getHandlerStat('total_time') * 100000,
                $response->getStatusCode(),
                $stats->getHandlerStat('http_version') ?? '',
                $stats->getHandlerStat('redirect_count'),
                $stats->getHandlerStat('redirect_time_us') ?? $stats->getHandlerStat('redirect_time') * 100000,
                $stats->getHandlerStat('redirect_url') ?? ''
            ));
        }
    }
}