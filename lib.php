<?php
class nhk_radio_downloader
{
    function __construct(string $file)
    {
        if (!file_exists($file)) {
            mkdir($file, 0777);
        }
        $this->file = $file;
        $this->f = 0;
    }
    function add(string $url, int $start = 0, int $end = 2000, bool $overwrite = false)
    {
        while ($start < $end) {
            if (!file_exists($this->file . "/" . $this->f . ".ts") or $overwrite) {
                $ts = file_get_contents("https://" . $url . "/" . $start . ".ts");
                file_put_contents($this->file . "/" . $this->f . ".ts", $ts);
            }
            $start++;
            $this->f++;
        }
    }
    function output_m3u8()
    {
        $m3u8 = "#EXTM3U";
        $m3u8 .= "\n";
        $m3u8 .= "#EXT-X-TARGETDURATION:10";
        $i = 0;
        while ($i < $this->f) {
            $m3u8 .= "\n";
            $m3u8 .= $i . ".ts";
            $m3u8 .= "\n";
            $m3u8 .= '#EXTINF:10,;';
            $i++;
        }
        $m3u8 .= "\n";
        $m3u8 .= "#EXT-X-ENDLIST";
        file_put_contents("./" . $this->file . "/data.m3u8", $m3u8);
    }
}
