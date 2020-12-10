<?php
set_time_limit(0);
include('lib.php');


/*現在は動きません */

$instance = new nhk_radio_downloader("radio_R1");
$instance->add("nhkradioakr1-i.akamaihd.net/hls/live/511633/1-r1/1-r1-20201116T170241-01-29");
$instance->add("nhkradioakr1-i.akamaihd.net/hls/live/511633/1-r1/1-r1-20201116T170241-01-30");
$instance->add("nhkradioakr1-i.akamaihd.net/hls/live/511633/1-r1/1-r1-20201116T170241-01-31");
$instance->output_m3u8();

$instance = new nhk_radio_downloader("radio_R2");
$instance->add("nhkradioakr2-i.akamaihd.net/hls/live/511929/1-r2/1-r2-20201116T170242-01-29");
$instance->add("nhkradioakr2-i.akamaihd.net/hls/live/511929/1-r2/1-r2-20201116T170242-01-30");
$instance->add("nhkradioakr2-i.akamaihd.net/hls/live/511929/1-r2/1-r2-20201116T170242-01-31");
$instance->output_m3u8();

$instance = new nhk_radio_downloader("radio_FM");
$instance->add("nhkradioakfm-i.akamaihd.net/hls/live/512290/1-fm/1-fm-20201116T170243-01-29");
$instance->add("nhkradioakfm-i.akamaihd.net/hls/live/512290/1-fm/1-fm-20201116T170243-01-30");
$instance->add("nhkradioakfm-i.akamaihd.net/hls/live/512290/1-fm/1-fm-20201116T170243-01-31");
$instance->output_m3u8();
