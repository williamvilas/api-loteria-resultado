<?php

namespace WilliamVilas\Loteria\Library;

class Curl
{
    private $ch;
    private $url;
    private $options;

    public function __construct(string $url)
    {
        $this->url = $url;
        $this->ch = curl_init($this->url);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
        $this->setTimeout(15);
    }

    public function setHeader(array $header)
    {
        if(count($header) > 0) {
            curl_setopt($this->ch, CURLOPT_HTTPHEADER, $header);
        }
    }

    public function post(array $post)
    {
        if($post !== null) {
            curl_setopt($this->ch, CURLOPT_POSTFIELDS, http_build_query($post, '', '&'));
        }
    }

    public function setTimeout(int $timeout)
    {
        if ($timeout) {
            $this->options[CURLOPT_TIMEOUT] = $timeout;
        }
    }

    public function setRefer($refer)
    {
        if ($refer) {
            $this->options[CURLOPT_REFERER] = $refer;
        }
    }

    private function getOptions()
    {
        $this->options = [
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_FOLLOWLOCATION => 1,
            CURLOPT_AUTOREFERER => 1,
            CURLOPT_USERAGENT => 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)',
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_0,
            CURLOPT_HTTPHEADER => ['Expect:'],
            CURLOPT_IPRESOLVE => CURL_IPRESOLVE_V4,
            CURLOPT_MAXREDIRS => 2
        ];
    }

    private function getSsl()
    {
        $ssl = stripos($this->url,'https://') === 0 ? true : false;

        if ($ssl) {
            //support https
            $this->options[CURLOPT_SSL_VERIFYHOST] = false;
            $this->options[CURLOPT_SSL_VERIFYPEER] = false;
        }
    }

    public function exec()
    {
        $this->getOptions();
        $this->getSsl();

        curl_setopt_array($this->ch, $this->options);
        $returnData = curl_exec($this->ch);

        if (curl_errno($this->ch)) {
            $returnData = curl_error($this->ch);
            throw new \Exception($returnData);
        }

        curl_close($this->ch);
        return json_decode($returnData);
    }
}