# nhk_radio_downloader

NHK らじる ☆ らじるのラジオをダウンロードできるライブラリです<br>

```php
include('lib.php');
$instance = new nhk_radio_downloader("directory");//保存先
$instance->add("nhkradioakr1-i.akamaihd.net/hls/live/511633/1-r1/1-r1-20201116T170241-01-29");//リンク
$instance->output_m3u8();//出力

$instance = new nhk_radio_downloader("directory2");
$instance->add("nhkradioakr1-i.akamaihd.net/hls/live/511633/1-r1/1-r1-20201116T170241-01-29", 500, 2000);//500から2000までを保存する
$instance->add("nhkradioakr1-i.akamaihd.net/hls/live/511633/1-r1/1-r1-20201116T170241-01-30", 0, 500);//0から500までを保存する
$instance->output_m3u8();
```

## NHK ラジオの仕様について

ラジオ第 1（東京）<br>
https://nhkradioakr1-i.akamaihd.net/hls/live/511633/1-r1/1-r1-20201116T170241-01-100/1000.ts<br>
nhkradioakr1-i.akamaihd.net/hls/live/511633/1-r1/1-r1-20201116T170241-01-100<br>
ラジオ第 2<br>
https://nhkradioakr2-i.akamaihd.net/hls/live/511929/1-r2/1-r2-20201116T170242-01-100/1000.ts<br>
nhkradioakr2-i.akamaihd.net/hls/live/511929/1-r2/1-r2-20201116T170242-01-100<br>
NHK-FM（東京）<br>
https://nhkradioakfm-i.akamaihd.net/hls/live/512290/1-fm/1-fm-20201116T170243-01-100/1000.ts<br>
nhkradioakfm-i.akamaihd.net/hls/live/512290/1-fm/1-fm-20201116T170243-01-100<br>
<br>
ts ファイルの数字は連番のようです<br>
0-2000 まで存在します<br>
2000 までいくと 1 つ前の数字が 1 つ増えます<br>
99/2000.ts の次は 100/0.ts です<br>
また 2000 までいくと 1 増えますが 3 前のデータは削除されるようです<br>
URL の規則性がこれだけしかわかりません<br>
